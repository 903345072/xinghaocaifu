<?php

namespace admin\controllers;

use Yii;
use admin\models\User;
use admin\models\Product;
use admin\models\ProductPrice;
use common\helpers\Hui;
use common\helpers\Html;

class ProductController extends \admin\components\Controller
{
    /**
     * @authname 产品列表
     */
    public function actionList()
    {
        $query = (new Product)->listQuery()->orderBy('on_sale, hot ASC');

        $html = $query->getTable([
            'name' => ['type' => 'text'],
            'desc' => ['type' => 'text'],
            // 'one_profit' => ['type' => 'text'],
            'identify' => ['type' => 'text'],
            'color' => ['type' => 'text'],
            'currency' => ['type' => 'select'],
            'hot' => ['type' => 'select'],
            'force_sell' => ['type' => 'select'],
            'on_sale' => ['type' => 'select'],
            'type' => ['type' => 'select'],
            ['type' => ['delete'], 'width' => '250px', 'value' => function ($row) {
                return 
                    implode(str_repeat('&nbsp;', 2), [
                        Hui::successBtn('设置交易时间', ['setTradeTime', 'id' => $row->id], ['class' => 'fancybox fancybox.iframe']),
                        Hui::primaryBtn('设置交易价格', ['setTradePrice', 'id' => $row->id], ['class' => 'fancybox fancybox.iframe'])
                    ]);
            }]
        ], [
            'paging' => 20,
            'extraBtn' => ['ajaxAllUp' => '一键上架', 'ajaxAllDown' => '一键下架']
        ]);

        return $this->render('list', compact('html'));
    }

    /**
     * @authname 一键上架产品
     */
    public function actionAjaxAllUp()
    {
        Product::updateAll(['on_sale' => Product::ON_SALE_YES], '1');

        return success();
    }

    /**
     * @authname 一键下架产品
     */
    public function actionAjaxAllDown()
    {
        Product::updateAll(['on_sale' => Product::ON_SALE_NO], '1');

        return success();
    }

    public function actionDeletePrice()
    {
        $model = ProductPrice::findOne(post('id'));
        if ($model->delete()) {
            return success();
        } else {
            return error($model);
        }
    }

    /**
     * @authname 设置交易价格
     */
    public function actionSetTradePrice($id)
    {
        $product = Product::findOne($id);
        $models = ProductPrice::find()->where(['product_id' => $id])->all();
        if (!$models) {
            $models[] = new ProductPrice;
        }

        if (req()->isPost) {
            for ($i = count($models); $i < count(post('ProductPrice')); $i++) {
                $models[] = new ProductPrice;
            }
            if (ProductPrice::loadMultiple($models, post()) && ProductPrice::validateMultiple($models)) {
                foreach ($models as $model) {
                    $model->save(false);
                }
                return success('设置成功');
            } else {
                $errors = [];
                foreach ($models as $key => $model) {
                    $errors = array_merge($errors, $model->errors);
                }
                return error($errors);
            }
        }

        return $this->render('setTradePrice', compact('models', 'product'));
    }    

    /**
     * @authname 设置交易时间
     */
    public function actionSetTradeTime($id)
    {
        $model = Product::findOne($id);

        if ($model->load(post())) {
            $data = [];
            foreach ($model->trade_start_time as $key => $value) {
                if ($value && $model->trade_end_time[$key]) {
                    $item = [];
                    $item['start'] = $value;
                    $item['end'] = $model->trade_end_time[$key];
                    $data[] = $item;
                }
            }
            $model->trade_time = serialize($data);
            $model->update(false);
            return success('设置成功');
        }
        if ($model->trade_time) {
            $time = unserialize($model->trade_time);
        }
        if (empty($time)) {
            $time = [
                ['start' => '', 'end' => ''],
            ];
        }

        return $this->render('setTradeTime', compact('model', 'time'));
    }
}

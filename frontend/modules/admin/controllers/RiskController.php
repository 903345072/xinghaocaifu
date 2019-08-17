<?php

namespace admin\controllers;

use home\models\DataAll;
use Yii;
use admin\models\Product;
use admin\models\Order;

class RiskController extends \admin\components\Controller
{
    /**
     * @authname 风险控制
     */
    public function actionCenter()
    {
        $switch = option('risk_switch');
        $products = Product::find()->where(['on_sale' => Product::ON_SALE_YES, 'state' => Product::STATE_VALID])->asArray()->all();
        $risk_product = option('risk_product') ?: [];

        if (req()->isPost) {
            option('risk_switch', post('risk_switch'));
            if ($post = post('product', [])) {
                foreach ($post as $product => $value) {
                    $params[$product] = $value;
                }
                option('risk_product', $params);
            }
            return success();
        }
        return $this->render('center', compact('switch', 'products', 'risk_product'));
    }

    public function actionRisk()
    {
        if (req()->isPost) {
            session_start();
            $product = (new Product)->findModel(get('id'));
            $risk = post('risk');
            if (strpos($risk,'-') === false){
                return error('请输入正确格式');
            }
            $risk = explode('-',$risk);
            $risk[2] = time()+($risk[0]*60);
            $obj = DataAll::find()->where(['symbol'=>$product->identify])->one();
            $now_point = $obj->price;
            if ($risk[1]>$now_point){  //上升趋势
                $c_state = 1;
            }elseif ($risk[1]<$now_point){
                $c_state = 2; //下降趋势
            }else{
                $c_state = 2; //正常走势
            }
            list($product->expect_minit,$product->expect_point,$product->expect_time) = $risk;
            $product->c_state = $c_state;
            if ($product->update()){
                return success();
            } else {
                return error($product);
            }
        }
        $productArr = Product::getIndexProduct();
        return $this->render('risk', compact('productArr'));
    }



    public function actionSetSlide($id)
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

        return $this->render('setRisk', compact('model', 'time'));
    }
}

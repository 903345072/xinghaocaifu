<?php

namespace frontend\models;

use Yii;

class Product extends \common\models\Product
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            // [['field1', 'field2'], 'required', 'message' => '{attribute} is required'],
        ]);
    }

    public function scenarios()
    {
        return array_merge(parent::scenarios(), [
            // 'scenario' => ['field1', 'field2'],
        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            // 'field1' => 'description1',
            // 'field2' => 'description2',
        ]);
    }
    //获取首页三个上架的产品
    public static function getIndexProduct()
    {
        $products = self::find()->where(['on_sale' => self::ON_SALE_YES, 'state' => self::STATE_VALID])->limit(3)->orderBy('hot DESC')->all();
        $arr = [];
        foreach ($products as $product) {
            $arr[$product->id] = $product->name; 
        }
        return $arr;
    }

    public static function getIndexCashProduct()
    {
        $lists = self::find()->where(['on_sale' => self::ON_SALE_YES, 'state' => self::STATE_VALID, 'type' => self::BUY_TYPE_CASH])->orderBy('hot DESC')->all();
        foreach($lists as $k => $v)
        {
            $lists[$k]['isTrade'] = 1;
            if (!Product::isTradeTime($v['id']) || date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1)) {
                $lists[$k]['isTrade'] = 2;
            }
            $tradeTime = unserialize($v['trade_time']);
            if($tradeTime)
            {
                /*$tradeTime_ = '';
                foreach($tradeTime as $val)
                {
                    $tradeTime_ .= $val['start']. "-" .date('H:i',strtotime($val['end']) - 120) . '       ';
                }*/
                $_startTime = $tradeTime[0]['start'];
                $_endTime   = end($tradeTime)['end'];
                if (strtotime($_startTime) < strtotime($_endTime)) {
                    $tradeTime_ = $_startTime . '-' . $_endTime;
                } else {
                    $tradeTime_ = $_startTime . '-次日' . $_endTime;
                }
                $lists[$k]['tradeTime'] = $tradeTime_;

            }else{
                $lists[$k]['tradeTime'] = '24小时';
            }

        }
        return $lists;
    }

    public static function getIndexVolumeProduct()
    {
        $lists = self::find()->where(['on_sale' => self::ON_SALE_YES, 'state' => self::STATE_VALID, 'type' => self::BUY_TYPE_VOLUME])->with('dataAll')->orderBy('hot DESC')->all();
        foreach($lists as $k => $v)
        {
            $lists[$k]['isTrade'] = 1;
            if (!Product::isTradeTime($v['id']) || date('w') == 0 || (date('G') > 6 && date('w') == 6) || (date('G') < 7 && date('w') == 1))
            {
                $lists[$k]['isTrade'] = 2;
            }

            $tradeTime = unserialize($v['trade_time']);
            if($tradeTime)
            {
                /*$tradeTime_ = '';
                foreach($tradeTime as $val)
                {
                    $tradeTime_ .= $val['start']. "-" .date('H:i',strtotime($val['end']) - 120) . '       ';
                }*/
                $_startTime = $tradeTime[0]['start'];
                $_endTime   = end($tradeTime)['end'];
                if (strtotime($_startTime) < strtotime($_endTime)) {
                    $tradeTime_ = $_startTime . '-' . $_endTime;
                } else {
                    $tradeTime_ = $_startTime . '-次日' . $_endTime;
                }
                $lists[$k]['tradeTime'] = $tradeTime_;

            }else{
                $lists[$k]['tradeTime'] = '24小时';
            }


        }
        return $lists;
    }
    /**
     * 获取指定产品
     * @return array
     */
    public static function getDetailProduct($id='')
    {
        $products = self::find()->with(['dataAll'])->where(['on_sale' => self::ON_SALE_YES, 'state' => self::STATE_VALID, 'id' => $id])->orderBy('hot DESC')->one();
        $products->on_sale = self::isTradeTime($products->id) ? 1 : -1;
        return $products;
    }
}


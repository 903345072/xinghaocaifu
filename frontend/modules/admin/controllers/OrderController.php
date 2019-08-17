<?php

namespace admin\controllers;

use Yii;
use admin\models\Order;
use common\helpers\Hui;
use common\helpers\Html;

class OrderController extends \admin\components\Controller
{
    /**
     * @authname 订单列表
     */
    public function actionList()
    {
        $query      = (new Order)->listQuery()->joinWith([
            'product.dataAll',
            'user.parent',
            'user.admin',
        ])->manager()->orderBy('order.id DESC');
        $countQuery = (new Order)->listQuery()->joinWith(['product.dataAll', 'user.parent', 'user.admin'])->manager();

        // 今日盈亏统计，交易额、手数、手续费
        $amount = $countQuery->select('SUM(order.deposit) deposit')->one()->deposit ?: 0;
        $hand   = $countQuery->select('SUM(order.hand) hand')->one()->hand ?: 0;
        $fee    = $countQuery->select('SUM(order.fee) fee')->one()->fee ?: 0;
        $profit = $countQuery->andWhere(['order_state' => Order::ORDER_THROW])->select('SUM(order.profit) profit')->one()->profit;

        $html = $query->getTable([
            'user.id',
            'user.nickname',
            [
                'header' => '推荐人(ID)',
                'value'  => function ($row) {

                    return $row->user->getParentLink('user.id');
                },
            ],
            'admin.username' => ['header' => '代理商账户'],
            'product.name',
            'created_at',
            'updated_at'     => function ($row) {
                return $row['order_state'] == Order::ORDER_POSITION ? '' : $row['updated_at'];
            },
            'rise_fall'      => [
                'header' => '涨跌',
                'value'  => function ($row) {
                    return $row['rise_fall'] == Order::RISE ? Html::redSpan('买涨') : Html::greenSpan('买跌');
                },
            ],
            'price',
            'fee',
            'stop_profit_amount',
            'stop_loss_amount',
            'sell_price'     => function ($row) {
                if ($row['order_state'] == Order::ORDER_POSITION) {
                    return '';
                } else {
                    if ($row['price'] < $row['sell_price']) {
                        return Html::redSpan($row['sell_price']);
                    } else {
                        return Html::greenSpan($row['sell_price']);
                    }
                }
            },
            'hand',
            'deposit',
            'profit'         => function ($row) {
                return $row['profit'] >= 0 ? Html::redSpan($row['profit']) : Html::greenSpan($row['profit']);
            },
            //'user.account',
            'user.amount'=>[
                'header' => '账号余额',
                'value'  => function ($row) {
                    return $row->user['account'] - $row->user['blocked_account'];
                },
            ],
            //'user.account' => function ($row) {
            //    return $row['account'] - $row['blocked_account'];
            //},
            'order_state',
        ], [
            'ajaxReturn'    => [
                'countProfit' => '盈亏统计：' . ($profit >= 0 ? Html::redSpan($profit) : Html::greenSpan($profit)) . '，',
                'countAmount' => $amount,
                'countHand'   => $hand,
                'countFee'    => $fee,
            ],
            'searchColumns' => [
                'user.id',
                'admin.username' => ['header' => '代理商账户'],
                'user.pid'       => ['header' => '推荐人ID'],
                'user.mobile'       => ['header' => '手机号'],
                'product_name'   => ['type' => 'select', 'header' => '选择产品'],
                'user.nickname',
                'time'           => 'timeRange',
                'is_profit'      => ['type' => 'select', 'header' => '是否盈亏'],
                'order_state'    => 'select',
            ],
        ]);

        return $this->render('list', compact('html', 'profit', 'amount', 'hand', 'fee'));
    }

    /**
     * 模拟订单
     * @return string
     */
    public function actionListm()
    {
        $query      = (new Order)->listQueryM()->joinWith([
            'product.dataAll',
            'user.parent',
            'user.admin',
        ])->manager()->orderBy('order.id DESC');
        $countQuery = (new Order)->listQueryM()->joinWith(['product.dataAll', 'user.parent', 'user.admin'])->manager();

        // 今日盈亏统计，交易额、手数、手续费
        $amount = $countQuery->select('SUM(order.deposit) deposit')->one()->deposit ?: 0;
        $hand   = $countQuery->select('SUM(order.hand) hand')->one()->hand ?: 0;
        $fee    = $countQuery->select('SUM(order.fee) fee')->one()->fee ?: 0;
        $profit = $countQuery->andWhere(['order_state' => Order::ORDER_THROW])->select('SUM(order.profit) profit')->one()->profit;

        $html = $query->getTable([
            'user.id',
            'user.nickname',
            [
                'header' => '推荐人(ID)',
                'value'  => function ($row) {
                    return $row->user->getParentLink('user.id');
                },
            ],
            'admin.username' => ['header' => '代理商账户'],
            'product.name',
            'created_at',
            'updated_at'     => function ($row) {
                return $row['order_state'] == Order::ORDER_POSITION ? '' : $row['updated_at'];
            },
            'rise_fall'      => [
                'header' => '涨跌',
                'value'  => function ($row) {
                    return $row['rise_fall'] == Order::RISE ? Html::redSpan('买涨') : Html::greenSpan('买跌');
                },
            ],
            'price',
            'fee',
            'stop_profit_amount',
            'stop_loss_amount',
            'sell_price'     => function ($row) {
                if ($row['order_state'] == Order::ORDER_POSITION) {
                    return '';
                } else {
                    if ($row['price'] < $row['sell_price']) {
                        return Html::redSpan($row['sell_price']);
                    } else {
                        return Html::greenSpan($row['sell_price']);
                    }
                }
            },
            'hand',
            'deposit',
//            'profit'         => function ($row) {
//                return $row['profit'] >= 0 ? Html::redSpan($row['profit']) : Html::greenSpan($row['profit']);
//            },
            //'user.account',
            'user.amount'=>[
                'header' => '账号余额',
                'value'  => function ($row) {
                    return $row->user['moni_acount'] - $row->user['blocked_moni'];
                },
            ],
            'order_state',
        ], [
            'ajaxReturn'    => [
                'countProfit' => '盈亏统计：' . ($profit >= 0 ? Html::redSpan($profit) : Html::greenSpan($profit)) . '，',
                'countAmount' => $amount,
                'countHand'   => $hand,
                'countFee'    => $fee,
            ],
            'searchColumns' => [
                'user.id',
                'admin.username' => ['header' => '代理商账户'],
                'user.pid'       => ['header' => '推荐人ID'],
                'user.mobile'       => ['header' => '手机号'],
                'product_name'   => ['type' => 'select', 'header' => '选择产品'],
                'user.nickname',
                'time'           => 'timeRange',
                'is_profit'      => ['type' => 'select', 'header' => '是否盈亏'],
                'order_state'    => 'select',
            ],
        ]);

        return $this->render('list_', compact('html', 'profit', 'amount', 'hand', 'fee'));
    }
}

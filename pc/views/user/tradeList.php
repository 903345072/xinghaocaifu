<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>
  <div class="hover">
    <h3 class="mx">※ 交易记录</h3>
    <div class="jy_jl_con">
      <div class="fz">
        <div class="span1 spa">
          <h3>盈利（元）</h3>
          <p><?= u()->profit_account ?></p>
        </div>
        <div class="clearfix spa_list">
          <div class="fl spa">
            <h3>成交（手）</h3>
            <p><?= count($order) ?></p>
          </div>
          <div class="fl spa">
            <h3>盈利（手）</h3>
            <p><?= $profit_hand ?></p>
          </div>
          <div class="fl spa">
            <h3>胜率（元）</h3>
            <p><?= $win_rate ?>%</p>
          </div>
        </div>
      </div>
      <div class="bac">
        <div class="chicang_tab_box_list">
          <!--<div class="clearfix inp">
            <input type="text" value="2018-05-01">
            <input type="text" value="2018-05-01">
            <input type="submit" value="查询" id="chaxun">
          </div>-->
            <?php foreach ($order as $k => $v): ?>
              <ul class="shijia">
                <li>
                  <div class="fl"><?= $v->product->name ?> (<?= $v->product->identify ?>) 单号：<span>JY1000<?= $v->id ?>
                  </div>
                  <div class="fr">买入时间：：<?= $v->created_at ?></div>
                </li>
                <li>
                  <div class="fl">
                    <h3>
                        <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                          <font color="red">买涨<?= $v->hand ?>手</font>
                        <?php else: ?>
                          <font color="green">买跌<?= $v->hand ?>手</font>
                        <?php endif ?>
                    </h3>
                    <p>【止盈<?=getCurrencySymbol($v->currency);?>+<?=$v->stop_profit_price;?>
                      元/止损<?=getCurrencySymbol($v->currency);?>-<?=$v->stop_loss_price;?>元】</p>
                  </div>
                  <div class="fl kaicang">
                    <h3 class="<?= ($v->profit >= 0) ? 'red' : 'green' ?>"><?= $v->profit ?>元</h3>
                    <p>【买入<?= $v->price ?>/卖出<?= $v->sell_price ?>】</p>
                  </div>
                  <a href="javascript:;" class="fr success">结算
                    <br> 成功</a>
                </li>
                <a href="javascript:;" class="shichang">市价卖出</a>
              </ul>
            <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="/pc/js/layer.js"></script>
<script>
  $(".help_list li").click(function () {
    $(this).addClass('on').siblings().removeClass();
  })
</script>

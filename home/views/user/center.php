<div class="wrap1 clearfix houtai_content">



  <div class="hover" style="position: absolute;left: 300px;top: 0;">
    <div class="r_list">
      <div class="houtai_right_top clearfix">

        <div class="fl keyong admin_yue">
          <p class="name_n">账户余额（元）</p>
          <p class="total"><?= u()->account - u()->blocked_account ?></p>
        </div>
        <div class="fl a_link">
          <a data-href="<?= url(['user/recharge']) ?>" href="javascript:void(0);" class="chongz sad">充值</a>
          <a data-href="<?= url(['user/deposits']) ?>" href="javascript:void(0);" class="tx sad">提现</a>
        </div>
      </div>
      <!-- 通告 -->
      <div class="houtai_scroll">
        <div class="clearfix">
          <img src="/web/images/tips.png " class="fl" alt="">
          <a class="fl">最新公告：<?= $article->title ?></a>
        </div>
      </div>
      <div class="houtai_bottom">
        <ul class="clearfix caozuo_list">
          <li>
            <p class="dq">当前持仓</p>
            <p><?= count($order_position) ?></p>
          </li>
          <li>
            <p class="dq">最佳战绩</p>
            <p><?= $top_profit ?></p>
          </li>
          <li>
            <p class="dq">盈利（元）</p>
            <p><?= u()->profit_account ?></p>
          </li>
        </ul>
        <div class="chicang_tab">
          <div class="chicang_tab_box clearfix">
            <div class="on">
              <span>持仓</span>
              <i class="sl"><?= count($order_position) ?></i>
            </div>
            <div>
              结算
            </div>
          </div>
          <div class="chicang_tab_box_list" style="height: 320px;">
            <!--<div class="clearfix inp">
              <input type="text" value="2018-05-01">
              <input type="text" value="2018-05-01">
              <input type="submit" value="查询" id="chaxun">
            </div>-->
            <div class="chicang_box">
              <?php foreach ($order_position as $v): ?>
                <ul class="shijia">
                  <li>
                    <div class="fl"><?= $v->product->name ?>(<?= $v->product->identify ?>) JY1000<?= $v->id ?></div>
                    <div class="fr">买入时间：<?= $v->created_at ?></div>
                  </li>
                  <li>
                    <div class="fl">
                      <h3>买<?= ($v->rise_fall == \frontend\models\Order::RISE) ? '涨' : '跌' ?><?= $v->hand ?>手</h3>
                      <p>【止盈<?=getCurrencySymbol($v->currency);?>+<?= $v->stop_profit_price ?>元/止损<?=getCurrencySymbol($v->currency);?>-<?= $v->stop_loss_price ?>元】</p>
                    </div>
                    <div class="fl kaicang">
                      <h3 class="profit_<?= $v->id ?>"><?= $v->profit ?>元</h3>
                      <p class="sg">【开仓价<?= $v->price ?>/当前价<span id="price_<?= $v->id ?>"></span>】
                        <img id="sg_<?= $v->id ?>" src="/web/images/sheng.jpg" alt="" class="sg1">
                      </p>
                    </div>
                    <a href="javascript:;" class="fr pc sellOneBtn" flag="<?= $v->id ?>">平仓</a>
                  </li>
                </ul>
              <?php endforeach; ?>
            </div>

            <div class="chicang_box" style="display: none;">
              <?php foreach ($order_throw as $v): ?>
                <ul class="shijia">
                  <li>
                    <div class="fl"><?= $v->product->name ?>(<?= $v->product->identify ?>) JY1000<?= $v->id ?></div>
                    <div class="fr">买入时间：<?= $v->created_at ?></div>
                  </li>
                  <li>
                    <div class="fl">
                      <h3>买<?= ($v->rise_fall == \frontend\models\Order::RISE) ? '涨' : '跌' ?><?= $v->hand ?>手</h3>
                      <p>【止盈<?=getCurrencySymbol($v->currency);?>+<?= $v->stop_profit_price ?>元/止损<?=getCurrencySymbol($v->currency);?>-<?= $v->stop_loss_price ?>元】</p>
                    </div>
                    <div class="fl kaicang">
                      <h3 class="<?= ($v->profit >= 0) ? 'red' : 'green' ?>"><?= $v->profit ?>元</h3>
                      <p class="sg">【开仓价<?= $v->price ?>/卖出价<?= $v->sell_price ?>】
                        <!--                        <img src="/web/images/sg.png" alt="" class="sg1">-->
                      </p>
                    </div>
                    <a href="javascript:;" class="fr success">结算
                      <br/> 成功</a>
                  </li>
                  <a href="javascript:;" class="shichang">市价卖出</a>
                </ul>
              <?php endforeach; ?>
            </div>

          </div>
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
<script type="text/javascript">
  $(function () {

    $('.sellOneBtn').on('click', function () {
      var flag = $(this).attr('flag');
      layer.alert('hello');
      layer.confirm('确认要平仓吗？', {
        btn: ['确定', '取消']//按钮
      }, function (index) {
        $.post("/order/ajax-sell-order", {id: flag, model_type: 1}, function (msg) {
          if (msg.state) {
            layer.alert('已平仓');
            layer.close(index);
            window.location.reload();
          } else {
            layer.alert(msg.info);
          }
        }, 'json');
      });
    });
  });

  function updateOrder() {
    $.post("<?= url('order/ajaxUpdateOrder')?>", {}, function (msg) {
      if (msg.state) {
        var obj = msg.info;

        for (var key in obj) {
          $("#price_" + key).html(obj[key]['price']);
          if (obj[key]['profit'] >= 0) {
            $(".profit_" + key).html("<span class=\"red\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
            $("#sg_" + key).attr('src', '/web/images/sheng.jpg');
          } else {
            $(".profit_" + key).html("<span class=\"green\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元 </span>");
            $("#sg_" + key).attr('src', '/web/images/jiang.jpg');
          }
          $(".sellPrice_" + key).html("<span> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元 </span>");
        }
        var oobj = msg.data;
        console.log(oobj);
        for (var key_ in oobj) {
          console.log("#position_" + key_);
          $("#position_" + key_).css("display", "none");
        }

      }
    }, 'json');
  }

  setInterval(updateOrder, 1000);

</script>

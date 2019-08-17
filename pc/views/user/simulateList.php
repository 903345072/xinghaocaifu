<div class="wrap1 clearfix houtai_content">
    <?= $this->render('../layouts/menu', compact('current_position')) ?>

  <div class="hover">
    <h3 class="mx">※ 模拟交易列表</h3>
    <div class="r_list">
      <div class="houtai_bottom">
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
          <div class="chicang_tab_box_list">
            <div class="chicang_box" style="height: 750px">
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

            <div class="chicang_box" style="height: 750px; display: none;">
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
        $.post("/order/ajax-sell-order", {id: flag, model_type: 2}, function (msg) {
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
          $("#price_" + key).html("当前价" + obj[key]['price']);
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

<div class="header">
  <p>持仓结算</p>
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
</div>
<div class="nav_fade">
  <div class="fl mui-control-item posit on">持仓</div>
  <div class="fr mui-control-item accouts">结算</div>
</div>
<!--		<div class="data">
			<ul>
				<li>2018-05-01</li>
				<li>2018-05-16</li>
			</ul>
			<a href="#">查询</a>
		</div>-->
<div class="fades" id="tab-item-1">
    <?php foreach ($order_position as $k => $v): ?>
      <div class="fades_lis" id="position_<?= $v->id ?>">
        <div class="fade_lit_top">
            <?= $v->product->name ?> (<?= $v->product->identify ?>)
        </div>
        <div class="fade_bot">
          <div class="fade_lefts">
              <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                <p class="red">买涨<?= $v->hand ?>手<span class="profit_<?= $v->id ?>"></span></p>
              <?php else: ?>
                <p class="green">买跌<?= $v->hand ?>手<span class="profit_<?= $v->id ?>"></span></p>
              <?php endif ?>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="zy" style="width: 1.11rem;">止盈</td>
                <td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>+<?=$v->stop_profit_price;?>元</td>
                <td class="zy" style="width: 1.04rem;">买入价</td>
                <td style="width: 1.22rem;border-right: none;"><?= $v->price ?></td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;">止损</td>
                <td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>-<?=$v->stop_loss_price;?>元</td>
                <td class="zy" style="width: 1.04rem;">当前价</td>
                <td style="width: 1.22rem;border-right: none;" id="price_<?= $v->id ?>">计算中...</td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;">单号</td>
                <td>JY1000<?= $v->id ?></td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;border-bottom: none;">成交时间</td>
                <td style="border-bottom: none;"><?= $v->updated_at ?></td>
              </tr>
            </table>
          </div>
          <a href="Javascript:sellOrder(<?= $v->id ?>);">
            <div class="rig_btn">平仓</div>
          </a>
        </div>
      </div>
    <?php endforeach ?>
</div>
<div class="fades" style="display: none;" id="tab-item-2">
    <?php foreach ($order_throw as $k => $v): ?>
      <div class="fades_lis">
        <div class="fade_lit_top">
            <?= $v->product->name ?> (<?= $v->product->identify ?>)
        </div>
        <div class="fade_bot">
          <div class="fade_lefts">
              <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                <p class="red">买涨<?= $v->hand ?>手<span><?= $v->profit ?>元</span></p>
              <?php else: ?>
                <p class="green">买跌<?= $v->hand ?>手<span><?= $v->profit ?>元</span></p>
              <?php endif ?>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="zy" style="width: 1.11rem;">止盈</td>
                <td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>+<?=$v->stop_profit_price;?>元</td>
                <td class="zy" style="width: 1.04rem;">买入价</td>
                <td style="width: 1.22rem;border-right: none;"><?= $v->price ?></td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;">止损</td>
                <td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>-<?=$v->stop_loss_price;?>元</td>
                <td class="zy" style="width: 1.04rem;">卖出价</td>
                <td style="width: 1.22rem;border-right: none;"><?= $v->sell_price ?></td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;">单号</td>
                <td>JY1000<?= $v->id ?></td>
              </tr>
              <tr>
                <td class="zy" style="width: 1.11rem;border-bottom: none;">成交时间</td>
                <td style="border-bottom: none;"><?= $v->updated_at ?></td>
              </tr>
            </table>
          </div>
          <a href="#">
            <div class="rig_btn">结算<br/>成功</div>
          </a>
        </div>
      </div>
    <?php endforeach ?>
</div>
<input id="types" type="hidden" value="<?= $type ?>">
<div class="null"></div>
<?= $this->render('../layouts/_footer') ?>
<script>
  $(function () {
    //持仓数据跳动
    function updateOrder() {
        <?php
        $o_id = '';
        foreach ($order_position as $v) {
            $o_id .= $v->id . ',';
        }
        $order_id = trim($o_id, ',');
        ?>
      $.post("<?= url('order/ajaxUpdateOrder')?>", {o_id: "<?=$order_id?>"}, function (msg) {
        if (msg.state) {
          var obj = msg.info;

          for (var key in obj) {
            $("#price_" + key).html(obj[key]['price']);
            if (obj[key]['profit'] >= 0) {
              $(".profit_" + key).html("<span class=\"red\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
            } else {
              $(".profit_" + key).html("<span class=\"green\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
            }
          }
          var oobj = msg.data;
          console.log(oobj+'我是平仓订单');
          for (var key_ in oobj) {
            console.log("#position_" + key_);
            $("#position_" + key_).css("display", "none");
          }

        }
      }, 'json');
    }

    setInterval(updateOrder, 1000);

    var types = $('#types').val();
    if (types == 1) {
      $('.posit').addClass("on");
      $("#tab-item-1").show("on");
      $('.accouts').removeClass("on");
      $("#tab-item-2").hide("on");
    } else {
      $('.accouts').addClass("on");
      $("#tab-item-2").show("on");
      $('.posit').removeClass("on");
      $("#tab-item-1").hide("on");
    }

  });

  $(".nav_fade").on("click", ".mui-control-item", function () {
    $(this).addClass("on").siblings().removeClass("on");
    $(".fades").hide();
    $(".fades").eq($(this).index()).show();
  });

  function sellOrder(order_id) {
    var r = confirm("确认平仓！");
    if (r == true) {
      $.post("<?= self::createUrl('order/ajaxSellOrder')?>", {id: order_id}, function (msg) {
        if (msg.state == 1) {
          layer.alert(msg.info);
          window.location.reload();
        } else {
          layer.alert(msg.info);
        }
      }, 'json');
    }
  }
</script>

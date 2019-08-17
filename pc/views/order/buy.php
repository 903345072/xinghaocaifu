<style type="text/css">
  .pageOne {
    display: none;
  }

  .no-order-data-msg {
    height: 500px;
    width: 260px;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
  }

  .pankou-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #f6f6f6;
    color: #5f5f5f;
    line-height: 32px;
  }

  .pankou-table td {
    border: 1px solid #f6f6f6;
    padding-left: 12px;
  }

  .am-align-right {
    float: right;
    margin-right: 15px;
  }

  .pankou-table th {
    font-weight: bold;
    background: #f6f6f6;
  }

  .itemOne {
    float: left;
    height: 20px;
    margin-right: 20px;
  }

  .am-badge {
    display: inline-block;
    padding: 0 5px;
    font-size: 12px;
    color: #ffffff;
    text-align: center;
    border-radius: 3px;
    background: #dd3434;
  }

  .order_list {
    height: 500px;
    margin-bottom: 40px;
    overflow-y: scroll;
  }
</style>


<?php if ($model_type == 1): ?>
  <div class="moni_banner shipan_banner">
    <h3>实盘交易</h3>
    <p>全球期货 一站式交易</p>
  </div>
<?php else: ?>
  <div class="moni_banner shipan_banner">
    <h3>模拟交易</h3>
    <p>熟悉操作流程 做到心中有数</p>
  </div>
<?php endif; ?>
<div class="mianbao_nav wrap1 about_nav">
  <a href="#">当前位置：</a>
  <a href="#">首页</a>
  <a href="#">></a>
  <a href="#"><?= '交易' ?></a>
  <a href="#">></a>
</div>

<div class="moni_content wrap1 clearfix jy_wrap">
  <div class="fl jiaoyi_left">
    <div class="jiaoyi_head clearfix">
      <span class="jiaoyi_head_name fl"><?= $products->name ?></span>
      <div class="fl jy_date_select switchTab">
        <a href="javascript:getDataFn();" class="cursP am-u-sm-1 on">分时</a>
        <a href="javascript:getDataFn();" class="cursP am-u-sm-1">日分时</a>
        <a href="javascript:getDataFn();" class="cursP am-u-sm-1">1分钟</a>
        <a href="javascript:getDataFn();" class="cursP am-u-sm-1">5分钟</a>
        <a href="javascript:getDataMin30();" class="cursP am-u-sm-1">30分钟</a>
        <a href="javascript:getDataFn();" class="cursP am-u-sm-1" style="display: none;">日K线</a>
        <a href="javascript:;" class="cursP am-u-sm-1">盘口</a>
      </div>
    </div>

    <div class="zhexiantu" id="switchPages">
      <div class="pageOne">
        <div id="page1" style="height: 348px;"></div>
      </div>

      <div class="pageOne">
        <div id="page2" style="height: 348px;"></div>
      </div>

      <div class="pageOne">
        <div id="page3" style="height: 348px;"></div>
      </div>

      <div class="pageOne">
        <div id="page4" style="height: 348px;"></div>
      </div>

      <div class="pageOne">
        <div id="page5" style="height: 348px;"></div>
      </div>

      <div class="pageOne">
        <div id="page6" style="height: 348px;"></div>
      </div>

      <div class="pageOne" style="height: 348px;">
        <table class="pankou-table">
          <tbody>
          <tr>
            <td>
              <p class="am-padding-sm">
                <span>涨跌</span>
                <span class="am-align-right red" id="textZD"></span>
              </p>
            </td>
            <td>
              <p class="am-padding-sm">
                <span>涨幅</span>
                <span class="am-align-right red" id="textZF"></span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="am-padding-sm bt-1">
                <span>最高</span>
                <span class="am-align-right red" id="textHigh"></span>
              </p>
            </td>
            <td>
              <p class="am-padding-sm bt-1">
                <span>最低</span>
                <span class="am-align-right" id="textLow" style="color: #8bd83b"></span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="am-padding-sm bt-1">
                <span>开盘</span>
                <span class="am-align-right red" id="textOpen"></span>
              </p>
            </td>
            <td>
              <p class="am-padding-sm bt-1">
                <span>昨收</span>
                <span class="am-align-right" id="textYR"></span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="am-padding-sm bt-1">
                <span>持仓</span>
                <span class="am-align-right red"
                      id="textHold"></span>
              </p>
            </td>
            <td>
              <p class="am-padding-sm bt-1">
                <span>昨结</span>
                <span class="am-align-right" id="textYE"></span>
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p class="am-padding-sm bt-1 bb-1">
                <span>总手</span>
                <span class="am-align-right red" id="textHand"></span>
              </p>
            </td>
            <td>
              <p class="am-padding-sm bt-1 bb-1">
                <span>金额</span>
                <span class="am-align-right" id="textMoney"></span>
              </p>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="jiaoyi_center">
      <div class="jiaoyi_box" id="CateMenu">
        <div class="jy_box_top clearfix">
          <span id="abroad" class="on">国际期货</span>

        </div>

        <div class="jy_box_tab_list abroad">
            <?php foreach ($abroad as $k): ?>
              <p class="itemOne" data-symbol="<?= $k->dataAll->symbol ?>">
                <a class="jumpText <?= ($products->identify == $k->identify) ? 'on' : '' ?>" href="<?= url([
                    'buy',
                    'id'         => $k->id,
                    'model_type' => $model_type,
                ]) ?>"><?= $k->name ?></a>
                <span class="am-badge"></span>
              </p>
            <?php endforeach ?>
          <div style="clear: both"></div>
        </div>
      </div>
    </div>
    <div class="extra clearfix">
      <div class="fl">
        <span>账户余额：</span>
          <?php if (user()->isGuest): ?>
            <a href="<?= url(['user/login']) ?>" class="recharge">未登录</a>
          <?php else: ?>
            <span
              class="red"><?= ($model_type == 1) ? u()->account - u()->blocked_account : u()->moni_acount - u()->blocked_moni ?></span>
            <span>元</span>
          <?php endif; ?>
        <a href="<?= url(['user/recharge']) ?>" class="recharge">充值</a>
      </div>

    </div>
    <div class="select clearfix">
      <div class="fl select_le">
        <ul class="select_list">
          <li>
            <label for="">购买手数：</label>
            <select name="" id="a1" class="am-block wid100 am-alert-secondary">
                <?php foreach ($productInfo->priceExtend as $k => $v): ?>
                  <option class="changehand" value="<?= $v->hand ?>"
                          nums="<?= $v->hand ?>"
                          data-deposit="<?= $v->deposit ?>"
                          data-fee="<?= $v->fee ?>"
                          data-stop_profit_price="<?= $v->stop_profit_price ?>"
                          data-stop_loss_price="<?= $v->stop_loss_price ?>"
                          data-point_unit="<?= $v->point_unit ?>"
                  >
                      <?= $v->hand ?>手
                  </option>
                <?php endforeach ?>
            </select>
          </li>
          <li>
            <label for="">止损金额：</label>
            <select name="" id="a2" class="am-block wid100 am-alert-secondary">
            </select>
          </li>
          <li>
            <label for="">止盈金额：</label>
            <select name="" id="a3" class="am-block wid100 am-alert-secondary">
            </select>
          </li>
        </ul>
      </div>
      <div class="fl select_center">
        <p class="shuzhi">
          <span class="red zhang" id="price3">00.00</span>
          <span class="red percenge" id="price4">00.00</span>
          <span class="red" id="price5">00.00%</span>
        </p>
        <ul class="maimai">
          <li>
            <label class="fl">买量：</label>
            <div class="fl jindu_line">
              <div class="inner_line buy_inner_line" id="buyBar"></div>
            </div>
            <span class="fl" id="buyBarText">40</span>
          </li>
          <li>
            <label class="fl">卖量：</label>
            <div class="fl jindu_line">
              <div class="inner_line mai_inner_line" id="sellBar"></div>
            </div>
            <span class="fl" id="sellBarText">25</span>
          </li>
        </ul>
      </div>
      <div class="fr select_r">
        <a href="javascript:buy(1);" class="maizhang">
          <span id="price1">00.00</span>
          <span>开多</span>
        </a>
        <a href="javascript:buy(2);" class="maidie">
          <span id="price2">00.00</span>
          <span>开空</span>
        </a>
        <a href="javascript:;" id="sellAllBtn" class="pingang">全部平仓</a>
      </div>
    </div>
  </div>
  <div class="fl jiaoyi_right">
    <h3 class="r-til"><?= $products->name ?></h3>
    <div class="jiaoyi_r_con">
      <div class="clearfix abtn">
        <a href="javascript:;" class="on">持仓</a>
        <a href="javascript:;" class="">结算</a>
      </div>
      <div class="order_list">
          <?php if (! empty($order_position)): ?>
              <?php foreach ($order_position as $v): ?>
              <table class="tab1">
                <thead>
                <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                  <th class="red">买涨<?= $v->hand ?>手</th>
                  <th class="profit_<?= $v->id ?> red">00.00元</th>
                <?php else: ?>
                  <th class="green">买跌<?= $v->hand ?>手</th>
                  <th class="profit_<?= $v->id ?> green">00.00元</th>
                <?php endif ?>
                </thead>
                <tr>
                  <td>买入：</td>
                  <td><?= $v->price ?></td>
                </tr>
                <tr>
                  <td>当前：</td>
                  <td class="nowprice">00.00</td>
                </tr>
                <tr>
                  <td>止盈：</td>
                  <td>
                    +<?php echo getCurrencySymbol($v->currency) . round(($v->one_profit * $v->stop_profit_point) / getExchangeRate($v->currency)); ?>元
                  </td>
                </tr>
                <tr>
                  <td>止损：</td>
                  <td>
                    -<?php echo getCurrencySymbol($v->currency) . round(($v->one_profit * $v->stop_loss_point) / getExchangeRate($v->currency)); ?>元
                  </td>
                </tr>
                <tr>
                  <td>单号：</td>
                  <td>JY1000<?= $v->id ?></td>
                </tr>
                <tr>
                  <td>成交时间：</td>
                  <td><?= $v->created_at ?></td>
                </tr>
              </table>
              <a href="javascript:;" flag="<?= $v->id ?>" class="kuaisumc sellOneBtn">快速卖出</a>
              <?php endforeach ?>
          <?php else: ?>
            <div class="no-order-data-msg">
              <span>暂无消息</span>
            </div>
          <?php endif; ?>
      </div>
      <div class="order_list" style="display: none;">
          <?php if (! empty($order_throw)): ?>
              <?php foreach ($order_throw as $v): ?>
              <table class="tab1">
                <thead>
                <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                  <th class="red">买涨<?= $v->hand ?>手</th>
                <?php else: ?>
                  <th class="green">买跌<?= $v->hand ?>手</th>
                <?php endif ?>
                <th class="<?= $v->profit > 0 ? 'red' : 'green' ?>"><?= $v->profit ?>元</th>
                </thead>
                <tr>
                  <td>买入：</td>
                  <td><?= $v->price ?>元</td>
                </tr>
                <tr>
                  <td>卖出：</td>
                  <td><?= $v->sell_price ?>元</td>
                </tr>
                <tr>
                  <td>止盈：</td>
                  <td>
                    +<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                              ($v->one_profit * $v->stop_profit_point) / getExchangeRate($v->currency)); ?>
                    元
                  </td>
                </tr>
                <tr>
                  <td>止损：</td>
                  <td>
                    -<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                              ($v->one_profit * $v->stop_loss_point) / getExchangeRate($v->currency)); ?>
                    元
                  </td>
                </tr>
                <tr>
                  <td>单号：</td>
                  <td>JY1000<?= $v->id ?></td>
                </tr>
                <tr>
                  <td>结算时间：</td>
                  <td><?= $v->updated_at ?></td>
                </tr>
              </table>
              <a href="javascript:;" flag="<?= $v->id ?>" class="kuaisumc" style="background: gray">结算成功</a>
              <?php endforeach ?>
          <?php else: ?>
            <div class="no-order-data-msg">
              <span>暂无消息</span>
            </div>
          <?php endif; ?>
      </div>
      <table>
        <thead>
        <th colspan="2" class="red">本时段持仓时间至 <?= $products->tradeTime ?></th>
        </thead>
        <tr>
          <td class="red" style="width: 70px;">汇率：</td>
          <td>
              <?php if ($products->currency == 1) { ?>
                <p>暂无</p>
                <input type="hidden" id="currency" value="1">
              <?php } else {
                  if ($products->currency == 2) { ?>
                    <p>1美元 = <?= config('USD') ?>人民币</p>
                    <input type="hidden" id="currency" value="<?= config('USD') ?>">
                  <?php } else {
                      if ($products->currency == 3) { ?>
                        <p>1港币 = <?= config('HKD') ?>人民币</p>
                        <input type="hidden" id="currency" value="<?= config('HKD') ?>">
                      <?php } else {
                          if ($products->currency == 4) { ?>
                            <p>1欧元 = <?= config('EURO') ?>人民币</p>
                            <input type="hidden" id="currency" value="<?= config('EURO') ?>">
                          <?php }
                      }
                  }
              } ?>
          </td>
        </tr>
        <tr>
          <td class="red">手续费：</td>
          <td>
            <span style="float: left">￥</span>
            <p id="charge">0</p>
            <p id="charge1" style="display:none;">0</p>
          </td>
        </tr>
        <tr>
          <td class="red">保证金：</td>
          <td>
            <span style="float: left">￥</span>
            <p id="frozen">0</p>
            <p id="frozen1" style="display:none;">0</p>
          </td>
        </tr>
        <tr>
          <td class="red">合计：</td>
          <td id="total">0</td>
        </tr>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript" src="/js/echarts-all-3-order.js"></script>
<script type="text/javascript" src="/pc/js/layer.js"></script>
<script type="text/javascript">
    flagss = 1;
  $(function () {
    $(".abtn a").click(function () {
      var index = $(this).index();
      $(".abtn a").removeClass('on');
      $(this).addClass('on');

      $(".order_list").hide();
      $(".order_list").eq(index).show();
    });

    $('#domestic').click(function () {
      $('.domestic').show();
      $('.abroad').hide();
      $('#domestic').addClass('am-btn-warning');
      $('#domestic').removeClass('am-btn-default');
      $('#abroad').addClass('am-btn-default');
      $('#abroad').removeClass('am-btn-warning');
    });
    $('#abroad').click(function () {
      $('.domestic').hide();
      $('.abroad').show();
      $('#domestic').removeClass('am-btn-warning');
      $('#domestic').addClass('am-btn-default');
      $('#abroad').removeClass('am-btn-default');
      $('#abroad').addClass('am-btn-warning');
    });
    $('#deal').click(function () {
      $('#deal').addClass('red');
      $('#asettlement').removeClass('red');
      $('.deal').show();
      $('.asettlement').hide();
    });
    $('#asettlement').click(function () {
      $('#deal').removeClass('red');
      $('#asettlement').addClass('red');
      $('.asettlement').show();
      $('.deal').hide();
    });

    if ('<?=$products->type ?>' == 1) {
      $('#domestic').click();
    } else {
      $('#abroad').click();
    }
  })

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
                    $("#price_" + key).html("当前价" + obj[key]['price']);
                    if (obj[key]['profit'] >= 0) {
                        $(".profit_" + key).html("<span class=\"uk-text-danger\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元</span>");
                    } else {
                        $(".profit_" + key).html("<span class=\"uk-text-green\"> " + obj[key]['profit'] + "( " + obj[key]['currency_symbol'] + obj[key]['currency_profit'] + ")元 </span>");
                    }
                }
                var oobj = msg.data;
                //console.log(oobj);
                for (var key_ in oobj) {
                    //console.log("#position_"+key_);
                    $(".position_" + key_).css("display", "none");
                    console.log($(".position_" + key_))
                }
            }
        }, 'json');
    }


  var tempNums = {};
  $(function () {
    var frozen = $("#a1  option:selected").data('deposit') * $("#a1  option:selected").val();
    var charge = $("#a1  option:selected").data('fee');
    var newnums = parseInt($("#a1  option:selected").attr('nums'));
    var deposit = parseInt($("#a1  option:selected").data('deposit'));
    var fee = parseInt($("#a1  option:selected").data('fee'));
    var currency = $('#currency').val();
    tempNums.curWay = currency;
    var cur = '￥';
    switch (parseInt("<?=$productInfo->currency?>")) {
      case 2:
        cur = '$';
        break;
      case 3:
        cur = 'HK';
        break;
      case 4:
        cur = '€';
        break;
      default:
        break;
    }
    if (currency == 1) {
      $('#frozen').html(frozen);
      $('#frozen1').html(frozen);
      $('#charge').html(charge);
      $('#charge1').html(charge);
      $('#total').html(Number(frozen) + Number(charge));

      var profit = $("#a1  option:selected").data('stop_profit_price');
      var profit = profit.split(',');
      for (var i = 0; i < profit.length; i++) {
        var money = profit[i] + '(人民币:' + profit[i] + ')';
        $('#a3').append('<option flag="' + i + '" value="' + money + '">￥' + profit[i] + '</option>');
      }

      var loss = $("#a1  option:selected").data('stop_loss_price');
      var loss = loss.split(',');
      for (var i = 0; i < loss.length; i++) {
        var money = loss[i] + '(人民币:' + loss[i] + ')';
        var zshtml = -loss[i];
        if (i == 0) {
          var zshtml1 = -loss[i];
        }
        $('#a2').append('<option flag="' + i + '" value="' + money + '" zshtml="' + zshtml + '">￥-' + loss[i] + '</option>');
      }
    } else {
      var frozen2 = (Number(currency) * Number(frozen)).toFixed(0);
      var charge2 = (Number(currency) * Number(charge)).toFixed(0);
//                $('#frozen').html(frozen2+'($'+frozen+')');
      $('#frozen').html();
      $('#frozen1').html(frozen2);
      $('#charge').html(charge2 + '(' + cur + charge + ')');
      $('#charge1').html(charge2);
      $('#total').html((Number(frozen2) + Number(charge2)).toFixed(0));

      var profit = $("#a1  option:selected").data('stop_profit_price');
      var profit = profit.split(',');
      for (var i = 0; i < profit.length; i++) {
        var money = profit[i] + '(人民币:' + (Number(currency) * Number(profit[i])).toFixed(0) + ')';
        var money2 = (Number(currency) * Number(profit[i])).toFixed(0) + '(' + cur + profit[i] + ')';
        $('#a3').append('<option flag="' + i + '" value="' + money + '">￥' + money2 + '</option>');
      }

      var loss = $("#a1  option:selected").data('stop_loss_price');
      var loss = loss.split(',');
      for (var i = 0; i < loss.length; i++) {
        var money = loss[i] + '(人民币:' + (Number(currency) * Number(loss[i])).toFixed(0) + ')';
        var zshtml = -loss[i];
        if (i == 0) {
          var zshtml1 = -loss[i];
        }
        var money2 = (Number(currency) * Number(loss[i])).toFixed(0) + '(' + cur + loss[i] + ')';
        $('#a2').append('<option flag="' + i + '" value="' + money + '" zshtml="' + zshtml + '">￥-' + money2 + '</option>');
      }
    }
    tempNums.hand = newnums;
    tempNums.deposit = deposit;
    tempNums.fee = fee;
    tempNums.zsprice = zshtml1;

    reCountFn();

    $('#a1').change(function () {
      $('#a2').html('');
      $('#a3').html('');
      $('#frozen').html('0');
      $('#charge').html('0');
      $('#total').html('0');

      if ($(this).val()) {
        var frozen = $(this).find("option:selected").data('deposit') * $(this).val();
        var charge = $(this).find("option:selected").data('fee');
        var newnums = parseInt($(this).find("option:selected").attr('nums'));
        var deposit = parseInt($(this).find("option:selected").data('deposit'));
        var fee = parseInt($(this).find("option:selected").data('fee'));
        var currency = $('#currency').val();
        if (currency == 1) {
          $('#frozen').html(frozen);
          $('#frozen1').html(frozen);
          $('#charge').html(charge);
          $('#charge1').html(charge);
          $('#total').html(Number(frozen) + Number(charge));

          var profit = $("#a1  option:selected").data('stop_profit_price');
          var profit = profit.split(',');
          for (var i = 0; i < profit.length; i++) {
            var money = profit[i] + '(人民币:' + profit[i] + ')';
            $('#a3').append('<option flag="' + i + '" value="' + money + '">￥' + profit[i] + '</option>');
          }

          var loss = $("#a1  option:selected").data('stop_loss_price');
          var loss = loss.split(',');
          for (var i = 0; i < loss.length; i++) {
            var money = loss[i] + '(人民币:' + loss[i] + ')';
            var zshtml = -loss[i];
            if (i == 0) {
              var zshtml1 = -loss[i];
            }
            $('#a2').append('<option flag="' + i + '" value="' + money + '" zshtml="' + zshtml + '">￥-' + loss[i] + '</option>');
          }
        } else {
          var frozen2 = (Number(currency) * Number(frozen)).toFixed(0);
          var charge2 = (Number(currency) * Number(charge)).toFixed(0);
//                        $('#frozen').html(frozen2+'($'+frozen+')');
          $('#frozen').html();
          $('#frozen1').html(frozen2);
          $('#charge').html(charge2 + '(' + cur + charge + ')');
          $('#charge1').html(charge2);
          $('#total').html((Number(frozen2) + Number(charge2)).toFixed(0));

          var profit = $("#a1  option:selected").data('stop_profit_price');
          var profit = profit.split(',');
          for (var i = 0; i < profit.length; i++) {
            var money = profit[i] + '(人民币:' + (Number(currency) * Number(profit[i])).toFixed(0) + ')';
            var money2 = (Number(currency) * Number(profit[i])).toFixed(0) + '(' + cur + profit[i] + ')';
            $('#a3').append('<option flag="' + i + '" value="' + money + '">￥' + money2 + '</option>');
          }

          var loss = $("#a1  option:selected").data('stop_loss_price');
          var loss = loss.split(',');
          for (var i = 0; i < loss.length; i++) {
            var money = loss[i] + '(人民币:' + (Number(currency) * Number(loss[i])).toFixed(0) + ')';
            var zshtml = -loss[i];
            if (i == 0) {
              var zshtml1 = -loss[i];
            }
            var money2 = (Number(currency) * Number(loss[i])).toFixed(0) + '(' + cur + loss[i] + ')';
            $('#a2').append('<option flag="' + i + '" value="' + money + '" zshtml="' + zshtml + '">￥-' + money2 + '</option>');
          }
        }
        tempNums.hand = newnums;
        tempNums.deposit = deposit;
        tempNums.fee = fee;
        tempNums.zsprice = zshtml1;
        reCountFn();
      }
    });

    $('#a2').change(function () {
      var num = $("#a2").find("option:selected").attr('flag');
      $('#a3').find('option').eq(num).prop('selected', true);
      var zshtml = $("#a2  option:selected").attr('zshtml');
      tempNums.zsprice = Number(zshtml);
      reCountFn();
    })

    $('#a3').change(function () {
      var num = $("#a3").find("option:selected").attr('flag');
      $('#a2').find('option').eq(num).prop('selected', true);
      var zshtml = $("#a2  option:selected").attr('zshtml');
      tempNums.zsprice = Number(zshtml);
      reCountFn();
    })

  })

  function reCountFn() {
    if (tempNums.deposit) {//console.log(tempNums);
      var zs = parseFloat(tempNums.zsprice);
      var hand = parseInt(tempNums.hand);
      var deposit = parseFloat(tempNums.deposit);
      var result = deposit * hand + Math.abs(zs);
      var hl_after = result * parseFloat($('#currency').val());
      var str = hl_after.toFixed(2) + '($' + result.toFixed(2) + ')';
//            var str2 = result.toFixed(2) + "(人民币：" + hl_after.toFixed(2) + ")";
      var str2 = result.toFixed(2);
      str2 = (tempNums.curWay != 1) ? (result.toFixed(2) * $('#currency').val()).toFixed(2) : str2;
      $('#baozhengjin').html(str);
      var cur = '￥';
      switch (parseInt("<?=$productInfo->currency?>")) {
        case 2:
          cur = '$';
          break;
        case 3:
          cur = 'HK$';
          break;
        case 4:
          cur = '€';
          break;
        default:
          break;
      }
      if (cur == '￥') {
        $('#frozen').html(hl_after.toFixed(2));
      } else {
        $('#frozen').html(hl_after.toFixed(2) + '(' + cur + result + ')');
      }
      $('#alertBZJ').html(str2);
      $('#zsZF').html(deposit + '(人民币：' + ($('#currency').val() * deposit).toFixed(2) + ')');
      $('#maxZS').html((str2 / $('#currency').val()).toFixed(2) + '(人民币：' + str2 + ')');
      var total = parseFloat($('#charge1').html()) + hl_after;
      $('#alertTotal').html(total.toFixed(2));
      $('#total').html(total.toFixed(2) + '元');
      $('#totalprice').html(total.toFixed(2));
    }
  }


  var dataO = '';
  var data60 = '';
  var curTab = 1;
  var symbol = '<?=$products->dataAll->symbol ?>';
  var account = '1q2w3e4r5t6y7u8i';
  var goin3 = true;

  var typeArr = [
    {name: '美原油07', symbol: 'NECLN0'},
    {name: '美白银07', symbol: 'CMSIN0'},
    {name: '美精铜07', symbol: 'CMHGN0'},
    {name: 'DAX06', symbol: 'CEDAXM0'},
    {name: '恒指1806', symbol: 'HIHSI06'},
    {name: '小恒1806', symbol: 'HIMHI06'},
    {name: 'A50指数06', symbol: 'WGCNM0'},
    {name: '小纳指06', symbol: 'CENQM0'},
    {name: '英镑03', symbol: 'WICMBPH0'},
    {name: '欧元06', symbol: 'WICMECM0'},
    {name: '澳元06', symbol: 'WICMADM0'},
    {name: '加元06', symbol: 'WICMCDM0'},

    {name: '沪金1812', symbol: 'SCau1812'},
    {name: '沪银1812', symbol: 'SCag1812'},
    {name: '沪铜1807', symbol: 'SCcu1807'},
    {name: '沪镍1809', symbol: 'SCni1809'},
    {name: '沥青1812', symbol: 'SCbu1812'},
    {name: '橡胶1809', symbol: 'SCru1809'},
    {name: '螺纹1810', symbol: 'SCrb1810'},
    {name: '棕榈油1809', symbol: 'DCp1809'},
    {name: '白糖1809', symbol: 'ZCSR1809'},
    {name: '豆粕1809', symbol: 'DCm1809'},
    {name: '豆油1809', symbol: 'DCy1809'},
    {name: '聚丙烯1809', symbol: 'DCpp1809'},
  ]

  !function () {
    var tabs = $('.switchTab .am-u-sm-1');
    var pageOne = $('#switchPages .pageOne');
    pageOne.eq(0).show();
    tabs.on('click', function () {
      var index = $(this).index();
      curTab = $(this).index() + 1;
      tabs.removeClass('on');
      $(this).addClass('on');
      pageOne.hide();
      pageOne.eq($(this).index()).show();
    });
  }()


  !function () {
    $('#sellAllBtn').on('click', function () {

      layer.confirm('确认要一键平仓吗？', {
        btn: ['确定', '取消']//按钮
      }, function (index) {
        $.post("/order/ajax-sell-order", {
          product_id: <?=$products->id?>,
          type: 2,
          model_type: <?=$model_type?>}, function (msg) {
          if (msg.state) {
            layer.alert('已平仓');
            layer.close(index);
            window.location.reload();
          } else {
            if (msg.info == '1') {
              var ht = '<p class="am-margin-0 am-padding-bottom-sm">请先登录</p>';
              layer.confirm(ht, {
                title: '信息',
                btn: ['确定'] //按钮
              }, function () {
                //确定
                window.location.href = "<?=url(['site/login'])?>";
              });
            } else {
              layer.alert(msg.info);
            }
          }
        }, 'json');
      });

    });

    $('.sellOneBtn').on('click', function () {
      var flag = $(this).attr('flag');
      layer.alert('hello');
      layer.confirm('确认要平仓吗？', {
        btn: ['确定', '取消'],//按钮
      }, function (index) {
        $.post("/order/ajax-sell-order", {id: flag, model_type: <?=$model_type?>}, function (msg) {
          if (msg.state) {
            layer.alert('已平仓');
            layer.close(index);
            window.location.reload();
          } else {
            if (msg.info == '1') {
              var ht = '<p class="am-margin-0 am-padding-bottom-sm">请先登录</p>';
              layer.confirm(ht, {
                title: '信息',
                btn: ['确定'] //按钮
              }, function () {
                //确定
                window.location.href = "<?=url(['site/login'])?>";
              });
            } else {
              layer.alert(msg.info);
            }
          }
        }, 'json');
      });
    });

    $('#CateMenu .itemOne').each(function () {
      var _this = $(this);
      var currentType = _this.data('symbol');
      if (currentType == symbol) {
        _this.find('.jumpText').addClass('on');
      }
    });

    $('#CateMenu .itemOne').each(function () {
      var _this = $(this);
      var currentType = _this.data('symbol');
      for (var i = 0, len = typeArr.length; i < len; i++) {
        if (currentType == typeArr[i].symbol) {
          _this.find('.jumpText').html(typeArr[i].name);
        }
      }
    });

  }()

  function checkHold() {

    $.ajax({
      url: "/order/positions?product_id=<?=$products->id?>" + "&model_type=<?=$model_type?>",
      async: true,
      success: function (data) {
        if (data) {
          var res = JSON.parse(data);
          $('.am-badge').html('');
          for (var i = 0, len = res.count.length; i < len; i++) {
            $('#CateMenu .itemOne').each(function () {
              var _this = $(this);
              var currentType = _this.data('symbol');
              if (currentType == res.count[i].symbol) {
                if (res.count[i].count > 0) {
                  _this.find('.am-badge').html(res.count[i].count);
                } else {
                  _this.find('.am-badge').html('');
                }
              }
            });
          }
          var arr = [];
          $('.holeOne').each(function () {
            var _this = $(this);
            var currentId = _this.data('oid');
            arr.push(currentId)
          });
          if (arr.length != res.ids.length) {
            //window.location.reload();
          }
        }
      }
    });

  }



  function buy(rise_fall) {

    if (<?=$week?> == 1
  )
    {
      layer.alert('系统提示:周末休市');
      return;
    }
    if (<?=$is_trade?> == 1
  )
    {
      layer.alert('系统提示:非交易时间禁止下单');
      return;
    }

    var nums = $('#a1').val();
    var zs = parseFloat($('#a2').val());
    var zy = parseFloat($('#a3').val());
    var product_id = "<?=$id?>";
    //var rise_fall =requestObj.rise_fall;

    //alert('参数为'+nums+zy+zs +product_id+rise_fall);

    if ($('#currency').val() == 1) {
      var ht = '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">交易手续费：</span> ' + $('#charge1').html() + '元</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">触发止损金额：</span> ￥' + $('#a2').val() + '</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">止损金额增幅：</span> ￥<span id="zsZF"></span></p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">最大止损金额：</span>￥ <span id="maxZS"></span></p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">保证金：</span><span id="alertBZJ"></span>元</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">购买的手数：</span> ' + $('#a1').val() + '手</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">总金额合计：</span>￥  <span id="alertTotal"></span>元</p>';
    } else {
      var cur = '$';
      switch (parseInt("<?=$productInfo->currency?>")) {
        case 2:
          cur = '$';
          break;
        case 3:
          cur = 'HK$';
          break;
        case 4:
          cur = '€';
          break;
        default:
          break;
      }
      var ht = '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">交易手续费：</span> ' + $('#charge1').html() + '元</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">触发止损金额：</span> ' + cur + $('#a2').val() + '</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">止损金额增幅：</span>' + cur + '<span id="zsZF"></span></p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">最大止损金额：</span>' + cur + '<span id="maxZS"></span></p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">保证金：</span><span id="alertBZJ"></span>元</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">购买的手数：</span> ' + $('#a1').val() + '手</p>' +
        '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">总金额合计：</span>￥  <span id="alertTotal"></span>元</p>';
    }

//        layer.alert(result.info, {offset: '100px'});
    layer.confirm(ht, {
      title: '交易详情',
      btn: ['取消', '确定'] //按钮
    }, function () {
      //取消
      layer.closeAll()
    }, function () {
      //确定
      $.ajax({
        type: "post",
        url: "/order/ajax-safe-order",
        data: {
          hand: nums,
          stop_profit_price: zy,
          stop_loss_price: zs,
          product_id: product_id,
          rise_fall: rise_fall,
          model_type: "<?=$model_type?>",
        },
        success: function (result) {
          if (result.state) {
//                        setTimeout(function () {
//                            if ("<?//=$model_type?>//" == 1) {
//                                window.location.href = "<?//=url(['user/userrecord'])?>//";
//                            } else {
//                                window.location.href = "<?//=url(['user/usersim'])?>//";
//                            }
//
//                        }, 2000);
//                        window.location.href = history.go(-1);
            location.reload();
          } else {
            if (result.info == 1) {
              var ht = '<p class="am-margin-0 am-padding-bottom-sm">请先登录</p>';
              layer.confirm(ht, {
                title: '信息',
                btn: ['确定'] //按钮
              }, function () {
                //确定
                window.location.href = "<?=url(['site/login'])?>";
              });
            } else {
              layer.alert(result.info);
            }
          }
        }
      });
    });


  }

  function getDataFn() {
      flagss == 1
      if (flagss == 1){
          $.ajax({
              url: "<?=url('site/get-data')?>" + "?symbol="+symbol,
              async: true,dataType:'json',
              success: function (ret) {
                  dataO = dealNum(ret);
                  setEC();
              }
          });
      }
  }

  function getDataMin30() {
      flagss = 2;
    $.ajax({
        url: 'http://dt.jctytech.com/stock.php?u=wwwzzzzdd0599&symbol='+symbol+'&type=kline&line=min,30&num=100&sort=Date%20desc',
      async: true,
      success: function (ret) {
        dataO = dealNumMin30(ret);
        setEC();
      }
    });
  }

  function getDay() {
    $.ajax({
      url: "<?=WEB_STOCKET_URL?>"+"&line=day&num=60&sort=Date%20desc&symbol=" + symbol,
      async: true,dataType:'json',
      success: function (d) {
        data60 = {};
        var showday = [];
        var showdata = [];

        for (var i = d.length - 1; i >= 0; i--) {
          var date = new Date();
          date.setTime(d[i].Date * 1000);
          showday.push(date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate());
          showdata.push([d[i].Open, d[i].Close, d[i].Low, d[i].High]);
        }
        data60.showday = showday;
        data60.showdata = showdata;
      }
    });
  }

  function getPriceFn() {
      $.ajax({
          url: "<?=url('site/get-fn')?>" + "?symbol="+symbol,
          async: true,dataType:'json',
          success: function (res) {
              var ret = res;
              var ZD = (ret.NewPrice - ret.LastClose);
              var ZDL = ZD / ret.LastClose * 100;

              $('#price1').html(ret.SP1);
              $('#price2').html(ret.BP1);
              $('#price3').html(ret.NewPrice);
              $('.nowprice').html(ret.NewPrice);
              $('#price4').html(ZD.toFixed(2));
              $('#price5').html(ZDL.toFixed(2) + '%');

              $('#buyBar').css({'width': ret.BV1 + '%'});
              $('#buyBarText').html(ret.BV1);
              $('#sellBar').css({'width': ret.SV1 + '%'});
              $('#sellBarText').html(ret.SV1);

              $('#textZD').html(ZD.toFixed(2));
              $('#textHigh').html(ret.High);
              $('#textOpen').html(ret.Open);
              $('#textHold').html(ret.Open_Int);
              $('#textHand').html(ret.Price3);
              $('#textZF').html(ret.PriceChangeRatio.toFixed(2) + '%');
              $('#textLow').html(ret.Low);
              $('#textYR').html(ret.LastClose);
              $('#textYE').html(ret.Price2);
              $('#textMoney').html(ret.Amount);
              reCountFn();
          }
      });
  }

    getDay();
    getDataFn();
    getPriceFn();

    setInterval(function () {
        updateOrder();
    }, 2000);

    setInterval(function () {
        getPriceFn();
    }, 2000);
    setInterval(function () {
        getDataFn();
    }, 2000);
    setInterval(function () {
        checkHold();
    }, 2000);

  function dealNum(d) {
    var timeArr = [];
    var dataArr = [];
    var partTimeArr = [];
    // var partTimeArr1 = [];
    // var partTimeArr2 = [];
    // var partTimeArr3 = [];
    // var partTimeArr4 = [];
    var partDataArr = [];
    // var partDataArr1 = [];
    // var partDataArr2 = [];
    // var partDataArr3 = [];
    // var partDataArr4 = [];
    var data1MinArr = [];
    var data5MinArr = [];
    var data30MinArr = [];
    var min1Arr = [];
    var min5Arr = [];
    var min30Arr = [];

    var nowTime = new Date();
    var hour3 = 60 * 60 * 3 * 1000;

    for (var i = d.length - 1; i >= 0; i--) {
      var date = new Date();

      date.setTime(d[i].Date * 1000);
      var HOne = (date.getHours() < 10) ? '0' + date.getHours() : date.getHours();
      var HMin = (date.getMinutes() < 10) ? '0' + date.getMinutes() : date.getMinutes();
      var timeOne = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " + HOne + ':' + HMin;
      d[i].showday = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
      d[i].showTime = timeOne;
      d[i].time1Min = timeOne;
      // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
      d[i].data1Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High];

      // var dataH = date.getHours();
      // if (dataH >= 9 && dataH <= 14) {
      //     partTimeArr1.push(timeOne);
      //     partDataArr1.push(d[i].Close)
      // } else if (dataH > 14 && dataH < 19) {
      //     partTimeArr2.push(timeOne);
      //     partDataArr2.push(d[i].Close)
      // } else if (dataH >= 19 && dataH <= 22) {
      //     partTimeArr3.push(timeOne);
      //     partDataArr3.push(d[i].Close)
      // } else {
      //     partTimeArr4.push(timeOne);
      //     partDataArr4.push(d[i].Close)
      // }

      if (nowTime.valueOf() - date.valueOf() < hour3) {
        partTimeArr.push(timeOne);
        partDataArr.push(d[i].Close);
      }


      if (i % 5 == 0) {
        d[i].time5Min = timeOne;
        d[i].data5Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High];
        min5Arr.push(d[i].time5Min);
        data5MinArr.push(d[i].data5Min);
      }
      if (i % 30 == 0) {
        d[i].time30Min = timeOne;
        d[i].data30Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High];
        min30Arr.push(d[i].time30Min);
        data30MinArr.push(d[i].data30Min);
      }
      timeArr.push(d[i].showTime);
      dataArr.push(d[i].Close);
      min1Arr.push(d[i].time1Min);
      data1MinArr.push(d[i].data1Min);
    }
    // var nowTime = new Date().getHours();
    // if (nowTime >= 9 && nowTime <= 14) {
    //     partDataArr = partDataArr1;
    //     partTimeArr = partTimeArr1;
    // } else if (nowTime > 14 && nowTime < 19) {
    //     partDataArr = partDataArr2;
    //     partTimeArr = partTimeArr2;
    // } else if (nowTime >= 19 && nowTime <= 22) {
    //     partDataArr = partDataArr3;
    //     partTimeArr = partTimeArr3;
    // } else {
    //     partDataArr = partDataArr4;
    //     partTimeArr = partTimeArr4;
    // }

    if (partTimeArr.length === 0) {
      var timeCreate = new Date().valueOf() - hour3;
      for (var j = 0; j <= 180; j++) {
        timeCreate += 60000;
        var cTime = new Date();
        cTime.setTime(timeCreate);
        var cHOne = (cTime.getHours() < 10) ? '0' + cTime.getHours() : cTime.getHours();
        var cHMin = (cTime.getMinutes() < 10) ? '0' + cTime.getMinutes() : cTime.getMinutes();
        var cTimeSHow = cTime.getFullYear() + "-" + (cTime.getMonth() + 1) + "-" + cTime.getDate() + " " + cHOne + ':' + cHMin;

        partTimeArr.push(cTimeSHow);
        partDataArr.push(1);
      }
    }

    return {
      time: timeArr,
      min1: min1Arr,
      min5: min5Arr,
      min30: min30Arr,
      data: dataArr,
      data1Min: data1MinArr,
      data5Min: data5MinArr,
      data30Min: data30MinArr,
      partTime: partTimeArr,
      partTimeData: partDataArr
    }
  }

  function dealNumMin30(d) {
    var timeArr = [];
    var dataArr = [];
    var partTimeArr = [];
    var partDataArr = [];
    var data1MinArr = [];
    var data5MinArr = [];
    var data30MinArr = [];
    var min1Arr = [];
    var min5Arr = [];
    var min30Arr = [];

    var nowTime = new Date();
    var hour3 = 60 * 60 * 3 * 1000;

    for (var i = d.length - 1; i >= 0; i--) {
      var date = new Date();
      date.setTime(d[i].Date * 1000);

      var HOne = (date.getHours() < 10) ? '0' + date.getHours() : date.getHours();
      var HMin = (date.getMinutes() < 10) ? '0' + date.getMinutes() : date.getMinutes();
      var timeOne = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " + HOne + ':' + HMin;
      d[i].showday = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();
      d[i].showTime = timeOne;
      d[i].time1Min = timeOne;
      // 数据意义：开盘(open)，收盘(close)，最低(lowest)，最高(highest)
      d[i].data1Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High];


      if (nowTime.valueOf() - date.valueOf() < hour3) {
        partTimeArr.push(timeOne);
        partDataArr.push(d[i].Close);
      }
      d[i].time30Min = timeOne;
      d[i].data30Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High];
      min30Arr.push(d[i].time30Min);
      data30MinArr.push(d[i].data30Min);
      timeArr.push(d[i].showTime);
      dataArr.push(d[i].Close);
      min1Arr.push(d[i].time1Min);
      data1MinArr.push(d[i].data1Min);
    }

    if (partTimeArr.length === 0) {
      var timeCreate = new Date().valueOf() - hour3;
      for (var j = 0; j <= 180; j++) {
        timeCreate += 60000;
        var cTime = new Date();
        cTime.setTime(timeCreate);
        var cHOne = (cTime.getHours() < 10) ? '0' + cTime.getHours() : cTime.getHours();
        var cHMin = (cTime.getMinutes() < 10) ? '0' + cTime.getMinutes() : cTime.getMinutes();
        var cTimeSHow = cTime.getFullYear() + "-" + (cTime.getMonth() + 1) + "-" + cTime.getDate() + " " + cHOne + ':' + cHMin;

        partTimeArr.push(cTimeSHow);
        partDataArr.push(1);
      }
    }

    return {
      time: timeArr,
      min30: min30Arr,
      data30Min: data30MinArr,
      partTime: partTimeArr,
      partTimeData: partDataArr
    }
  }

  function calculateMA(dayCount, arr) {
    var result = [];
    for (var i = 0,
           len = arr.length; i < len; i++) {
      if (i < dayCount) {
        result.push('-');
        continue;
      }
      var sum = 0;
      for (var j = 0; j < dayCount; j++) {
        sum += parseFloat(arr[i - j][1]);
      }
      result.push(sum / dayCount);
    }
    return result;
  }

  var avg_data = ["-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", 0, "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-"];
  var cj_data = ["-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", 0, "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-"];
  var timearr = '06:00,23:59,00:00,05:00';
  var timearrs = timearr.split(",");
  var preClosePrice = 68.210000;
  var timearr_start = '06:00,00:00';
  var timearr_starts = timearr_start.split(",");
  var timearr_end = '23:59,05:00';
  var timearr_ends = timearr_end.split(",");

  function setEC() {
    var option = {};
    var curT = parseInt(curTab);

    switch (curT) {
      case 1:
        var page1 = echarts.init(document.getElementById('page1'));
        var turnArr = dataO.partTimeData.slice(0);
        turnArr = turnArr.sort();
        var limit = (turnArr[0] + turnArr[turnArr.length - 1]) / 2 / 0.0001;

        option = {
          animation: false,
          grid: [{
            borderColor: '#000',
            left: 0,
            top: '10px',
            height: '72%',
            right: '10%',
          },
            {
              borderColor: '#000',
              left: 0,
              height: '15%',
              bottom: 0,
              top: '75%',
              right: '10%',
            }],
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'cross',
              snap: true,
              label: {
                show: true,
                precision: '2',
              }
            },
            position: function (pos, params, el, elRect, size) {
              var obj = {
                top: 10
              };
              obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
              return obj;
            },
          },
          xAxis: [{
            type: 'category',
            boundaryGap: false,
            offset: 20,
            scale: true,
            splitLine: {
              lineStyle: {
                color: ['#ccc'],
                opacity: '0.5',
              },
              show: false,
              interval: function (index, value) {
                var endcount = timearr_ends.length - 1;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_ends[ix]) {
                      return true;
                    }
                  }
                }
                return false;
              }
            },
            nameGap: 0,
            boundaryGap: false,
            axisTick: {
              show: false,
            },
            axisLine: {
              show: false,
              length: 0,
            },
            axisLabel: {
              margin: -15,
              show: false,
              fontSize: 10,
              interval: function (index, value) {
                if ($.inArray(value, timearrs) == -1) {
                  return false;
                }
                var endcount = timearr_ends.length - 1;
                if (timearr_ends[endcount] == value || timearr_starts[0] == value) return false;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_starts[ixn]) {
                      return false;
                    }
                  }
                }
                return true;
              },
              formatter: function (value, index) {
                var endcount = timearr_ends.length - 1;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_ends[ix] || value == timearr_starts[ixn]) {
                      value = timearr_ends[ix] + "|" + timearr_starts[ixn];
                    }
                  }
                }
                return value;
              },
              textStyle: {
                color: 'red',
                fontSize: 9,
              }
            },
            data: dataO.partTime,
          },
            {
              type: 'category',
              gridIndex: 1,
              data: dataO.partTime,
              boundaryGap: false,
              axisLine: {
                show: true
              },
              splitLine: {
                lineStyle: {
                  color: ['#ccc'],
                  opacity: '0.5',
                },
                show: false,
                interval: function (index, value) {
                  var endcount = timearr_ends.length - 1;
                  for (var ix in timearr_ends) {
                    if (ix != endcount) {
                      ixn = parseInt(ix) + 1
                      if (value == timearr_ends[ix]) {
                        return true;
                      }
                    }
                  }
                  return false;
                }
              },
              axisTick: {
                show: false,
              },
              axisLine: {
                show: false,
                length: 0,
              },
              axisLabel: {
                show: true,
                interval: function (index, value) {
                  if (index % 240 == 0 && index != 0 || index == 60) {
                    return value
                  }
                },
              }
            }],
          yAxis: [{
            show: true,
            type: 'value',
            position: 'right',
            splitLine: {
              show: true,
              lineStyle: {
                color: ['#eee', '#eee', '#eee', '#eee', '#999', '#eee', '#eee', '#eee', '#eee'],
                type: 'dotted',
                opacity: '0.5',
              },
            },
            offset: -5,
            interval: limit,
            min: parseFloat(turnArr[0]),
            max: parseFloat(turnArr[turnArr.length - 1]),
            axisTick: {
              show: false,
            },
            axisLabel: {
              show: true,
              textStyle: {
                color: function (value, index) {
                  value = value.replace(",", "");
                  value = parseFloat(value);
                  if (value - preClosePrice > 0) {
                    colorstyle = '#FF0000';
                  } else if (value - preClosePrice < 0) {
                    colorstyle = 'green';
                  } else {
                    colorstyle = '#999999';
                  }
                  return colorstyle;
                }
              },
              formatter: function (value, index) {
                value = parseFloat(value);
                return value.toFixed(2);
              },
              margin: 0,
            },
            axisLine: {
              show: false,
            },
          },
            {
              show: true,
              gridIndex: 1,
              type: 'value',
              min: 0,
              position: 'right',
              offset: 10,
              max: 0,
              axisTick: {
                show: false,
              },
              axisLabel: {
                show: false,
                margin: 0,
              },
              axisLine: {
                show: false,
              },
              splitLine: {
                show: false,
                lineStyle: {
                  color: ['#ccc'],
                  type: 'dotted',
                  opacity: '0.5',
                },
              },
            },
          ],
          dataZoom: [{
            type: 'inside',
            xAxisIndex: [0],
            start: 0,
            end: 100
          }],
          series: [{
            name: '',
            type: 'line',
            smooth: true,
            itemStyle: {
              normal: {
                color: '#648BCB'
              }
            },
            lineStyle: {
              normal: {
                width: 1
              }
            },
            areaStyle: {
              normal: {
                color: {
                  type: 'linear',
                  x: 0,
                  y: 0,
                  x2: 0,
                  y2: 1,
                  colorStops: [{
                    offset: 0,
                    color: '#D3F1FF'
                  },
                    {
                      offset: 1,
                      color: '#FFFFFF'
                    }],
                  globalCoord: false
                }
              }
            },
            markLine: {
              lineStyle: {
                normal: {
                  color: '#678CCB'
                }
              },
              data: [[{
                symbol: 'none',
                x: '87%',
                yAxis: '0',
              },
                {
                  symbol: 'circle',
                  symbolSize: 4,
                  label: {
                    normal: {
                      position: 'start',
                    }
                  },
                  value: '0',
                  coord: ['10:57', 0]
                }]]
            },
            data: dataO.partTimeData,
          },
            {
              name: '',
              type: 'line',
              smooth: true,
              symbol: 'none',
              sampling: 'average',
              itemStyle: {
                normal: {
                  color: 'red'
                }
              },
              lineStyle: {
                normal: {
                  width: 1
                }
              },
              data: avg_data,
            },
            {
              name: 'Volumn',
              type: 'bar',
              xAxisIndex: 1,
              yAxisIndex: 1,
              data: cj_data
            }]
        };

        page1.setOption(option, true);

        break;
      case 2:
        var page2 = echarts.init(document.getElementById('page2'));
        var turnArr = dataO.data.slice(0);
        turnArr = turnArr.sort();
        var limit = (turnArr[0] + turnArr[turnArr.length - 1]) / 2 / 0.0001;

        option = {
          animation: false,
          grid: [{
            borderColor: '#000',
            left: 0,
            top: '10px',
            height: '72%',
            right: '10%',
          },
            {
              borderColor: '#000',
              left: 0,
              height: '15%',
              bottom: 0,
              top: '75%',
              right: '10%',
            }],
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'cross',
              snap: true,
              label: {
                show: true,
                precision: '2',
              }
            },
            position: function (pos, params, el, elRect, size) {
              var obj = {
                top: 10
              };
              obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
              return obj;
            },
          },
          xAxis: [{
            type: 'category',
            boundaryGap: false,
            offset: 20,
            scale: true,
            splitLine: {
              lineStyle: {
                color: ['#ccc'],
                opacity: '0.5',
              },
              show: false,
              interval: function (index, value) {
                var endcount = timearr_ends.length - 1;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_ends[ix]) {
                      return true;
                    }
                  }
                }
                return false;
              }
            },
            nameGap: 0,
            boundaryGap: false,
            axisTick: {
              show: false,
            },
            axisLine: {
              show: false,
              length: 0,
            },
            axisLabel: {
              margin: -15,
              show: false,
              fontSize: 10,
              interval: function (index, value) {
                if ($.inArray(value, timearrs) == -1) {
                  return false;
                }
                var endcount = timearr_ends.length - 1;
                if (timearr_ends[endcount] == value || timearr_starts[0] == value) return false;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_starts[ixn]) {
                      return false;
                    }
                  }
                }
                return true;
              },
              formatter: function (value, index) {
                var endcount = timearr_ends.length - 1;
                for (var ix in timearr_ends) {
                  if (ix != endcount) {
                    ixn = parseInt(ix) + 1
                    if (value == timearr_ends[ix] || value == timearr_starts[ixn]) {
                      value = timearr_ends[ix] + "|" + timearr_starts[ixn];
                    }
                  }
                }
                return value;
              },
              textStyle: {
                color: 'red',
                fontSize: 9,
              }
            },
            data: dataO.time,
          },
            {
              type: 'category',
              gridIndex: 1,
              data: dataO.time,
              boundaryGap: false,
              axisLine: {
                show: true
              },
              splitLine: {
                lineStyle: {
                  color: ['#ccc'],
                  opacity: '0.5',
                },
                show: false,
                interval: function (index, value) {
                  var endcount = timearr_ends.length - 1;
                  for (var ix in timearr_ends) {
                    if (ix != endcount) {
                      ixn = parseInt(ix) + 1
                      if (value == timearr_ends[ix]) {
                        return true;
                      }
                    }
                  }
                  return false;
                }
              },
              axisTick: {
                show: false,
              },
              axisLine: {
                show: false,
                length: 0,
              },
              axisLabel: {
                show: true,
                interval: function (index, value) {
                  if (index % 240 == 0 && index != 0 || index == 60) {
                    return value
                  }
                },
              }
            }],
          yAxis: [{
            show: true,
            type: 'value',
            position: 'right',
            splitLine: {
              show: true,
              lineStyle: {
                color: ['#eee', '#eee', '#eee', '#eee', '#999', '#eee', '#eee', '#eee', '#eee'],
                type: 'dotted',
                opacity: '0.5',
              },
            },
            offset: -5,
            interval: limit,
            min: parseFloat(turnArr[0]),
            max: parseFloat(turnArr[turnArr.length - 1]),
            axisTick: {
              show: false,
            },
            axisLabel: {
              show: true,
              textStyle: {
                color: function (value, index) {
                  value = value.replace(",", "");
                  value = parseFloat(value);
                  if (value - preClosePrice > 0) {
                    colorstyle = '#FF0000';
                  } else if (value - preClosePrice < 0) {
                    colorstyle = 'green';
                  } else {
                    colorstyle = '#999999';
                  }
                  return colorstyle;
                }
              },
              formatter: function (value, index) {
                value = parseFloat(value);
                return value.toFixed(2);
              },
              margin: 0,
            },
            axisLine: {
              show: false,
            },
          },
            {
              show: true,
              gridIndex: 1,
              type: 'value',
              min: 0,
              position: 'right',
              offset: 10,
              max: 0,
              axisTick: {
                show: false,
              },
              axisLabel: {
                show: false,
                margin: 0,
              },
              axisLine: {
                show: false,
              },
              splitLine: {
                show: false,
                lineStyle: {
                  color: ['#ccc'],
                  type: 'dotted',
                  opacity: '0.5',
                },
              },
            },
          ],
          dataZoom: [{
            type: 'inside',
            xAxisIndex: [0],
            start: 0,
            end: 100
          }],
          series: [{
            name: '',
            type: 'line',
            smooth: true,
            itemStyle: {
              normal: {
                color: '#648BCB'
              }
            },
            lineStyle: {
              normal: {
                width: 1
              }
            },
            areaStyle: {
              normal: {
                color: {
                  type: 'linear',
                  x: 0,
                  y: 0,
                  x2: 0,
                  y2: 1,
                  colorStops: [{
                    offset: 0,
                    color: '#D3F1FF'
                  },
                    {
                      offset: 1,
                      color: '#FFFFFF'
                    }],
                  globalCoord: false
                }
              }
            },
            markLine: {
              lineStyle: {
                normal: {
                  color: '#678CCB'
                }
              },
              data: [[{
                symbol: 'none',
                x: '87%',
                yAxis: '0',
              },
                {
                  symbol: 'circle',
                  symbolSize: 4,
                  label: {
                    normal: {
                      position: 'start',
                    }
                  },
                  value: '0',
                  coord: ['10:57', 0]
                }]]
            },
            data: dataO.data,
          },
            {
              name: '',
              type: 'line',
              smooth: true,
              symbol: 'none',
              sampling: 'average',
              itemStyle: {
                normal: {
                  color: 'red'
                }
              },
              lineStyle: {
                normal: {
                  width: 1
                }
              },
              data: avg_data,
            },
            {
              name: 'Volumn',
              type: 'bar',
              xAxisIndex: 1,
              yAxisIndex: 1,
              data: cj_data
            }]
        };

        setTimeout(function () {
          page2.setOption(option, true);
        }, 100);

        break;
      case 6:

        if (goin3) {
          goin3 = false;
          var page6 = echarts.init(document.getElementById('page6'));
          var turnArr = data60.showdata.slice(0);

          turnArr = turnArr.sort();

          option = {
            tooltip: {
              trigger: 'axis',
              axisPointer: {
                type: 'cross',
                label: {
                  show: true,
                  precision: '2',
                }
              },
              backgroundColor: 'rgba(245, 245, 245, 0.8)',
              borderWidth: 1,
              borderColor: '#ccc',
              padding: 10,
              textStyle: {
                color: '#000'
              },
              position: function (pos, params, el, elRect, size) {
                var obj = {
                  top: 10
                };
                obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
                return obj;
              },
              label: {
                backgroundColor: '#000',
              },
              formatter: function (param) {
                openprice = parseFloat(param[0].data[1]);
                closeprice = parseFloat(param[0].data[2]);
                lowprice = parseFloat(param[0].data[3]);
                highprice = parseFloat(param[0].data[4]);
                return ['时间: <font style="font-size:12px;">' + param[0].name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + highprice.toFixed(2) + '<br/>'].join('');
              },
              extraCssText: 'width: 200px'
            },
            grid: {
              borderColor: '#ccc',
              left: 10,
              right: 10,
              top: 10,
              bottom: 20
            },
            xAxis: {
              type: 'category',
              data: data60.showday,
              scale: true,
              boundaryGap: false,
              axisLine: {
                onZero: false
              },
              splitNumber: 20,
              splitLine: {
                lineStyle: {
                  color: ['#eee', '#eee'],
                  opacity: 0.5
                }
              },
              axisPointer: {
                label: {
                  formatter: function (params) {
                    var seriesValue = (params.seriesData[0] || {}).value;
                    return params.value + (seriesValue != null ? '\n' + echarts.format.addCommas(seriesValue) : '');
                  },
                  backgroundColor: '#000',
                }
              },
              nameGap: 0,
              boundaryGap: false,
              axisTick: {
                show: false,
              },
              axisLine: {
                show: true,
                length: 0,
                lineStyle: {
                  color: '#eee',
                }
              },
              axisLabel: {
                show: true,
                interval: function (index, value) {
                  if (index % 5 == 0) return true;
                  return false;
                },
                textStyle: {
                  color: '#999'
                },
                margin: 4
              },
              min: 'dataMin',
              max: 'dataMax'
            },
            yAxis: {
              scale: true,
              splitLine: {
                show: true,
                lineStyle: {
                  color: ['#eeeeee'],
                  type: 'dotted',
                }
              },
              axisLabel: {
                show: false,
                textStyle: {
                  color: '#FF0000',
                  baseline: 'bottom',
                },
                margin: 8,
              },
              splitNumber: 6,
              axisLine: {
                show: false,
              },
              axisTick: {
                show: false,
              },
            },
            dataZoom: [{
              type: 'inside',
              xAxisIndex: [0],
              start: 0,
              end: 100
            }],
            series: [{
              name: 'K线',
              type: 'candlestick',
              data: data60.showdata,
              itemStyle: {
                normal: {
                  color: '#ff4c52',
                  color0: '#1aaa0f',
                  borderColor: '#ff4c52',
                  borderColor0: '#1aaa0f'
                }
              },
              tooltip: {
                formatter: function (param) {
                  openprice = param.data[0];
                  closeprice = param.data[1];
                  lowprice = param.data[2];
                  highprice = param.data[3];
                  return ['时间: <font style="font-size:12px;">' + param.name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + hightprice.toFixed(2) + '<br/>'].join('');
                }
              }
            },
              {
                name: 'MA5',
                type: 'line',
                data: calculateMA(5, data60.showdata),
                smooth: true,
                lineStyle: {
                  normal: {
                    color: '#f2cfa9'
                  }
                }
              },
              {
                name: 'MA10',
                type: 'line',
                data: calculateMA(10, data60.showdata),
                smooth: true,
                lineStyle: {
                  normal: {
                    color: '#687cd5'
                  }
                }
              },
              {
                name: 'MA20',
                type: 'line',
                data: calculateMA(20, data60.showdata),
                smooth: true,
                lineStyle: {
                  normal: {
                    color: '#e9837e'
                  }
                }
              }]
          };

          setTimeout(function () {
            page6.setOption(option);
          }, 100);
        }

        break;
      case 3:

        var page3 = echarts.init(document.getElementById('page3'));
        var turnArr = dataO.data1Min.slice(0);
        turnArr = turnArr.sort();

        option = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'cross',
              label: {
                show: true,
                precision: '2',
              }
            },
            backgroundColor: 'rgba(245, 245, 245, 0.8)',
            borderWidth: 1,
            borderColor: '#ccc',
            padding: 10,
            textStyle: {
              color: '#000'
            },
            position: function (pos, params, el, elRect, size) {
              var obj = {
                top: 10
              };
              obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
              return obj;
            },
            label: {
              backgroundColor: '#000',
            },
            formatter: function (param) {
              openprice = parseFloat(param[0].data[1]);
              closeprice = parseFloat(param[0].data[2]);
              lowprice = parseFloat(param[0].data[3]);
              highprice = parseFloat(param[0].data[4]);
              return ['时间: <font style="font-size:12px;">' + param[0].name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + highprice.toFixed(2) + '<br/>'].join('');
            },
            extraCssText: 'width: 200px'
          },
          grid: {
            borderColor: '#ccc',
            left: 10,
            right: 10,
            top: 10,
            bottom: 20
          },
          xAxis: {
            type: 'category',
            data: dataO.min1,
            scale: true,
            boundaryGap: false,
            axisLine: {
              onZero: false
            },
            splitNumber: 20,
            splitLine: {
              lineStyle: {
                color: ['#eee', '#eee'],
                opacity: 0.5
              }
            },
            axisPointer: {
              label: {
                formatter: function (params) {
                  var seriesValue = (params.seriesData[0] || {}).value;
                  return params.value + (seriesValue != null ? '\n' + echarts.format.addCommas(seriesValue) : '');
                },
                backgroundColor: '#000',
              }
            },
            nameGap: 0,
            boundaryGap: false,
            axisTick: {
              show: false,
            },
            axisLine: {
              show: true,
              length: 0,
              lineStyle: {
                color: '#eee',
              }
            },
            axisLabel: {
              show: true,
              interval: function (index, value) {
                if (index % 5 == 0) return true;
                return false;
              },
              textStyle: {
                color: '#999'
              },
              margin: 4
            },
            min: 'dataMin',
            max: 'dataMax'
          },
          yAxis: {
            scale: true,
            splitLine: {
              show: true,
              lineStyle: {
                color: ['#eeeeee'],
                type: 'dotted',
              }
            },
            axisLabel: {
              show: false,
              textStyle: {
                color: '#FF0000',
                baseline: 'bottom',
              },
              margin: 8,
            },
            splitNumber: 6,
            axisLine: {
              show: false,
            },
            axisTick: {
              show: false,
            },
          },
          dataZoom: [{
            type: 'inside',
            xAxisIndex: [0],
            start: 60,
            end: 100
          }],
          series: [{
            name: 'K线',
            type: 'candlestick',
            data: dataO.data1Min,
            itemStyle: {
              normal: {
                color: '#ff4c52',
                color0: '#1aaa0f',
                borderColor: '#ff4c52',
                borderColor0: '#1aaa0f'
              }
            },
            tooltip: {
              formatter: function (param) {
                openprice = param.data[0];
                closeprice = param.data[1];
                lowprice = param.data[2];
                highprice = param.data[3];
                return ['时间: <font style="font-size:12px;">' + param.name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + hightprice.toFixed(2) + '<br/>'].join('');
              }
            }
          },
            {
              name: 'MA5',
              type: 'line',
              data: calculateMA(5, dataO.data1Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#f2cfa9'
                }
              }
            },
            {
              name: 'MA10',
              type: 'line',
              data: calculateMA(10, dataO.data1Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#687cd5'
                }
              }
            },
            {
              name: 'MA20',
              type: 'line',
              data: calculateMA(20, dataO.data1Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#e9837e'
                }
              }
            }]
        };

        setTimeout(function () {
          page3.setOption(option);
        }, 100);

        break;
      case 4:

        var page4 = echarts.init(document.getElementById('page4'));
        var turnArr = dataO.data5Min.slice(0);
        turnArr = turnArr.sort();

        option = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'cross',
              label: {
                show: true,
                precision: '2',
              }
            },
            backgroundColor: 'rgba(245, 245, 245, 0.8)',
            borderWidth: 1,
            borderColor: '#ccc',
            padding: 10,
            textStyle: {
              color: '#000'
            },
            position: function (pos, params, el, elRect, size) {
              var obj = {
                top: 10
              };
              obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
              return obj;
            },
            label: {
              backgroundColor: '#000',
            },
            formatter: function (param) {
              openprice = parseFloat(param[0].data[1]);
              closeprice = parseFloat(param[0].data[2]);
              lowprice = parseFloat(param[0].data[3]);
              highprice = parseFloat(param[0].data[4]);
              return ['时间: <font style="font-size:12px;">' + param[0].name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + highprice.toFixed(2) + '<br/>'].join('');
            },
            extraCssText: 'width: 200px'
          },
          grid: {
            borderColor: '#ccc',
            left: 10,
            right: 10,
            top: 10,
            bottom: 20
          },
          xAxis: {
            type: 'category',
            data: dataO.min5,
            scale: true,
            boundaryGap: false,
            axisLine: {
              onZero: false
            },
            splitNumber: 20,
            splitLine: {
              lineStyle: {
                color: ['#eee', '#eee'],
                opacity: 0.5
              }
            },
            axisPointer: {
              label: {
                formatter: function (params) {
                  var seriesValue = (params.seriesData[0] || {}).value;
                  return params.value + (seriesValue != null ? '\n' + echarts.format.addCommas(seriesValue) : '');
                },
                backgroundColor: '#000',
              }
            },
            nameGap: 0,
            boundaryGap: false,
            axisTick: {
              show: false,
            },
            axisLine: {
              show: true,
              length: 0,
              lineStyle: {
                color: '#eee',
              }
            },
            axisLabel: {
              show: true,
              interval: function (index, value) {
                if (index % 5 == 0) return true;
                return false;
              },
              textStyle: {
                color: '#999'
              },
              margin: 4
            },
            min: 'dataMin',
            max: 'dataMax'
          },
          yAxis: {
            scale: true,
            splitLine: {
              show: true,
              lineStyle: {
                color: ['#eeeeee'],
                type: 'dotted',
              }
            },
            axisLabel: {
              show: false,
              textStyle: {
                color: '#FF0000',
                baseline: 'bottom',
              },
              margin: 8,
            },
            splitNumber: 6,
            axisLine: {
              show: false,
            },
            axisTick: {
              show: false,
            },
          },
          dataZoom: [{
            type: 'inside',
            xAxisIndex: [0],
            start: 0,
            end: 100
          }],
          series: [{
            name: 'K线',
            type: 'candlestick',
            data: dataO.data5Min,
            itemStyle: {
              normal: {
                color: '#ff4c52',
                color0: '#1aaa0f',
                borderColor: '#ff4c52',
                borderColor0: '#1aaa0f'
              }
            },
            tooltip: {
              formatter: function (param) {
                openprice = param.data[0];
                closeprice = param.data[1];
                lowprice = param.data[2];
                highprice = param.data[3];
                return ['时间: <font style="font-size:12px;">' + param.name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + hightprice.toFixed(2) + '<br/>'].join('');
              }
            }
          },
            {
              name: 'MA5',
              type: 'line',
              data: calculateMA(5, dataO.data5Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#f2cfa9'
                }
              }
            },
            {
              name: 'MA10',
              type: 'line',
              data: calculateMA(10, dataO.data5Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#687cd5'
                }
              }
            },
            {
              name: 'MA20',
              type: 'line',
              data: calculateMA(20, dataO.data5Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#e9837e'
                }
              }
            }]
        };

        setTimeout(function () {
          page4.setOption(option);
        }, 100);

        break;
      case 5:

        var page5 = echarts.init(document.getElementById('page5'));
        var turnArr = dataO.data30Min.slice(0);
        turnArr = turnArr.sort();

        option = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'cross',
              label: {
                show: true,
                precision: '2',
              }
            },
            backgroundColor: 'rgba(245, 245, 245, 0.8)',
            borderWidth: 1,
            borderColor: '#ccc',
            padding: 10,
            textStyle: {
              color: '#000'
            },
            position: function (pos, params, el, elRect, size) {
              var obj = {
                top: 10
              };
              obj[['left', 'right'][+(pos[0] < size.viewSize[0] / 2)]] = 30;
              return obj;
            },
            label: {
              backgroundColor: '#000',
            },
            formatter: function (param) {
              openprice = parseFloat(param[0].data[1]);
              closeprice = parseFloat(param[0].data[2]);
              lowprice = parseFloat(param[0].data[3]);
              highprice = parseFloat(param[0].data[4]);
              return ['时间: <font style="font-size:12px;">' + param[0].name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + highprice.toFixed(2) + '<br/>'].join('');
            },
            extraCssText: 'width: 200px'
          },
          grid: {
            borderColor: '#ccc',
            left: 10,
            right: 10,
            top: 10,
            bottom: 20
          },
          xAxis: {
            type: 'category',
            data: dataO.min30,
            scale: true,
            boundaryGap: false,
            axisLine: {
              onZero: false
            },
            splitNumber: 20,
            splitLine: {
              lineStyle: {
                color: ['#eee', '#eee'],
                opacity: 0.5
              }
            },
            axisPointer: {
              label: {
                formatter: function (params) {
                  var seriesValue = (params.seriesData[0] || {}).value;
                  return params.value + (seriesValue != null ? '\n' + echarts.format.addCommas(seriesValue) : '');
                },
                backgroundColor: '#000',
              }
            },
            nameGap: 0,
            boundaryGap: false,
            axisTick: {
              show: false,
            },
            axisLine: {
              show: true,
              length: 0,
              lineStyle: {
                color: '#eee',
              }
            },
            axisLabel: {
              show: true,
              interval: function (index, value) {
                if (index % 5 == 0) return true;
                return false;
              },
              textStyle: {
                color: '#999'
              },
              margin: 4
            },
            min: 'dataMin',
            max: 'dataMax'
          },
          yAxis: {
            scale: true,
            splitLine: {
              show: true,
              lineStyle: {
                color: ['#eeeeee'],
                type: 'dotted',
              }
            },
            axisLabel: {
              show: false,
              textStyle: {
                color: '#FF0000',
                baseline: 'bottom',
              },
              margin: 8,
            },
            splitNumber: 6,
            axisLine: {
              show: false,
            },
            axisTick: {
              show: false,
            },
          },
          dataZoom: [{
            type: 'inside',
            xAxisIndex: [0],
            start: 0,
            end: 100
          }],
          series: [{
            name: 'K线',
            type: 'candlestick',
            data: dataO.data30Min,
            itemStyle: {
              normal: {
                color: '#ff4c52',
                color0: '#1aaa0f',
                borderColor: '#ff4c52',
                borderColor0: '#1aaa0f'
              }
            },
            tooltip: {
              formatter: function (param) {
                openprice = param.data[0];
                closeprice = param.data[1];
                lowprice = param.data[2];
                highprice = param.data[3];
                return ['时间: <font style="font-size:12px;">' + param.name + '</font><br/>', '开盘价: ' + openprice.toFixed(2) + '<br/>', '收盘价: ' + closeprice.toFixed(2) + '<br/>', '最低价: ' + lowprice.toFixed(2) + '<br/>', '最高价: ' + hightprice.toFixed(2) + '<br/>'].join('');
              }
            }
          },
            {
              name: 'MA5',
              type: 'line',
              data: calculateMA(5, dataO.data30Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#f2cfa9'
                }
              }
            },
            {
              name: 'MA10',
              type: 'line',
              data: calculateMA(10, dataO.data30Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#687cd5'
                }
              }
            },
            {
              name: 'MA20',
              type: 'line',
              data: calculateMA(20, dataO.data30Min),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#e9837e'
                }
              }
            }]
        };

        setTimeout(function () {
          page5.setOption(option);
        }, 100);

        break;
      default:
        break;
    }
  }

</script>

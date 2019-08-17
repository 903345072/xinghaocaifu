<header class="mui-bar mui-bar-nav" style="background-color: #000c17">
  <a class="mui-icon mui-icon-left-nav mui-pull-left" href="javascript:history.go(-1)"></a>
  <h1 class="mui-title"><?= $header ?></h1>
</header>
<style>
  body {
    background: #101419
  }

  .mui-content {
    background-color: transparent
  }

  .tm-trading-total ~ .mui-content {
    padding-bottom: 50px
  }

  .layui-layer-btn .layui-layer-btn0 {
    border-color: #dedede;
    background-color: #dedede;
    color: #000
  }

  .layui-layer-btn .layui-layer-btn1 {
    border-color: #4898d5;
    background-color: #4898d5;
    color: #fff
  }

  .cs-badge-group {
    font-size: 0
  }

  .cs-badge {
    margin: 0 1px;
    border-radius: 2px;
    font-size: 12px;
    display: inline-block;
    padding: 0 10px;
    background-color: #000
  }

  .cs-badge.mui-active {
    background-color: #dd3434
  }

  .cs-badge.uk-width-1-1 {
    width: 100%
  }

  .this-modal {
    width: 100%;
    display: none
  }

  .this-modal-wrap {
    border-radius: 5px;
    width: 90%;
  }

  .this-modal-header {
    font-size: 12px;
    color: #888;
    text-align: center;
    padding: 5px 10px;
    background-color: #fcfcfc;
    border-radius: 5px 5px 0 0
  }

  .this-modal-body {
    padding: 10px
  }

  .this-modal-footer .mui-btn {
    width: 100%;
    border-radius: 0 0 5px 5px;
    min-height: 34px;
    line-height: 32px
  }

  .chose-gird {
    margin: 0;
    padding: 0;
    list-style: none
  }

  .chose-gird > li {
    width: 50%;
    float: left;
    padding: 5px
  }

  .chose-item {
    display: block;
    color: #333;
    font-size: 13px;
    text-align: center;
    border-radius: 2px;
    padding: 2px 0
  }

  .chose-item.mui-active {
    background-color: #dd3434;
    color: #fff
  }

  .am-text-danger {
    color: #dd3434;
  }

</style>
<div class="tm-trading-total">
  <div class="mui-table buttom-buttons">
    <div class="mui-table-cell mui-col-xs-8">
      <div class="tm-panel-padded-0-10 uk-text-muted">
        <span class="">合计：<em class="uk-text-warning"><font id="totalprice"></font>元</em></span>
      </div>
    </div>

    <a class="mui-btn mui-btn-theme mui-table-cell mui-col-xs-4 save_order_form sureRise"
       href="Javascript:;">确定开多</a>
    <a class="mui-btn mui-btn-green mui-table-cell mui-col-xs-4 save_order_form sureFall"
       href="Javascript:;">确定开空</a>
  </div>
</div>

<div class="mui-content">
  <div class="">
    <form id="orderform">
      <ul class="mui-table-view mui-in-zero mui-table-view-inverted ">
        <li class="mui-table-view-cell  mui-media">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-4">
              <div class="mui-ellipsis">
                  <?php if ($model_type == 1) : ?>
                    <span class="uk-text-muted">实盘帐户资金</span>
                  <?php else : ?>
                    <span class="uk-text-muted">模拟盘帐户资金</span>
                  <?php endif ?>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-6">
              <div class="mui-ellipsis">
                  <?php if ($model_type == 1) : ?>
                    <span class=""><?= u()->account - u()->blocked_account ?>元</span>
                  <?php else : ?>
                    <span class=""><?= u()->moni_acount - u()->blocked_moni ?>元</span>
                  <?php endif ?>
              </div>
            </div>
          </div>
          <a class="mui-btn mui-btn-theme mui-btn-outlined mui-btn-small"
             href="<?= url(['user/recharge']) ?>">
            充值
          </a>
        </li>
        <li class="mui-table-view-cell mui-media">
          <span class="mui-pull-right">本时段持仓时间至<?= $productInfo->tradeTime ?></span>
          <div class="mui-media-body mui-ellipsis">
            <span class="uk-text-muted"><?= $productInfo->name ?>(<?= $productInfo->identify ?>)</span>
          </div>
        </li>
        <li class="mui-table-view-cell mui-media">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-3">
              <div class="mui-ellipsis">
                <span class="uk-text-muted">购买手数</span>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-9 mui-text-right">
              <div class="cs-badge-group">
                  <?php foreach ($productInfo->priceExtend as $k => $v): ?>

                    <div class="cs-badge gnums_show <?php if ($k == 0) {
                        echo 'mui-active';
                    } ?>"
                         nums="<?= $v->hand ?>"
                         data-deposit="<?= $v->deposit ?>"
                         data-fee="<?= $v->fee ?>"
                         data-stop_profit_price="<?= $v->stop_profit_price ?>"
                         data-stop_loss_price="<?= $v->stop_loss_price ?>"
                         data-point_unit="<?= $v->point_unit ?>"
                    >
                        <?= $v->hand ?>手
                    </div>
                  <?php endforeach ?>

              </div>
              <input type="hidden" name="info[nums]" id="goodsnums" value="1">
            </div>
          </div>
        </li>
        <li class="mui-table-view-cell mui-media">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-7">
              <div class="mui-ellipsis">
                                <span class="uk-text-muted">触发止损金额
                                    <?php if ($productInfo->currency == 1) { ?>
                                    <?php } else {
                                        if ($productInfo->currency == 2) { ?>
                                          (美元)
                                        <?php } else {
                                            if ($productInfo->currency == 3) { ?>
                                              (港币)
                                            <?php } else {
                                                if ($productInfo->currency == 4) { ?>
                                                  (欧元)
                                                <?php }
                                            }
                                        }
                                    } ?>
                                </span>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-5">
              <div class="cs-badge-group mui-text-right" style="padding-right: 6px;">
                <div id="zs-price" class="cs-badge mui-active uk-width-1-1">
                  <font id="zshtml">-1440.00</font>
                </div>
              </div>
              <div class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small">
                <input type="hidden" name="info[stoploss]" id="stoploss" value="200">
              </div>
            </div>
          </div>
        </li>
        <li class="mui-table-view-cell mui-media">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-7">
              <div class="mui-ellipsis">
                                <span class="uk-text-muted">触发止盈金额
                                    <?php if ($productInfo->currency == 1) { ?>
                                    <?php } else {
                                        if ($productInfo->currency == 2) { ?>
                                          (美元)
                                        <?php } else {
                                            if ($productInfo->currency == 3) { ?>
                                              (港币)
                                            <?php } else {
                                                if ($productInfo->currency == 4) { ?>
                                                  (欧元)
                                                <?php }
                                            }
                                        }
                                    } ?>
                                </span>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-5">
              <div class="cs-badge-group mui-text-right" style="padding-right: 6px;">
                <div id="zy-price" class="cs-badge mui-active uk-width-1-1">
                  <font id="zyhtml">7200.00</font>
                </div>
              </div>
              <div class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small">
                <input type="hidden" name="info[stop_profit]" id="zhiying" value="1000">
              </div>
            </div>
          </div>
        </li>
        <li class="mui-table-view-cell mui-media">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-4">
              <div class="mui-ellipsis">
                <span class="uk-text-muted">市价买入</span>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-6">
              <div class="uk-input-blank uk-input-blank-transparent">
                <input id="lastprice" class="uk-input" name="price" type="text"
                       value="<?= $productInfo->dataAll->price ?>" readonly="">
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-2">
              <div class="mui-radio this-radio">
                <input type="radio" name="buytype" value="1" checked="">
              </div>
            </div>
          </div>
        </li>
        <li class="mui-table-view-cell mui-media" style="display: none;">
          <div class="mui-table">
            <div class="mui-table-cell mui-col-xs-4">
              <div class="mui-ellipsis">
                <span class="uk-text-muted">限价买入</span>
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-6">
              <div class="uk-input-blank uk-input-blank-transparent">
                <input id="limitprice" class="uk-input" name="limitprice" type="text" value=""
                       placeholder="正在开发中" readonly="">
              </div>
            </div>
            <div class="mui-table-cell mui-col-xs-2">
              <div class="mui-radio this-radio">
                <input type="radio" name="buytype" value="2" id="limittype" disabled="disabled">
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="mui-table-view mui-in-zero  mui-table-view-inverted-2">
        <li style="display: none" class="mui-table-view-cell  mui-media">
            <?php if ($productInfo->currency == 1) { ?>


              <input type="hidden" id="currency" value="1">
            <?php } else {
                if ($productInfo->currency == 2) { ?>
                  <span class="mui-pull-right">1美元 = <?= config('USD') ?>人民币</span>
                  <div class="mui-media-body mui-ellipsis">
                    <span class="uk-text-muted">汇率&gt;美元兑人民币</span>
                  </div>
                  <input type="hidden" id="currency" value="<?= config('USD') ?>">
                <?php } else {
                    if ($productInfo->currency == 3) { ?>
                      <span class="mui-pull-right">1港币 = <?= config('HKD') ?>人民币</span>
                      <div class="mui-media-body mui-ellipsis">
                        <span class="uk-text-muted">汇率&gt;港币兑人民币</span>
                      </div>
                      <input type="hidden" id="currency" value="<?= config('HKD') ?>">
                    <?php } else {
                        if ($productInfo->currency == 4) { ?>
                          <span class="mui-pull-right">1欧元 = <?= config('EURO') ?>人民币</span>
                          <div class="mui-media-body mui-ellipsis">
                            <span class="uk-text-muted">汇率&gt;欧元兑人民币</span>
                          </div>
                          <input type="hidden" id="currency" value="<?= config('EURO') ?>">
                        <?php }
                    }
                }
            } ?>
          <input type="hidden" id="charge">
          <input type="hidden" id="frozen">
        </li>
        <li class="mui-table-view-cell  mui-media">
          <span class="mui-pull-right">￥<em id="jiaoyifei"></em></span>
          <div class="mui-media-body mui-ellipsis">
            <span class="uk-text-muted">交易手续费（元）</span>
          </div>
        </li>
        <li style="display: none" class="mui-table-view-cell  mui-media" style="display: <?= $model_type == 1 ? 'block' : 'none' ?>">
          <div class="mui-table">

            <div  class="mui-table-cell mui-col-xs-4">
              <div  class="uk-input-blank uk-input-blank-select uk-input-blank-inverted uk-input-blank-select-small">
                <select id="points" class="uk-input uk-input-small uk-text-top" name="info[points]" id="discount"
                        onchange="use_discount()">
                  <option value="0">不使用积分</option>
                    <?php if ($points >= 1000): ?>
                      <option value="10">1000(可抵扣10元)</option>
                    <?php endif; ?>
                    <?php if ($points >= 2000): ?>
                      <option value="20">2000(可抵扣20元)</option>
                    <?php endif; ?>
                    <?php if ($points >= 3000): ?>
                      <option value="30">3000(可抵扣30元)</option>
                    <?php endif; ?>
                </select>
              </div>
            </div>
          </div>
        </li>
        <li class="mui-table-view-cell  mui-media">
          <span class="mui-pull-right">￥<em id="baozhengjin"></em></span>
          <div class="mui-media-body mui-ellipsis">
            <span class="uk-text-muted">冻结保证金（元）</span>
          </div>
        </li>
      </ul>
      <div class="tm-panel-padded">
        <div class="uk-text-xsmall uk-text-muted">
          *实盘交易时会为您匹配合作投资人，执行您的买卖指令，并与您共享收益共担风险
        </div>
      </div>
      <input type="hidden" name="info[prono]" value="EC1806">
    </form>
  </div>
</div>
<div class="this-modal" id="modal-1">
  <div class="this-modal-header">
    请选择<font color="#000"><strong>触发</strong></font>止损金额
  </div>
  <div class="this-modal-body">
    <ul class="chose-gird mui-clearfix" id="zhisun_modal">

    </ul>
  </div>
  <div class="this-modal-footer">
    <a class="mui-btn mui-btn-theme" href="Javascript:" onclick="layer.closeAll();">
      确定
    </a>
  </div>
</div>
<div class="this-modal" id="modal-2">
  <div class="this-modal-header">
    请选择触发止盈金额
  </div>
  <div class="this-modal-body">
    <ul class="chose-gird mui-clearfix" id="zhiying_modal">

    </ul>
  </div>
  <div class="this-modal-footer">
    <a class="mui-btn mui-btn-theme" href="Javascript:" onclick="layer.closeAll();">
      确定
    </a>
  </div>
</div>
<script type="text/javascript" src="/js/mui.min.js"></script>
<script type="text/javascript">
  mui.init();
  var tempNums = {};
  var nowType = 1;
  var cur = '人民币:';
  switch (parseInt("<?=$productInfo->currency?>")) {
    case 2:
      cur = '$ ';
      break;
    case 3:
      cur = 'HK ';
      break;
    case 4:
      cur = '€ ';
      break;
    default:
      break;
  }

  var gnums_idnex = 0;

  function use_discount() {
    $('.gnums_show').eq(gnums_idnex).click();
  }

  $(function () {
    var requestObj1 = GetRequest();
    nowType = requestObj1.rise_fall;
    if (requestObj1.rise_fall == 1) {
      $('.sureFall').hide();
    } else {
      $('.sureRise').hide();
    }

    //默认值
    var newnums = parseInt($('.gnums_show').attr('nums'));
    var fee = parseFloat($('.gnums_show').data('fee'));
    var deposit = parseFloat($('.gnums_show').data('deposit'));
    var points = parseInt($("#points").val());
    var currency = $('#currency').val();
    tempNums.curWay = currency;
    if (currency == 1) {
      $('#jiaoyifei').html(Math.ceil(fee) - points);
      $('#charge').val(Math.ceil(fee) - points);
      $('#baozhengjin').html((deposit * newnums).toFixed(2));
      $('#frozen').val((deposit * newnums).toFixed(2));
      var totalprice = deposit * newnums + fee;
    } else {
      $('#jiaoyifei').html((Math.ceil(currency * fee) - points) + '(' + cur + (fee - points / currency).toFixed(2) + ')');
      $('#charge').val(Math.ceil(currency * fee) - points);
      $('#baozhengjin').html(((currency * (deposit * newnums).toFixed(2)).toFixed(2)) + '($' + (deposit * newnums).toFixed(2) + ')');
      $('#frozen').val(((currency * (deposit * newnums).toFixed(2)).toFixed(2)));
      var totalprice = (currency * deposit * newnums) + (currency * fee);
    }
    $('#totalprice').html(totalprice.toFixed(2));
    $('#goodsnums').val(newnums);
    var zs_data_arr = $('.gnums_show').data('stop_loss_price').split(',');
    var zy_data_arr = $('.gnums_show').data('stop_profit_price').split(',');
    $('#zshtml').html('-' + zs_data_arr[0]);
    $('#zshtml').attr('flag', zs_data_arr[0] + '(人民币：' + (zs_data_arr[0] * Number(currency)) + ')');
    $('#zyhtml').html(zy_data_arr[0]);
    $('#zyhtml').attr('flag', zy_data_arr[0] + '(人民币：' + (zy_data_arr[0] * Number(currency)) + ')');
    var zs_modal = '';
    var zy_modal = '';
    for (var i = 0; i < zs_data_arr.length; i++) {
      var money = zs_data_arr[i] + '(人民币:' + (zs_data_arr[i] * Number(currency)) + ')';
      zs_modal += '<li><a class="chose-item zhisun_show" flag="' + money + '" href="Javascript:">' + '-' + zs_data_arr[i] + '</a></li>'
    }
    for (var i = 0; i < zy_data_arr.length; i++) {
      var money = zy_data_arr[i] + '(人民币:' + (zy_data_arr[i] * Number(currency)) + ')';
      zy_modal += '<li><a class="chose-item zhiying_show" flag="' + money + '" href="Javascript:">' + zy_data_arr[i] + '</a></li>'
    }
    $('#zhisun_modal').html(zs_modal);
    $('#zhiying_modal').html(zy_modal);


    $('.gnums_show').click(function () {
      gnums_idnex = $(this).index();
      $(this).addClass("mui-active").siblings().removeClass("mui-active");
      var newnums = parseInt($(this).attr('nums'));
      var fee = parseFloat($(this).data('fee'));
      var deposit = parseFloat($(this).data('deposit'));
      var points = parseInt($("#points").val());
      var currency = $('#currency').val();

      if (currency == 1) {
        $('#jiaoyifei').html(Math.ceil(fee) - points);
        $('#charge').val(fee.toFixed(2) - points);
        $('#baozhengjin').html((deposit * newnums).toFixed(2));
        $('#frozen').val((deposit * newnums).toFixed(2));
        var totalprice = deposit * newnums + fee - points;
      } else {
        $('#jiaoyifei').html(Math.ceil(currency * fee) - points + '(' + cur + (fee - points / currency).toFixed(2) + ')');
        $('#charge').val(Math.ceil(currency * fee) - points);
        $('#baozhengjin').html(((currency * (deposit * newnums).toFixed(2)).toFixed(2)) + '(' + cur + (deposit * newnums).toFixed(2) + ')');
        $('#frozen').val(((currency * (deposit * newnums).toFixed(2)).toFixed(2)));
        var totalprice = (currency * deposit * newnums) + (currency * fee) - points;
      }
      $('#totalprice').html(totalprice.toFixed(2));
      $('#goodsnums').val(newnums);
      //止损止盈modal
      var zs_data_arr = $(this).data('stop_loss_price').split(',');
      var zy_data_arr = $(this).data('stop_profit_price').split(',');
      $('#zshtml').html('-' + parseFloat(zs_data_arr[0]));
      $('#zshtml').attr('flag', parseFloat(zs_data_arr[0]) + '(人民币：' + (zs_data_arr[0] * Number(currency)).toFixed(2) + ')');
      $('#zyhtml').html(zy_data_arr[0]);
      $('#zyhtml').attr('flag', zy_data_arr[0] + '(人民币：' + (zy_data_arr[0] * Number(currency)) + ')');
      var zs_modal = '';
      var zy_modal = '';
      for (var i = 0; i < zs_data_arr.length; i++) {
        var money = zs_data_arr[i] + '(人民币:' + (zs_data_arr[i] * Number(currency)) + ')';
        zs_modal += '<li><a class="chose-item zhisun_show" flag="' + money + '" href="Javascript:">' + '-' + parseFloat(zs_data_arr[i]) + '</a></li>'
      }
      for (var i = 0; i < zy_data_arr.length; i++) {
        var money = zy_data_arr[i] + '(人民币:' + (zy_data_arr[i] * Number(currency)) + ')';
        zy_modal += '<li><a class="chose-item zhiying_show" flag="' + money + '" href="Javascript:">' + parseFloat(zy_data_arr[i]) + '</a></li>'
      }
      $('#zhisun_modal').html(zs_modal);
      $('#zhiying_modal').html(zy_modal);

      tempNums.hand = newnums;
      tempNums.deposit = deposit;
      tempNums.fee = fee;
      tempNums.zsprice = $('#zshtml').html();

    })

    $('.gnums_show').eq(0).click();

    function GetRequest() {
      var url = location.search; //获取url中"?"符后的字串
      var theRequest = new Object();
      if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for (var i = 0; i < strs.length; i++) {
          theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
      }
      return theRequest;
    }

    $('.save_order_form').click(function () {
      var requestObj = GetRequest();
      var nums = $('#goodsnums').val();
      var zs = parseFloat($('#zshtml').html());
      var zy = parseFloat($('#zyhtml').html());
      var product_id = requestObj.product_id;
      var rise_fall = requestObj.rise_fall;


      if ($('#currency').val() == 1) {
        var ht = '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">交易手续费：</span> ' + parseFloat($('#charge').val()).toFixed(2) + '元</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">触发止损金额：</span>￥ ' + $('#zshtml').attr('flag') + '</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">止损金额增幅：</span>￥ <span id="zsZF">' + $('#zyhtml').attr('flag') + '</span></p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">最大止损金额：</span>￥ <span id="maxZS">' + $('#zyhtml').attr('flag') + '</span></p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">保证金：</span><span id="alertBZJ">' + $('#frozen').val() + '</span>元</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">购买的手数：</span> ' + $('#goodsnums').val() + '手</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">总金额合计：</span>￥  <span id="alertTotal">' + $('#totalprice').html() + '</span>元</p>';
      } else {
        var ht = '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">交易手续费：</span> ' + parseFloat($('#charge').val()).toFixed(2) + '元</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">触发止损金额：</span>' + cur + $('#zshtml').attr('flag') + '</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">止损金额增幅：</span>' + cur + '<span id="zsZF">' + $('#zyhtml').attr('flag') + '</span></p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">最大止损金额：</span>' + cur + '<span id="maxZS">' + $('#zyhtml').attr('flag') + '</span></p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">保证金：</span><span id="alertBZJ">' + $('#frozen').val() + '</span>元</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">购买的手数：</span> ' + $('#goodsnums').val() + '手</p>' +
          '<p class="am-margin-0 am-padding-bottom-sm"><span class="am-text-danger">总金额合计：</span><span id="alertTotal">' + $('#totalprice').html() + '</span>元</p>';
      }

      layer.confirm(ht, {
        title: '交易详情',
        btn: ['取消', '确定'] //按钮
      }, function () {
        //取消
        layer.closeAll()
      }, function () {
        //确定
//                if ("<?//=$model_type?>//" == 1) {
//                    window.location.href = "<?//=url(['order/position'])?>//";
//                } else {
//                    window.location.href = "<?//=url(['order/mockTrad'])?>//";
//                }

        $.ajax({
          type: "post",
          url: "/order/ajax-safe-order",
          data: {
            hand: nums,
            stop_profit_price: zy,
            stop_loss_price: zs,
            product_id: product_id,
            rise_fall: rise_fall,
            points: $("#points").val(),
            model_type: "<?=$model_type?>",
          },
          success: function (result) {
            if (result.state) {
              layer.alert(result.info);
              setTimeout(function () {
                if ("<?=$model_type?>" == 1) {
                  window.location.href = "<?=url(['order/position'])?>";
                } else {
                  window.location.href = "<?=url(['order/mockTrad'])?>";
                }
              }, 2000);
              //window.location.href = history.go(-1);
            } else {
              layer.alert(result.info);
            }
          }
        });

      });

      //alert('参数为'+nums+zy+zs +product_id+rise_fall);

    })


    $('#zs-price').on('click', function () {
      layer.open({
        type: 1,
        title: false,
        closeBtn: 0,
        shadeClose: true,
        skin: 'this-modal-wrap',
        content: $('#modal-1')
      });
    });

    $('#zy-price').on('click', function () {
        layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            shadeClose: true,
            skin: 'this-modal-wrap',
            content: $('#modal-2')
        });
    });


    // $('#zhisun_modal').on("click", ".zhisun_show", function () {
    //     $(".zhisun_show").removeClass("mui-active");
    //     $('#zshtml').html($(this).html());
    //     $('#zshtml').attr('flag', $(this).attr('flag'));
    //     $(this).addClass("mui-active");
    //
    //     var curZy = $(".zhiying_show").eq($(this).index());
    //     $('#zyhtml').html(curZy.html());
    //     $('#zyhtml').attr('flag', curZy.attr('flag'));
    // })

    $('#zhisun_modal').on("click", ".zhisun_show", function () {
      $(".zhisun_show").removeClass("mui-active");
      $('#zshtml').html($(this).html());
      $('#zshtml').attr('flag', $(this).attr('flag'));
      $(this).addClass("mui-active");
      tempNums.zsprice = $('#zshtml').html();

      var curZy = $(".zhiying_show").eq($('#zhisun_modal .zhisun_show').index(this));
      $('#zyhtml').html(curZy.html());
      $('#zyhtml').attr('flag', curZy.attr('flag'));

    })

    $('#zhiying_modal').on("click", ".zhiying_show", function () {
        $(".zhiying_show").removeClass("mui-active");
        $('#zyhtml').html($(this).html());
        $('#zyhtml').attr('flag', $(this).attr('flag'));
        $(this).addClass("mui-active");
    })
  });
</script>
<script type="text/javascript">
  function loadRealTimePrice() {
    $.ajax({
      url: '/site/ajax-all-product',
      type: 'post',
      dataType: "json",
      data: {},
      success: function (result) {
        if (result) {
          var currentType = "<?= $productInfo->table_name ?>" + ''.toLowerCase();
          if (nowType == 1) {
            $('#lastprice').val(result.info[currentType].sp);
          } else {
            $('#lastprice').val(result.info[currentType].bp);
          }
          reCountFn();
        }
      }
    });
  }

  setInterval(function () {
    loadRealTimePrice();
  }, 1000);

  function reCountFn() {
    if (tempNums.deposit) {
      var zs = parseFloat(tempNums.zsprice);
      var hand = parseInt(tempNums.hand);
      var deposit = parseFloat(tempNums.deposit);
      var result = deposit * hand + Math.abs(zs);
      var hl_after = result * parseFloat($('#currency').val());
      var str = hl_after.toFixed(2) + '(' + cur + result.toFixed(2) + ')';
//            var str2 = result.toFixed(2) + "(人民币：" + hl_after.toFixed(2) + ")";
      var str2 = result.toFixed(2);
      str2 = (tempNums.curWay != 1) ? (result.toFixed(2) * $('#currency').val()).toFixed(2) : str2;
      $('#baozhengjin').html(str);
      $('#alertBZJ').html(str2);
      $('#zsZF').html(deposit + '(人民币：' + ($('#currency').val() * deposit).toFixed(2) + ')');
      $('#maxZS').html((str2 / $('#currency').val()).toFixed(2) + '(人民币：' + str2 + ')');
      //$('#maxZS').html(Math.abs(zs) + deposit + '(人民币：' + ($('#currency').val() * (Math.abs(zs) + deposit)).toFixed(2) + ')');
      var total = parseFloat($('#charge').val()) + hl_after;
      $('#alertTotal').html(total.toFixed(2));
      $('#totalprice').html(total.toFixed(2));
    }
  }
</script>
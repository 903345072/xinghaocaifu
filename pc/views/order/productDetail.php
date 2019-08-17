<style>
  .layui-layer {
    top: 130px !important;
  }

  .singleLine {
    white-space: nowrap;
    word-break: keep-all
  }

  .text-scroll > a {
    margin-right: 10px;
    line-height: 25px;
  }

  .text-scroll > a {
    display: inline-block;
    vertical-align: middle;
    line-height: 1;
    font-size: 17px;
  }

  .text-scroll-box {
    overflow: hidden;
    position: relative;
    vertical-align: middle;
    height: 25px;
    white-space: nowrap
  }

  .text-scroll-con {
    position: absolute;
  }
</style>
<div class="box am-padding-vertical-xs">

  <ol class="am-breadcrumb am-margin-0 bg-fa">
    <li><a href="/">首页</a></li>
    <li class="am-active">交易</li>
  </ol>

  <div class="am-padding-sm">
    <div class="am-g">
      <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 am-padding-0">
        <p class="am-text-danger">最新公告：</p>
      </div>
      <div class="am-u-sm-11 am-u-md-11 am-u-lg-11 singleLine" style="overflow: hidden;">
        <div class="text-scroll-box">
          <div class="text-scroll-con">
            <a href="<?= url(['user/userannounce']) ?>" class="text-333">欢迎贵宾莅临星浩财富：&nbsp; &nbsp;&nbsp;尊敬的贵宾：您好！今晚20:30将公布美国非农数据，届时行情走势波动会较为剧烈，为降低用户持仓风险，美原油/美黄金/美白银履约保证金于20:00-21:00期间将会提高(去除前两档)。非农数据公布时行情波动剧烈，利润空间较大，技术面分析影响较小，行情受非农数据影响较大，预测正确盈利可观，因此本月非农数据不容错过。&nbsp;
              兵马未动，粮草先行。&nbsp;『喜讯-入金赠金』：为感谢广大用户长期以来对星浩财富的支持和信赖：凡是采用公司入款【银行转账、支付宝转银行卡、微信转银行卡】入金的贵宾，即可尊享该笔入金1%的返利。注（赠送的返利金系统自动存入用户积分中-积分可抵用交易手续费）。</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(function () {
        scrolltext();
      })

      var n = 0;

      var scrolltext = function () {
        n--;
        var scrollwidth = $(".text-scroll-con>a").width() + 200;
        if (n < -scrollwidth) {
          n = 0;
        }
        $(".text-scroll-con").css("left", n + "px");
        setTimeout("scrolltext()", 30);
      }
    </script>

  </div>


  <div class="bt-1 am-padding-sm bg-fa">

    <div class="am-padding-sm bg-ed">

      <div class="bg-white">
        <div class="bb-1 br-1">
          <div class="am-g switchTab" onclick="getDataFn()">
            <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
              <p class="am-text-danger"><?= $products->name ?> <?= $products->identify ?></p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP am-text-success">分时</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP">日分时</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP">日K线</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP">1分钟</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP">5分钟</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1">
              <p class="cursP">30分钟</p>
            </div>
            <div class="am-u-sm-1 am-u-md-1 am-u-lg-1 br-1">
              <p class="cursP">盘口</p>
            </div>
            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
              <!--                            <p class="am-text-danger am-text-center">标题标题标题标题</p>-->
            </div>
          </div>
        </div>

        <div class="bb-1">
          <div class="am-g">
            <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 br-1">
              <div id="switchPages">

                <div class="pageOne">
                  <div id="page1" style="height: 400px;"></div>
                </div>

                <div class="pageOne">
                  <div id="page2" style="height: 400px;"></div>
                </div>

                <div class="pageOne">
                  <div id="page3" style="height: 400px;"></div>
                </div>

                <div class="pageOne">
                  <div id="page4" style="height: 400px;"></div>
                </div>

                <div class="pageOne">
                  <div id="page5" style="height: 400px;"></div>
                </div>

                <div class="pageOne">
                  <div id="page6" style="height: 400px;"></div>
                </div>

                <div class="pageOne" style="height: 400px;">
                  <div class="am-g am-padding-top-sm">
                    <div class="am-u-sm-6 am-u-lg-6 am-u-md-6 am-padding-right-0 br-1">

                      <p class="am-padding-sm">
                        <span>涨跌</span>
                        <span class="am-align-right am-margin-0 am-text-danger" id="textZD">-0.41</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>最高</span>
                        <span class="am-align-right am-margin-0 am-text-danger" id="textHigh">68.300000</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>开盘</span>
                        <span class="am-align-right am-margin-0 am-text-danger" id="textOpen">68.300000</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>持仓</span>
                        <span class="am-align-right am-margin-0 am-text-danger"
                              id="textHold">1</span>
                      </p>

                      <p class="am-padding-sm bt-1 bb-1">
                        <span>总手</span>
                        <span class="am-align-right am-margin-0 am-text-danger" id="textHand">51123</span>
                      </p>

                    </div>
                    <div class="am-u-sm-6 am-u-lg-6 am-u-md-6 am-padding-left-0">

                      <p class="am-padding-sm">
                        <span>涨幅</span>
                        <span class="am-align-right am-margin-0 am-text-danger" id="textZF">-0.41%</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>最低</span>
                        <span class="am-align-right am-margin-0 am-text-success" id="textLow">68.300000</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>昨收</span>
                        <span class="am-align-right am-margin-0" id="textYR">68.300000</span>
                      </p>

                      <p class="am-padding-sm bt-1">
                        <span>昨结</span>
                        <span class="am-align-right am-margin-0" id="textYE">1</span>
                      </p>

                      <p class="am-padding-sm bt-1 bb-1">
                        <span>金额</span>
                        <span class="am-align-right am-margin-0" id="textMoney">51123</span>
                      </p>

                    </div>
                  </div>
                </div>

              </div>


              <div>
                <div class="bb-1 bt-1 am-padding-vertical-xs">
                  <p class="am-btn am-btn-xs am-radius am-btn-warning" id="abroad">国际期货</p>
                  <p class="am-btn am-btn-xs am-radius am-btn-default" id="domestic">国内期货</p>
                </div>
              </div>

              <div class="am-padding-vertical-xs am-text-sm" id="CateMenu">
                <div class="am-g domestic" style="display:none;">
                    <?php foreach ($domestic as $k): ?>
                      <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-bottom-xs itemOne"
                           data-symbol="<?= $k->dataAll->symbol ?>">
                        <p class="cursP">
                          <a class="jumpText"
                             href="<?= url([$modelurl, 'id' => $k->id]) ?>"><?= $k->name ?><?= $k->identify ?></a>
                          <span class="am-badge am-badge-danger am-radius"></span>
                        </p>
                      </div>
                    <?php endforeach ?>
                </div>
                <div class="am-g abroad">
                    <?php foreach ($abroad as $k): ?>
                      <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-bottom-xs itemOne"
                           data-symbol="<?= $k->dataAll->symbol ?>" style="padding: 3px 0px; margin-left: 15px;">
                        <p class="cursP">
                          <a class="jumpText"
                             href="<?= url([$modelurl, 'id' => $k->id]) ?>"><?= $k->name ?><?= $k->identify ?></a>
                          <span class="am-badge am-badge-danger am-radius"></span>
                        </p>
                      </div>
                    <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-horizontal-xs">
              <div class="bb-1 am-padding-vertical-xs am-btn-group am-btn-group-justify">
                <p class="am-btn am-btn-default am-btn-danger" id="deal" style='width: 50%;float:left;'>
                  持仓</p>
                <p class="am-btn am-btn-default" id="asettlement" style='width: 50%;float:left;'>结算</p>
              </div>
              <div class="scrollAble deal" style="height: 456px;">
                <div>
                    <?php foreach ($order_position as $v): ?>
                      <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 singleLine holeOne"
                           data-oid="<?= $v->id ?>">
                        <p class="am-padding-vertical-xs am-text-sm"><?= $v->product->name ?>
                          (<?= $v->product->identify ?>)
                          <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                        </p>

                        <div>
                          <div class="bt-1 am-padding-horizontal-sm">
                            <div class="am-g am-padding-top-xs am-text-xs">
                              <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0">
                                  <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                                    <p class="am-text-danger">买涨<?= $v->hand ?>手</p>
                                  <?php else: ?>
                                    <p class="am-text-success">买跌<?= $v->hand ?>手</p>
                                  <?php endif ?>

                                <p>止盈
                                  +<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                                            ($v->one_profit * $v->stop_profit_point) / getExchangeRate($v->currency)); ?>
                                  元</p>
                                <p>止损
                                  -<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                                            ($v->one_profit * $v->stop_loss_point) / getExchangeRate($v->currency)); ?>
                                  元</p>
                              </div>
                              <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-horizontal-xs am-text-right">
                                  <?php if ($v->profit >= 0): ?>
                                    <p class="am-text-danger profit_<?= $v->id ?>"><?= $v->profit ?>
                                      元</p>
                                  <?php else: ?>
                                    <p class="am-text-success profit_<?= $v->id ?>"><?= $v->profit ?>
                                      元</p>
                                  <?php endif ?>

                                <p>买入 <?= $v->price ?></p>
                                <p>当前 <span class="nowprice"></span></p>
                              </div>
                            </div>
                          </div>

                          <p class="am-text-xs am-padding-top-xs">
                            <span class="inb am-padding-top-xs">成交时间：<?= $v->created_at ?></span>
                            <span class="am-btn am-btn-danger am-btn-xs am-align-right am-margin-0 am-radius sellOneBtn"
                                  flag="<?= $v->id ?>">平仓
                                                </span>
                          </p>
                        </div>

                      </div>
                    <?php endforeach ?>
                </div>
                <!--                            <div class="scrollAble" style="height: 456px;">-->
                <!--                                <div class="am-padding-top-xl">-->
                <!--                                    <div class="am-text-center am-padding-top-xl">-->
                <!--                                        <i class="am-icon am-icon-exclamation-circle am-icon-sm"></i><br>-->
                <!--                                        <p>暂无</p>-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!--                            </div>-->
              </div>

              <div class="scrollAble asettlement" style="height: 456px;display:none;">

                <div>
                    <?php foreach ($order_throw as $v): ?>
                      <div class="am-padding-horizontal-sm bg-white bt-1 bb-1 singleLine">
                        <p class="am-padding-vertical-xs am-text-sm"><?= $v->product->name ?>
                          (<?= $v->product->identify ?>)
                          <span class="am-align-right am-margin-0">单号：JY1000<?= $v->id ?></span>
                        </p>

                        <div>
                          <div class="bt-1 am-padding-horizontal-sm">
                            <div class="am-g am-padding-top-xs am-text-xs">
                              <div
                                class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-0">
                                  <?php if ($v->rise_fall == \frontend\models\Order::RISE): ?>
                                    <p class="am-text-danger">买涨<?= $v->hand ?>手</p>
                                  <?php else: ?>
                                    <p class="am-text-success">买跌<?= $v->hand ?>手</p>
                                  <?php endif ?>

                                <p>止盈
                                  +<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                                            ($v->one_profit * $v->stop_profit_point) / getExchangeRate($v->currency)); ?>
                                  元</p>
                                <p>止损
                                  -<?php echo getCurrencySymbol($v->currency) . sprintf('%.2f',
                                            ($v->one_profit * $v->stop_loss_point) / getExchangeRate($v->currency)); ?>
                                  元</p>
                              </div>
                              <div
                                class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-horizontal-xs am-text-right">
                                  <?php if ($v->profit >= 0): ?>
                                    <p class="am-text-danger"><?= $v->profit ?>元</p>
                                  <?php else: ?>
                                    <p class="am-text-success"><?= $v->profit ?>元</p>
                                  <?php endif ?>

                                <p>买入 <?= $v->price ?></p>
                                <p>卖出 <?= $v->sell_price ?></p>
                              </div>

                            </div>
                          </div>

                          <p class="am-text-xs am-padding-top-xs">
                            <span class="inb am-padding-top-xs">结算时间：<?= $v->updated_at ?></span>
                            <span class="am-btn am-btn-danger am-btn-xs am-radius am-align-right am-margin-0"
                                  style="background-color: gray;border: 1px solid gray;">结算成功
                                                    </span>
                          </p>
                        </div>

                      </div>
                    <?php endforeach ?>
                </div>

              </div>
            </div>
          </div>
        </div>

        <script>
          $(function () {
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
              $('#deal').addClass('am-btn-danger');
              $('#asettlement').removeClass('am-btn-danger');
              $('.deal').show();
              $('.asettlement').hide();
            });
            $('#asettlement').click(function () {
              $('#deal').removeClass('am-btn-danger');
              $('#asettlement').addClass('am-btn-danger');
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
            $.post("<?= url('order/ajaxUpdateOrder')?>", {}, function (msg) {
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
                  $("#position_" + key_).css("display", "none");
                }

              }
            }, 'json');
          }

        </script>

        <div class="am-padding-vertical-xs bb-1">
          <div class="am-g">
            <div class="am-u-sm-5 am-u-md-5 am-u-lg-5">
                <?php if ($model_type == 1) { ?>
                  <p class="">
                    <span class="text-999">帐户实盘资金：</span>
                    <span><?= u()->account - u()->blocked_account ?></span>

                    <a href="<?= url(['user/usercharge']) ?>" style="color:red;">充值</a>
                  </p>
                <?php } else { ?>
                  <p class="">
                    <span class="text-999">模拟帐户资金：</span>
                    <span><?= u()->moni_acount - u()->blocked_moni ?></span>

                    <a href="<?= url(['user/usercharge']) ?>" style="color:red;">充值</a>
                  </p>
                <?php } ?>
            </div>
            <div class="am-u-sm-4 am-u-md-4 am-u-lg-4 br-1">
              <p class="tm-text-right">当前浮动盈亏 0</p>
            </div>
            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-text-center am-text-sm">
              <p>本时段持仓时间至 <span class="am-text-danger text-B"><?= $products->tradeTime ?></span></p>
            </div>
          </div>
        </div>

        <div class="am-padding-vertical-xs">
          <div class="am-g bb-1">
            <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 br-1">

              <div>
                <div class="am-g">
                  <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-top-sm">
                    <p class="am-text-danger">
                      <span class="am-text-xl" id="price3"><?= $products->dataAll->price ?></span>
                      <span class="am-text-sm am-margin-horizontal-lg"
                            id="price4"><?= $products->dataAll->diff ?></span>
                      <span class="am-text-sm"
                            id="price5"><?= $products->dataAll->diff_rate ?></span>
                    </p>
                  </div>

                  <div class="am-u-sm-5 am-u-md-5 am-u-lg-5">

                    <div class="am-g">
                      <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-right-0">
                        <p>买量 <span id="buyBarText" class="am-text-danger">40</span></p>
                      </div>
                      <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-top-xs">
                        <div class="am-progress am-margin-0 am-progress-sm">
                          <div class="am-progress-bar am-progress-bar-danger"
                               style="width: 40%" id="buyBar">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-right-0">
                        <p>卖量 <span id="sellBarText" class="am-text-success">33</span></p>
                      </div>
                      <div class="am-u-sm-9 am-u-md-9 am-u-lg-9 am-padding-top-xs">
                        <div class="am-progress am-margin-0 am-progress-sm">
                          <div class="am-progress-bar am-progress-bar-success"
                               style="width: 33%" id="sellBar">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="am-u-sm-2 am-u-md-2 am-u-lg-2">
                    <p class="am-padding-top-sm am-text-center"
                       style="color:red;"><?= $products->name ?> <?= $products->identify ?></p>
                  </div>
                </div>
              </div>

              <div>
                <div class="am-g">
                  <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm">
                    <p onclick="buy(1)"
                       class="am-btn am-btn-danger am-radius am-btn-block am-btn-lg">
                      <span id="price1"><?= $products->dataAll->price ?></span> <br>
                      买涨
                    </p>
                  </div>
                  <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm"
                       style="margin-left: -20px;">
                    <p onclick="buy(2)"
                       class="am-btn am-btn-success am-radius am-btn-block am-btn-lg">
                      <span id="price2"><?= $products->dataAll->price ?></span> <br>
                      买跌
                    </p>
                  </div>
                  <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-padding-top-sm"
                       style="margin-left: -20px;">
                    <p id="sellAllBtn"
                       class="am-btn am-btn-warning am-radius am-btn-block am-btn-lg">
                      全部<br>
                      平仓
                    </p>
                  </div>
                  <div class="am-u-lg-3 am-u-sm-3 am-u-md-3 am-text-sm" style="float:left;">

                    <div class="am-g am-padding-bottom-xs">
                      <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                        <p class="am-text-danger">购买手数</p>
                      </div>
                      <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                        <select name="" id="a1" class="am-block wid100 am-alert-secondary"
                                style="background-color: #00a0e9;color:white;width: 140%;">
                          <!-- <option class="changehand" value="">请选择</option>-->
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
                      </div>
                    </div>

                    <div class="am-g am-padding-bottom-xs">
                      <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                        <p class="am-text-danger">触发止损金额</p>
                      </div>
                      <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                        <select name="" id="a2" class="am-block wid100 am-alert-secondary"
                                style="background-color: #00a0e9;color:white;width: 140%;">
                        </select>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-0">
                        <p class="am-text-danger">触发止盈金额</p>
                      </div>
                      <div class="am-u-sm-7 am-u-md-7 am-u-lg-7 am-padding-left-0">
                        <select name="" id="a3" class="am-block wid100 am-alert-secondary"
                                style="background-color: #00a0e9;color:white;width: 140%;"
                                disabled>
                        </select>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
            <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-text-xs">

              <div class="am-g bb-1 am-padding-bottom-xs">
                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                  <p class="am-text-danger text-B">汇率</p>
                </div>
                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
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
                </div>
              </div>

              <div class="am-g am-padding-vertical-xs bb-1">
                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                  <p class="am-text-danger text-B">交易手续费</p>
                </div>
                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                  <span style="float: left">￥</span>
                  <p id="charge">0</p>
                  <p id="charge1" style="display:none;">0</p>
                </div>
              </div>

              <div class="am-g bb-1 am-padding-vertical-xs">
                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                  <p class="am-text-danger text-B">保证金冻结</p>
                </div>
                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                  <span style="float: left">￥</span>
                  <p id="frozen">0</p>
                  <p id="frozen1" style="display:none;">0</p>
                </div>
              </div>

              <div class="am-g am-padding-top-xs">
                <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-padding-right-0">
                  <p class="am-text-danger text-B">合计</p>
                </div>
                <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                  <p id="total">0</p>
                </div>
              </div>


            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script>
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
          cur = 'HK$';
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
        $('#maxZS').html(Math.abs(zs) + deposit + '(人民币：' + ($('#currency').val() * (Math.abs(zs) + deposit)).toFixed(2) + ')');
        var total = parseFloat($('#charge1').html()) + hl_after;
        $('#alertTotal').html(total.toFixed(2));
        $('#total').html(total.toFixed(2) + '元');
        $('#totalprice').html(total.toFixed(2));
      }
    }
  </script>

</div>

<script>
  var dataO = '';
  var data60 = '';
  var curTab = 1;
  var symbol = '<?=$products->dataAll->symbol ?>';
  var account = '1q2w3e4r5t6y7u8i';
  var goin3 = true;

  var typeArr = [
    {name: '美原油07', symbol: 'NECLN0'},
    {name: '美黄金08', symbol: 'CMGCQ0'},
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
      var index = $(this).index() - 1;
      curTab = $(this).index();
      tabs.find('p').removeClass('am-text-success');
      tabs.eq(index).find('p').addClass('am-text-success');
      pageOne.hide();
      pageOne.eq(index).show();
    });
  }()
</script>
<script type="text/javascript" src="/pc/js/layer.js"></script>
<script type="text/javascript">

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
        _this.find('.jumpText').addClass('am-text-warning');
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
            window.location.reload();
          }
        }
        setTimeout(function () {
          checkHold();
        }, 2000)
      }
    });

  }

  checkHold();

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
    $.ajax({
      url: "<?=WEB_STOCKET_URL?>"+"&line=min,1&num=400&sort=Date%20desc&symbol=" + symbol,
      async: true,dataType:'json',
      success: function (ret) {
        dataO = dealNum(ret);
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
      url: "<?=WEB_STOCKET_URL2?>" + symbol,
      async: true,dataType:'json',
      success: function (res) {
        var ret = res[0];
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

  setInterval(function () {
    getPriceFn();
    updateOrder();
  }, 1000);

  setInterval(function () {
    getDataFn();
  }, 60000);

  getDay();
  getDataFn();

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

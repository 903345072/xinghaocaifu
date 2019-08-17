<div class="index_banner">
  <div id="slideBox" class="slideBox">
    <div class="hd">
      <ul>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <li>
          <a href="javascript:;" target="_blank">
            <img src="/web/images/banner.jpg"/>
          </a>
          <div class="infor">
            <h3>全球期货 一站式交易</h3>
            <p>覆盖全球各大交易所品种</p>
              <?php if (user()->isGuest) : ?>
                <a href="<?= url(['site/register']) ?>" class="zhuce">立即注册</a>
              <?php endif ?>
          </div>
        </li>
        <li>
          <a href="javascript:;" target="_blank">
            <img src="/web/images/banner.jpg"/>
          </a>
          <div class="infor">
            <h3>全球期货 一站式交易</h3>
            <p>覆盖全球各大交易所品种</p>
              <?php if (user()->isGuest) : ?>
                <a href="<?= url(['site/register']) ?>" class="zhuce">立即注册</a>
              <?php endif ?>
          </div>
        </li>
        <li>
          <a href="javascript:;" target="_blank">
            <img src="/web/images/banner.jpg"/>
          </a>
          <div class="infor">
            <h3>全球期货 一站式交易</h3>
            <p>覆盖全球各大交易所品种</p>
              <?php if (user()->isGuest) : ?>
                <a href="<?= url(['site/register']) ?>" class="zhuce">立即注册</a>
              <?php endif ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- 通告 -->
<div class="scroll">
  <div class="tonggao">
    <div class="clearfix">
      <img src="/web/images/tips.png " class="fl" alt="">
      <a href="<?= url(['user/notice-info', 'notice_id'=>$article->id]) ?>" class="fl">最新公告：<?= $article->title ?></a>
      <a href="<?= url(['user/notice-list']) ?>" class="more fr">更多公告>></a>
      <p class="date fr">2017-12-02</p>
    </div>
  </div>
</div>
<!-- 我们的优势 -->
<div class="section1">
  <h3 class="commom_title">我们的优势</h3>
  <img src="/web/images/line.png" alt="" class="title_icon">
  <ul class="clearfix ad_list">
    <li>
      <i class="icon1"></i>
      <p>急速存取</p>
    </li>
    <li>
      <i class="icon2"></i>
      <p>权威认证</p>
    </li>
    <li>
      <i class="icon3"></i>
      <p>贴心服务</p>
    </li>
    <li>
      <i class="icon4"></i>
      <p>超低成本</p>
    </li>
    <li>
      <i class="icon5"></i>
      <p>安全保障</p>
    </li>
    <li>
      <i class="icon6"></i>
      <p>终身奖赏</p>
    </li>
  </ul>
</div>
<div class="section2">
  <h3 class="commom_title">期货推荐</h3>
  <p class="small">100%交易所实盘交易</p>
  <img src="/web/images/line01.png" alt="" class="title_icon">
  <div class="shuoming wrap">
    <!--<a href="">细则说明></a>-->
  </div>
  <div class="wrap clearfix mb40">
    <div class="fl l">
      <h3>国际期货</h3>
      <p>火爆产品获利丰盛</p>
    </div>
    <div class="fl r">
      <div class="r_t r_t-1 clearfix" id="switchTab2">
          <?php foreach ($volumeProduct as $k): ?>
            <span class="domestic am-btn" flag="<?= $k->dataAll->symbol ?>">
                <?= $k->name ?>
            </span>
          <?php endforeach ?>
      </div>
      <div class="qiehuan1" id="switchPages2">
        <div class="tab_list" style="margin-bottom: 0;">
          <div id="page2" style="height: 234px;"></div>
        </div>
          <?php foreach ($volumeProduct as $k): ?>
            <div class="r_b clearfix pageOne" style="display: none">
              <img src="/web/images/jiang.jpg" alt="" class="fl imgChange2">
              <span class="fl number colorChange2 current_price">00.00</span>
              <span class="small_number fl colorChange2 showPrice1">00.00</span>
              <div class="fl cen">
                <span class="name"><?= $k->name ?>/<?= $k->identify ?></span>
                <span class="shijian"></span>
              </div>
              <div class="fr buy">
                  <?php if ($k->isTrade == 1): ?>
                    <a href="javascript:;">交易中</a>
                  <?php else: ?>
                    <a href="javascript:;" style="background-color: grey">休市中</a>
                  <?php endif; ?>
                <a href="<?= url(['order/buy', 'id' => $k->id]) ?>" class="wy_jy">我要交易</a>
              </div>
            </div>
          <?php endforeach ?>
      </div>
    </div>
  </div>
<!--  <div class="wrap clearfix mb40">-->
<!--    <div class="fl l">-->
<!--      <h3>国内期货</h3>-->
<!--      <p>火爆产品获利丰盛</p>-->
<!--    </div>-->
<!--    <div class="fl r">-->
<!--      <div class="r_t r_t-2 clearfix" id="switchTab1">-->
<!--          --><?php //foreach ($cashProduct as $k): ?>
<!--            <span class="abroad am-btn" flag="--><?//= $k->dataAll->symbol ?><!--">-->
<!--                --><?//= $k->name ?>
<!--            </span>-->
<!--          --><?php //endforeach ?>
<!--      </div>-->
<!--      <div class="qiehuan1" id="switchPages">-->
<!--        <div class="tab_list" style="margin-bottom: 0;">-->
<!--          <div id="page1" style="height: 234px;"></div>-->
<!--        </div>-->
<!--          --><?php //foreach ($cashProduct as $k): ?>
<!--            <div class="r_b clearfix pageOne" style="display: none;">-->
<!--              <img src="/web/images/jiang.jpg" alt="" class="fl imgChange1">-->
<!--              <span class="fl number colorChange1 current_price_up">00.00</span>-->
<!--              <span class="small_number colorChange1 fl showPrice1_up">00.00</span>-->
<!--              <div class="fl cen">-->
<!--                <span class="name">--><?//= $k->name ?><!--/--><?//= $k->identify ?><!--</span>-->
<!--                <span class="shijian"></span>-->
<!--              </div>-->
<!--              <div class="fr buy">-->
<!--                  --><?php //if ($k->isTrade == 1): ?>
<!--                    <a href="#">交易中</a>-->
<!--                  --><?php //else: ?>
<!--                    <a href="#" style="background-color: grey">休市中</a>-->
<!--                  --><?php //endif; ?>
<!--                <a href="--><?//= url(['order/buy', 'id' => $k->id]) ?><!--" class="wy_jy">我要交易</a>-->
<!--              </div>-->
<!--            </div>-->
<!--          --><?php //endforeach ?>
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
</div>
<div class="section3">
  <h3 class="commom_title">专业期货交易平台</h3>
  <img src="/web/images/line.png" alt="" class="title_icon">
  <div class="section3_wrap clearfix">
    <img src="/web/images/tv.png" alt="" class="fl">
    <div class="fl sction3_r">
      <h3>扫一扫下载APP 随时随地交易</h3>
      <div class="clearfix erweima">
        <div class="fl ios">
          <img src="/web/images/erweima.jpg" alt="">
          <p>苹果版</p>
        </div>
        <div class="fl">
          <img src="/web/images/erweima.jpg" alt="">
          <p>安卓版</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section4">
  <div class="section4_wrap">
    <ul>
      <li>
        <div class="fl clearfix zuo">
          <span class="mc fr">模拟操盘</span>
          <p class="desc fl">模拟交易所实盘交易，降低操作风险</p>
        </div>
        <img class="fl" src="/web/images/icon1.png" alt="">
      </li>
      <li>
        <div class="fl clearfix zuo">
          <span class="mc fr">推广赚钱</span>
          <p class="desc fl">独乐了不如众乐乐，发链接给朋友一起赚钱</p>
        </div>
        <img class="fl" src="/web/images/icon2.png" alt="">
      </li>
      <li>
        <div class="fl clearfix zuo">
          <span class="mc fr">风险提示</span>
          <p class="desc fl">投资有风险，入市需谨慎</p>
        </div>
        <img class="fl" src="/web/images/icon3.png" alt="">
      </li>
    </ul>
  </div>
</div>
<div class="wrap clearfix new_con">
  <div class="fl discover">
    <h3 class="tit">
      <span class="china">发现/</span>
      <span class="eng">DISCOVERY</span>
    </h3>
    <div class="content">
      <ul>
        <li>
          <i class="fl cover_icon1"></i>
          <div class="fl infors">
            <h3>推广赚钱</h3>
            <p>独乐乐不如众乐乐</p>
          </div>
          <a href="<?= url(['user/promotion']) ?>" class="fr btn">分享</a>
        </li>
        <li>
          <i class="fl cover_icon2"></i>
          <div class="fl infors">
            <h3>任务中心</h3>
            <p>完成任务，丰富生活</p>
          </div>
          <a href="<?= url(['user/points']) ?>" class="fr btn">进入</a>
        </li>
        <li>
          <i class="fl cover_icon3"></i>
          <div class="fl infors">
            <h3>国际期货直播间</h3>
            <p>针对国内投资者开发的首家期货类直播平台</p>
          </div>
          <a href="<?= url(['line/index']) ?>" class="fr btn">进入</a>
        </li>
        <li>
          <i class="fl cover_icon4"></i>
          <div class="fl infors">
            <h3>信息中心</h3>
            <p>快来查看新消息</p>
          </div>
          <a href="<?= url(['user/messages']) ?>" class="fr btn">进入</a>
        </li>
        <li>
          <i class="fl cover_icon5"></i>
          <div class="fl infors">
            <h3>积分商城</h3>
            <p>使用积分兑换商品</p>
          </div>
          <a href="<?= url(['user/points']) ?>" class="fr btn">进入</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="fr information">
    <h3 class="tit clearfix">
      <span class="china">资讯/</span>
      <span class="eng">INFORMATION</span>
      <a href="<?= url(['user/latestNews']) ?>" class="gengduo fr">更多></a>
    </h3>
    <div class="ov">
      <iframe src="http://130161.com/Home/index/news/device/app.html" frameborder="0" scrolling="auto"
              style="width: 100%; height: 607px;" id="framid"></iframe>
      <!--<div class="infor_content">
        <div class="box">
          <img src="/web/images/h.png" alt="" class="df">
          <ul>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
            <li>
              <p class="news_date">2018年5月9日 20:25

              </p>
              <p class="newss">据华尔街日报援引知情人士：美国总统特朗普预计将在周三的会议上告诉资深议员：如果 农田法案没有对领取食品券的人.</p>
            </li>
          </ul>
        </div>
      </div>-->
    </div>
  </div>
</div>
<a target="_blank" href="http://chat.livechatvalue.com/chat/chatClient/chatbox.jsp?jid=8827179158&companyID=1013221&configID=71501&codeType=custom">
  <div class="online">
    在线<br/>客服
  </div>
</a>
<!--<div style='display:none;'><a href='http://www.live800.com'>在线营销</a></div><script language="javascript" src="http://chat.livechatvalue.com/chat/chatClient/floatButton.js?jid=8827179158&companyID=1013221&configID=71213&codeType=custom"></script><div style='display:none;'><a href='http://en.live800.com'>live chat</a></div>-->
</body>
<script type="text/javascript" src="/js/echarts-all-3-order.js"></script>
<script type="text/javascript" src="/web/js/js.js"></script>
<script>
  jQuery(".slideBox").slide({mainCell: ".bd ul", autoPlay: true, effect: "left"});
</script>
<script type="text/javascript">
  var dataO = {};
  var dataO1 = {};
  var account = '1q2w3e4r5t6y7u8i';

  $(function () {
    $('.abroad').eq(0).addClass('curBtn1 on');
    $('.domestic').eq(0).addClass('curBtn2 on');

    jQuery(".slideBox").slide({
      mainCell: ".bd ul",
      effect: "left",
      duration: 10,
      autoPlay: true
    });
    getDataFn();
    getDataFn2();
  })

  function getDataFn(nowid) {
    if (!nowid) {
      nowid = $('.curBtn1').attr('flag');
    }
    $.ajax({
      url: "<?=WEB_STOCKET_URL?>"+"&line=day&num=91&sort=Date%20desc&symbol=" + nowid,
      async: true,dataType:'json',
      success: function (ret) {
        // console.log(ret);
        var page1 = echarts.init(document.getElementById('page1'));

        dealNum(ret, 1);

        var option1 = {
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
            data: dataO.showday,
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
            start: 40,
            end: 100
          }],
          series: [{
            name: 'K线',
            type: 'candlestick',
            data: dataO.showdata,
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
              data: calculateMA(5, dataO.showdata),
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
              data: calculateMA(10, dataO.showdata),
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
              data: calculateMA(20, dataO.showdata),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#e9837e'
                }
              }
            }]
        };

        page1.clear();
        setTimeout(function () {
          page1.setOption(option1);
        }, 100);

      }
    });
  }

  function getDataFn2(nowid) {
    if (!nowid) {
      nowid = $('.curBtn2').attr('flag');
    }
    $.ajax({
      url: "<?=WEB_STOCKET_URL?>"+"&line=day&num=91&sort=Date%20desc&symbol=" + nowid,
      async: true,dataType:'json',
      success: function (ret) {
        // console.log(ret);
        var page2 = echarts.init(document.getElementById('page2'));

        dealNum(ret, 2);

        var option2 = {
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
            data: dataO1.showday,
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
            start: 40,
            end: 100
          }],
          series: [{
            name: 'K线',
            type: 'candlestick',
            data: dataO1.showdata,
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
              data: calculateMA(5, dataO1.showdata),
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
              data: calculateMA(10, dataO1.showdata),
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
              data: calculateMA(20, dataO1.showdata),
              smooth: true,
              lineStyle: {
                normal: {
                  color: '#e9837e'
                }
              }
            }]
        };

        page2.clear();
        setTimeout(function () {
          page2.setOption(option2);
        }, 100);

      }
    });
  }

  function dealNum(d, type) {
    if (type == 1) {
      dataO = {};
    } else {
      dataO1 = {};
    }

    var showday = [];
    var showdata = [];

    for (var i = d.length - 1; i >= 0; i--) {
      var date = new Date();
      date.setTime(d[i].Date * 1000);
      showday.push(date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate());
      showdata.push([d[i].Open, d[i].Close, d[i].Low, d[i].High]);
    }

    if (type == 1) {
      dataO.showday = showday;
      dataO.showdata = showdata;
    } else {
      dataO1.showday = showday;
      dataO1.showdata = showdata;
    }
  }

  function calculateMA(dayCount, arr) {
    var result = [];
    for (var i = 0, len = arr.length; i < len; i++) {
      if (i < dayCount) {
        result.push('-');
        continue;
      }
      var sum = 0;
      for (var j = 0; j < dayCount; j++) {
        sum += arr[i - j][1];
      }
      result.push(sum / dayCount);
    }
    return result;
  }

</script>
<script>
  !function () {
    var tabs = $('#switchTab1 .am-btn');
    var pageOne = $('#switchPages .pageOne');
    pageOne.eq(0).show();
    tabs.on('click', function () {
      var index = $(this).index();
      tabs.removeClass('am-btn-danger');
      tabs.removeClass('curBtn1');
      tabs.eq(index).addClass('am-btn-danger');
      tabs.eq(index).addClass('curBtn1');
      pageOne.hide();
      pageOne.eq(index).show();
      getDataFn($('.curBtn1').attr('flag'));

    });

    var tabs2 = $('#switchTab2 .am-btn');
    var pageOne2 = $('#switchPages2 .pageOne');
    pageOne2.eq(0).show();
    tabs2.on('click', function () {
      var index = $(this).index();
      tabs2.removeClass('am-btn-secondary');
      tabs2.removeClass('curBtn2');
      tabs2.eq(index).addClass('curBtn2');
      tabs2.eq(index).addClass('am-btn-secondary');
      pageOne2.hide();
      pageOne2.eq(index).show();
      getDataFn2($('.curBtn2').attr('flag'));

    });

  }();

  function realTimeFlashFn() {
    var symbol1 = $('.curBtn1').attr('flag');
    var symbol2 = $('.curBtn2').attr('flag');

    $.ajax({
      url: "<?=WEB_STOCKET_URL2?>" + symbol2,
      async: true,dataType:'json',
      success: function (newData) {

        for (var i = 0, len = newData.length; i < len; i++) {
          var ZD = (newData[i].NewPrice - newData[i].LastClose);
          var curRate = (ZD / newData[i].LastClose * 100).toFixed(2) + '%';

          if (symbol1 == newData[i].Symbol) {

            $('.showPrice1_up').html(ZD.toFixed(2));
            $('.showPrice2_up').html(curRate);
            $('.current_price_up').html(newData[i].NewPrice);

            if (ZD > 0) {
              $('.imgChange1').attr('src', '/web/images/sheng.jpg');
              $('.colorChange1').addClass('red');
              $('.colorChange1').removeClass('green');
            } else {
              $('.imgChange1').attr('src', '/web/images/jiang.jpg');
              $('.colorChange1').removeClass('red');
              $('.colorChange1').addClass('green');
            }
          } else if (symbol2 == newData[i].Symbol) {

            $('.showPrice1').html(ZD.toFixed(2));
            $('.showPrice2').html(curRate);
            $('.current_price').html(newData[i].NewPrice);

            if (ZD > 0) {
              $('.imgChange2').attr('src', '/web/images/sheng.jpg');
              $('.colorChange2').addClass('red');
              $('.colorChange2').removeClass('green');
            } else {
              $('.imgChange2').attr('src', '/web/images/jiang.jpg');
              $('.colorChange2').removeClass('red');
              $('.colorChange2').addClass('green');
            }
          }

        }
      }
    });
  }

  setInterval(function () {
    realTimeFlashFn();
  }, 1000)
</script>


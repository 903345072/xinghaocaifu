<link rel="stylesheet" href="/css/amazeui.min.css">
<script type="text/javascript" src="/js/echarts-all-3.js"></script>
<style>
  body {
    background-color: #f3f4f5 !important;
  }

  .pages {
    display: none
  }

  p {
    margin: 0 !important;
  }

  .whiteBg .am-btn-default {
    background-color: white
  }

  .whiteBg .am-btn-default.actTab {
    border-bottom: 2px solid #0a628f
  }

  .bg-white {
    background-color: white;
  }

  .bt-1 {
    border-top: 1px solid #f3f4f5;
  }

  .fixBot {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 20;
  }

  .bg-333 {
    background-color: #333333
  }

  .col-white {
    color: white
  }
</style>

<div class="am-padding-sm am-alert-danger">
  <div class="am-g">
    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-left-xs">
      <a href="<?= url(['site/index']) ?>">
        <p class="am-icon am-icon-angle-left am-icon-sm col-white"></p>
      </a>
    </div>
    <div class="am-u-sm-8 am-u-md-8 am-u-lg-8 am-padding-0">
      <p class="am-text-center col-white am-text-xs">
          <?php if ($model_type == 1) : ?>
            实盘交易
          <?php else : ?>
            模拟盘交易
          <?php endif ?>
        <span class="am-text-lg">【<?= $products->name ?>】</span>
      </p>
    </div>
    <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-padding-0 am-text-right">
      <a href="<?= url(['rule/rule' . $products->id]) ?>">
        <p class="am-text-xs am-padding-top-xs col-white am-padding-right-xs">规则说明</p>
      </a>
    </div>
  </div>
</div>

<div id="tabBtns" class="am-btn-group am-btn-group-justify whiteBg" onclick="getData()">
  <span data-tab="1" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0 actTab">分时</span>
  <span data-tab="2" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">日分时</span>
  <span data-tab="3" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">日K线</span>
  <span data-tab="4" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">1分钟</span>
  <span data-tab="5" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">5分钟</span>
  <span data-tab="6" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">30分钟</span>
  <span data-tab="7" class="am-btn am-btn-default am-btn-xs am-padding-horizontal-0">盘口</span>
</div>

<div class="bg-white">
  <div id="page1" class="pages" style="display: block"></div>
  <div id="page2" class="pages"></div>
  <div id="page3" class="pages"></div>
  <div id="page4" class="pages"></div>
  <div id="page5" class="pages"></div>
  <div id="page6" class="pages"></div>
  <div class="pages">
    <div class="am-padding-top-sm bg-white">
      <div class="bt-1 am-text-sm" style="border-bottom: 1px solid #f3f4f5">
        <div class="am-g">
          <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-right-0"
               style="border-right: 1px solid #f3f4f5">

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
              <span class="am-align-right am-margin-0 am-text-danger" id="textHold">1</span>
            </p>

            <p class="am-padding-sm bt-1">
              <span>总手</span>
              <span class="am-align-right am-margin-0 am-text-danger" id="textHand">51123</span>
            </p>

          </div>
          <div class="am-u-sm-6 am-u-md-6 am-u-lg-6 am-padding-left-0">

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

            <p class="am-padding-sm bt-1">
              <span>金额</span>
              <span class="am-align-right am-margin-0" id="textMoney">51123</span>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="am-padding-top-sm">

  <p class="am-padding-sm bg-white">
    <span class="am-text-default"><?= $products->name ?></span>
    <span class="am-text-xs"><?= $products->identify ?></span>

    <span class="am-text-xs am-align-right am-margin-0 am-padding-top-xs">
            <span>本段持仓时间至</span>
            <span class="am-text-danger">04:58</span>
        </span>
  </p>

  <p class="am-padding-sm bg-white bt-1">
      <?php if ($model_type == 1) : ?>
        <span class="am-text-default am-text-sm">账户实盘资金</span>
        <span class="am-text-danger" id="myamount"><?= u()->account - u()->blocked_account ?></span>
      <?php else : ?>
        <span class="am-text-default am-text-sm">账户模拟盘资金</span>
        <span class="am-text-danger" id="myamount"><?= u()->moni_acount - u()->blocked_moni ?></span>
      <?php endif; ?>

    <span class="am-align-right am-margin-0">
            <span>浮动盈亏</span>
            <span class="am-text-danger" id="totalprice">0</span>
        </span>

  </p>

  <div class="am-padding-sm bg-white bt-1">
    <div class="am-g am-text-xs">
      <div class="am-u-sm-3 am-u-md-3 am-u-lg-3">
        <p class="am-text-danger am-text-lg am-padding-top-xs"
           id="price3"><?= $products->dataAll->price ?></p>
      </div>
      <div class="am-u-sm-2 am-u-md-2 am-u-lg-2 am-text-danger am-padding-0">
        <p id="price4"><?= $products->dataAll->diff ?></p>
        <p id="price5"><?= $products->dataAll->diff_rate ?></p>
      </div>
      <div class="am-u-sm-4 am-u-md-4 am-u-lg-4">
        <p>买量 <span class="am-text-danger" id="buyBarText">15</span></p>
        <p>卖量 <span class="am-text-success" id="sellBarText">20</span></p>
      </div>
      <div class="am-u-sm-3 am-u-md-3 am-u-lg-3 am-padding-0">

        <div class="am-padding-top-xs am-padding-bottom-xs">
          <div class="am-progress am-progress-xs am-margin-0">
            <div class="am-progress-bar am-progress-bar-danger" style="width: 80%" id="buyBar"></div>
          </div>
        </div>

        <div class="am-padding-top-xs">
          <div class="am-progress am-progress-xs am-margin-0">
            <div class="am-progress-bar am-progress-bar-success" style="width: 80%" id="sellBar"></div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="am-padding-horizontal-sm am-padding-vertical-xs bt-1 bg-white am-text-right">
    <p class="am-btn am-btn-xs am-btn-danger am-radius" id="oneKey">一键全平</p>
  </div>

  <div class="fixBot">

    <div class="am-btn-group am-btn-group-justify">

      <div class="am-btn am-btn-default am-padding-vertical-0" style="background-color: #333333;border: none">
        <a href="<?= url(['order/position', 'type' => 1, 'model_type' => $model_type]) ?>">
          <p class="col-white">持仓</p>
        </a>
      </div>

      <div class="am-btn am-btn-default am-padding-vertical-0"
           style="background-color: #333333;border-top: none;border-bottom: none">
        <a href="<?= url(['order/position', 'type' => 2, 'model_type' => $model_type]) ?>">
          <p class="col-white">结算</p>
        </a>
      </div>

      <div class="am-btn am-btn-danger am-padding-vertical-0">
        <a href='javascript:riseBy("<?= url([
            'order/buy',
            'rise_fall'  => 1,
            'product_id' => $products->id,
            'model_type' => $model_type,
        ]) ?>");'>
          <p id="price1" class="col-white"><?= $products->dataAll->price ?></p>
          <p class="col-white">买涨</p>
        </a>
      </div>

      <div class="am-btn am-btn-success am-padding-vertical-0">
        <a href='javascript:riseBy("<?= url([
            'order/buy',
            'rise_fall'  => 2,
            'product_id' => $products->id,
            'model_type' => $model_type,
        ]) ?>");'>
          <p id="price2" class="col-white"><?= $products->dataAll->price ?></p>
          <p class="col-white">买跌</p>
        </a>
      </div>

    </div>

  </div>

</div>

<script>
  var dataO = '';
  var data60 = '';
  var curTab = 1;
  var symbol = '<?=$products->dataAll->symbol ?>';
  var account = '1q2w3e4r5t6y7u8i';
  var goin3 = true;

  function getData() {
    $.ajax({
      url: "<?=WEB_STOCKET_URL?>"+"&line=min,1&num=300&sort=Date%20desc&symbol=" + symbol,
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
        var ZDL = (ZD / ret.LastClose * 100).toFixed(2) + '%';

        $('#price1').html(ret.SP1);
        $('#price2').html(ret.BP1);
        $('#price3').html(ret.NewPrice);
        $('.nowprice').html(ret.NewPrice);
        $('#price4').html(ZD.toFixed(2));
        $('#price5').html(ZDL);

        $('#buyBar').css({'width': ret.BV1 + '%'});
        $('#buyBarText').html(ret.BV1);
        $('#sellBar').css({'width': ret.SV1 + '%'});
        $('#sellBarText').html(ret.SV1);

        $('#textZD').html(ZD.toFixed(2));
        $('#textHigh').html(ret.High);
        $('#textOpen').html(ret.Open);
        $('#textHold').html(ret.Open_Int);
        $('#textHand').html(ret.Price3);
        $('#textZF').html(ZDL);
        $('#textLow').html(ret.Low);
        $('#textYR').html(ret.LastClose);
        $('#textYE').html(ret.Price2);
        $('#textMoney').html(ret.Amount);

      }
    });
  }

  setInterval(function () {
    getPriceFn();
  }, 1000);

  setInterval(function () {
    getData();
  }, 60000);

  getDay();
  getData();

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
      // } else if (dataH >= 19 && dataH <= 23) {
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
    // } else if (nowTime >= 19 && nowTime <= 23) {
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
      case 3:

        if (goin3) {
          goin3 = false;
          var page3 = echarts.init(document.getElementById('page3'));
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
            page3.setOption(option);
          }, 100);
        }

        break;
      case 4:

        var page4 = echarts.init(document.getElementById('page4'));
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
          page4.setOption(option);
        }, 100);

        break;
      case 5:

        var page5 = echarts.init(document.getElementById('page5'));
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
          page5.setOption(option);
        }, 100);

        break;
      case 6:

        var page6 = echarts.init(document.getElementById('page6'));
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
          page6.setOption(option);
        }, 100);

        break;
      case 7:


        break;
      default:
        break;
    }
  }

</script>
<script>
  !function () {

    var seHeight = $(window).height() - 320;
    $('.pages').css('height', seHeight + 'px');

    var tabBtns = $('#tabBtns span');
    tabBtns.on('click', function () {
      curTab = $(this).context.dataset.tab;
      $('.pages').hide();
      $('.pages').eq(curTab - 1).show();
      tabBtns.removeClass('actTab');
      $(this).addClass('actTab');
    })

  }();

  $('#oneKey').on('click', function () {
    layer.confirm('确认要一键平仓吗？', {
      btn: ['确定', '取消']//按钮
    }, function (index) {
      $.post("<?= url('order/ajaxSellOrder')?>", {
        product_id:<?=$products->id?>,
        type: 2,
        model_type:<?=$model_type?>}, function (msg) {
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

  function riseBy(url) {
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
    window.location.href = url;
  }
</script>

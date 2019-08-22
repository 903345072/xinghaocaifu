<style type="text/css">

  .gp_box{
    color: #4E5465;
    font-size: 14px;
    padding: 10px;
  }
  .gp_box div {
    /*border: 1px solid;*/
    width: 176px;
    float:left;
  }
  .gp_box div p {
    border: 1px solid #f3f4f5;
    height: 35px;
    line-height: 35px;
    padding: 0px 5px;
  }
  .gp_box .am-align-right{
    float:right;
  }
html{
  font-size: 93px;
}
</style>

<script type="text/javascript" src="/js/echarts-all-3.js"></script>

<div class="main_heads">
  <img src="/wap/img/icons_03.png" onclick="javascript:history.back();">
  <h1>
      <?php if ($model_type == 1) : ?>
        实盘交易
      <?php else : ?>
        模拟盘交易
      <?php endif ?>
    <span>【<?= $products->name ?>】</span>
  </h1>
</div>
<div class="fadein_header">
  <ul id="tabBtns" >
    <li data-tab="1" class="on" onclick="getData()">分时</li>
    <li data-tab="2" onclick="getData()" >日分线</li>
    <li data-tab="3" onclick="getData()" style="display: none" >日线</li>
    <li data-tab="4" onclick="getData()">1分钟</li>
    <li data-tab="5" onclick="getData()">5分钟</li>
    <li data-tab="6" onclick="getDataMin30()">30分钟</li>
    <li data-tab="7" onclick="getData()">盘口</li>
  </ul>
</div>
<div class="gp">
  <div id="page1" class="gp_list">
  </div>
  <div id="page2" class="gp_list hide">
  </div>
  <div id="page3" class="gp_list hide">
  </div>
  <div id="page4" class="gp_list hide">
  </div>
  <div id="page5" class="gp_list hide">
  </div>
  <div id="page6" class="gp_list hide">
  </div>
  <div class="gp_list hide">
    <div class="gp_box" style="border-bottom: 1px solid #f3f4f5">

      <div>

        <p class="am-padding-sm">
          <span>涨跌</span>
          <span class="am-align-right am-margin-0 red" id="textZD">-0.41</span>
        </p>

        <p class="am-padding-sm bt-1">
          <span>最高</span>
          <span class="am-align-right am-margin-0 red" id="textHigh">68.300000</span>
        </p>

        <p class="am-padding-sm bt-1">
          <span>开盘</span>
          <span class="am-align-right am-margin-0 red" id="textOpen">68.300000</span>
        </p>

        <p class="am-padding-sm bt-1">
          <span>持仓</span>
          <span class="am-align-right am-margin-0 red" id="textHold">1</span>
        </p>

        <p class="am-padding-sm bt-1">
          <span>总手</span>
          <span class="am-align-right am-margin-0 red" id="textHand">51123</span>
        </p>
      </div>
      <div>

        <p class="am-padding-sm">
          <span>涨幅</span>
          <span class="am-align-right am-margin-0 red" id="textZF">-0.41%</span>
        </p>

        <p class="am-padding-sm bt-1">
          <span>最低</span>
          <span class="am-align-right am-margin-0 green" id="textLow">68.300000</span>
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
<div class="myy">
  <div class="myy_s">
    <div class="lables">
      <h1><?= $products->name ?></h1>
      <p><?= $products->table_name ?></p>
      <span>本时段持仓时间至<?= $products->tradeTime ?></span>
    </div>
    <div class="lables1">
      <p>
        账户<?= ($model_type == 1) ? '实盘' : '模拟盘' ?>资金：
        <span>￥<?= ($model_type == 1) ? u()->account - u()->blocked_account : u()->moni_acount - u()->blocked_moni ?>
          元</span></p>
      <em>浮动盈亏：<span>￥0</span></em>
    </div>
    <div class="bid" style="position:relative;">
      <h1 style="margin-top:10px;"  id="price3" ><?= $products->dataAll->price ?></h1>
        <style>
            .green{
                color: #009944;
            }
            .red{
                color: #E60012;
            }
        </style>
      <div class="mids">
        <p id="price4">0</p>
        <p id="price5">0%</p>
      </div>
      <div class="box_rg">
        <ul>
          <li >
            <p>买量：</p>
            <div><span class="y" style="width: 0%;" id="buyBar"></span></div>
            <em id="buyBarText">0</em>
          </li>
          <li>
            <p>卖量：</p>
            <div><span class="e" style="width: 0%;" id="sellBar"></span></div>
            <em id="sellBarText">0</em>
          </li>
        </ul>
      </div>
    </div>
    <div class="box ">
      <div class="box_left">
        <a href="<?= url(['order/position', 'type' => 1, 'model_type' => $model_type]) ?>">
          <div>持仓</div>
        </a>
        <a href="<?= url(['order/position', 'type' => 2, 'model_type' => $model_type]) ?>">
          <div>结算</div>
        </a>
      </div>
      <ul>
        <li><a href='javascript:riseBy("<?= url([
                'order/buy',
                'rise_fall'  => 1,
                'product_id' => $products->id,
                'model_type' => $model_type,
            ]) ?>");'>
            <img src="/wap/img/交易-国际期货-交易页_08.png"/>
            <p>开多</p>
          </a></li>
        <li><a href='javascript:riseBy("<?= url([
                'order/buy',
                'rise_fall'  => 2,
                'product_id' => $products->id,
                'model_type' => $model_type,
            ]) ?>");'>
            <img src="/wap/img/交易-国际期货-交易页_05.png"/>
            <p>开空</p>
          </a></li>
        <li><a href="javascript:;" id="oneKey">
            <span>全部平仓</span>
          </a></li>
      </ul>
    </div>
    <!--<div class="hua">
      <p>是否开启极速下单</p>
      <div>
        <span></span>
      </div>
    </div>-->
  </div>
</div>
<script type="text/javascript" src="/js/layer.js"></script>
<script type="text/javascript" src="/wap/js/js.js"></script>
<script>
  var dataO = '';
  var data60 = '';
  var curTab = 1;
  var symbol = '<?=$products->dataAll->symbol ?>';
  var account = '1q2w3e4r5t6y7u8i';
  var goin3 = true;
  getData();
  getPriceFn();
  getDataMin30();
  function getData() {
    $.ajax({
//      url: "http://zhendawan.com/stock.php?u=test&symbol=BSbtcusd&type=kline&line=min,30&num=400&sort=Date%20desc",
        url: "<?=url('site/get-data')?>" + "?symbol="+symbol,
        async: true,
        dataType:'json',
        success: function (ret) {
        dataO = dealNum(ret);
        console.log(dataO)
        setEC();
      }
    });
  }

  function getDataMin30() {
    $.ajax({

         url: 'http://zhendawan.com/stock.php?u=wwwzzzzdd0599&symbol='+symbol+'&type=kline&line=min,30&num=100&sort=Date%20desc',
        //url: "<?=url('site/get-data')?>" + "?symbol="+symbol+'&type=5',
        async: true,
        dataType:'json',
        success: function (ret) {
        dataO = dealNumMin30(ret);
        setECMin30();
      }
    });
  }

  function getDay() {
    $.ajax({
//        url: "http://zhendawan.com/stock.php?u=test&symbol=BSbtcusd&type=kline&line=day&num=400&sort=Date%20desc",
        url: "<?=url('site/get-data')?>" + "?symbol="+symbol,
      async: true,
      dataType:'json',
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
//        url:"http://zhendawan.com/stock.php?u=test&market=BS&type=stock&symbol=BSbtcusd",

        url: "<?=url('site/get-fn')?>" + "?symbol="+symbol,

        async: true,
      dataType:'json',
      success: function (res) {
        var ret = res;
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
          if (ZD > 0) {
              $('#price3').addClass('red');
              $('#price4').addClass('red');
              $('#price5').addClass('red');
              $('#price3').removeClass('green');
              $('#price4').removeClass('green');
              $('#price5').removeClass('green');
          } else {
              $('#price3').addClass('green');
              $('#price4').addClass('green');
              $('#price5').addClass('green');
              $('#price3').removeClass('red');
              $('#price4').removeClass('red');
              $('#price5').removeClass('red');
          }
      }
    });
  }

  setInterval(function () {
    getPriceFn();
  }, 1500);

  setInterval(function () {
    getData();
  }, 1000);
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
      d[i].data1Min = [d[i].Open, d[i].Close, d[i].Low, d[i].High]; //price

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
      if (nowTime.valueOf() - date.valueOf() > hour3) {
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
            height: '92%',
            right: '5%',
          },
            {
              borderColor: '#000',
              left: 0,
              height: '15%',
              bottom: 0,
              top: '78%',
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
            height: '92%',
            right: '5%',
          },
            {
              borderColor: '#000',
              left: 0,
              height: '15%',
              bottom: 0,
              top: '78%',
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
      /*case 6:

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

        break;*/
      case 7:


        break;
      default:
        break;
    }
  }

  function setECMin30() {
    var option = {};
    var curT = parseInt(curTab);

    switch (curT) {
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
      default:
        break;
    }
  }

</script>
<script>
  !function () {

    var seHeight = $(window).height() - 320;
    $('.pages').css('height', seHeight + 'px');

    var tabBtns = $('#tabBtns li');
    tabBtns.on('click', function () {
      curTab = $(this).context.dataset.tab;
      /*$('.pages').hide();
      $('.pages').eq(curTab - 1).show();
      tabBtns.removeClass('actTab');
      $(this).addClass('actTab');*/
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

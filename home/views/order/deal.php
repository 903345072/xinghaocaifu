<?php if ($model_type == 1): ?>
  <div class="moni_banner">
    <h3>实盘交易</h3>
    <p>全球期货 一站式交易</p>
  </div>
<?php else: ?>
  <div class="moni_banner">
    <h3>模拟交易</h3>
    <p>熟悉操作流程 做到心中有数</p>
  </div>
<?php endif; ?>

<div class="mianbao_nav wrap1 about_nav">
  <a href="#">当前位置：</a>
  <a href="#">首页</a>
  <a href="#">></a>
  <a href="#"><?= $model_type == 1 ? '实盘' : '模拟' ?></a>
  <a href="#">></a>
</div>
<div class="moni_content wrap1">
  <div class="tab_box clearfix">
    <a href="<?= url(['order/deal', 'model_type' => $model_type, 'trade_type' => 1]) ?>"><span
        class="<?= $trade_type == 1 ? 'on' : '' ?>">国际期货</span></a>
    <a href="<?= url(['order/deal', 'model_type' => $model_type, 'trade_type' => 2]) ?>"><span
        class="<?= $trade_type == 2 ? 'on' : '' ?>">国内期货</span></a>
  </div>
  <div class="tab_list">
    <ul>
        <?php foreach ($Product as $k): ?>
          <li class="list-item" data-symbol="<?= $k->dataAll->symbol ?>">
            <div class="fl" style="width: 60px">
              <p><?= $k->name ?></p>
              <p><?= $k->identify ?></p>
            </div>
            <div class="fl showPrice" style="width: 140px">
              <p class="current_price">00.00</p>
              <p>
                <span class="showPrice1">00.00</span>
                <span class="showPrice2" style="margin-left: 1em">00.00%</span>
              </p>
            </div>
            <div class="fl" style="width: 100px">
              <p>
                <span>涨跌 </span>
                <span class="showPrice1 showPriceZD">00.00</span>
              </p>
              <p>
                <span>涨幅</span>
                <span class="showPrice2 showPriceZF">00.00%</span>
              </p>
            </div>
            <div class="fl" style="width: 100px">
              <p>
                <span>最高</span>
                <span class="showPriceH">00.00</span>
              </p>
              <p>
                <span>最低</span>
                <span class="showPriceL">00.00</span>
              </p>
            </div>
            <div class="fl">
              <p><?= $k->desc ?></p>
              <p><?= $k->tradeTime ?></p>
            </div>
            <div class="fr clearfix">
              <div class="fl">
                <p><a href="<?= url(['user/new-gui', 'flag' => 'rule' . $k->id]) ?>">《规则说明》</a></p>
                  <?php if ($k->isTrade == 1): ?>
                    <p class="state">交易中</p>
                  <?php else: ?>
                    <p class="state disable">休市中</p>
                  <?php endif; ?>
              </div>
              <a href="<?= url(['buy', 'id' => $k->id, 'model_type' => $model_type]) ?>" class="fl jiaoyi">我要
                <br/> 交易</a>
            </div>
          </li>
        <?php endforeach; ?>
    </ul>
  </div>
</div>
<script>
  var account = '1q2w3e4r5t6y7u8i';
  var allSym = '<?= $productCode ?>';

  function updatePrice() {
    $.ajax({
      url: "<?=WEB_STOCKET_URL2?>" + allSym,
      async: true,dataType:'json',
      success: function (newData) {
        for (var i = 0, len = newData.length; i < len; i++) {
          $('.list-item').each(function () {
            var _this = $(this);
            var currentSymbol = _this.data('symbol');

            if (currentSymbol == newData[i].Symbol) {
              var ZD = (newData[i].NewPrice - newData[i].LastClose);
              var curRate = (ZD / newData[i].LastClose * 100).toFixed(2) + '%';

              _this.find('.showPrice1').html(ZD.toFixed(2));
              _this.find('.showPrice2').html(curRate);
              _this.find('.current_price').html(newData[i].NewPrice);
              _this.find('.showPriceH').html(newData[i].High);
              _this.find('.showPriceL').html(newData[i].Low);

              if (ZD > 0) {
                _this.find('.showPrice').css('color', 'red');
                _this.find('.showPriceZD').addClass('red');
                _this.find('.showPriceZF').addClass('red');
                _this.find('.showPriceH').addClass('red');
                _this.find('.showPriceL').addClass('red');

                _this.find('.showPriceZD').removeClass('green');
                _this.find('.showPriceZF').removeClass('green');
                _this.find('.showPriceH').removeClass('green');
                _this.find('.showPriceL').removeClass('green');
              } else {
                _this.find('.showPrice').css('color', 'green');
                _this.find('.showPriceZD').removeClass('red');
                _this.find('.showPriceZF').removeClass('red');
                _this.find('.showPriceH').removeClass('red');
                _this.find('.showPriceL').removeClass('red');

                _this.find('.showPriceZD').addClass('green');
                _this.find('.showPriceZF').addClass('green');
                _this.find('.showPriceH').addClass('green');
                _this.find('.showPriceL').addClass('green');
              }
            }
          })

        }
      }
    });

  }

  setInterval(updatePrice, 1000);

</script>
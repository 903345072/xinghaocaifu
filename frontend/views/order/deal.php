<?php use frontend\models\Product; ?>
<div class="main_header">
  <div class="sl" style="margin-left: 40%;">
    <div class="fl on">产品列表</div>

  </div>
</div>
<div class="main_content">
  <!--<div class="fadein">
    <ul>
        <?php /*foreach ($products as $k => $v): */?>
            <?php /*if ($v->type == 2): */?>
            <li><a class="itemOne" data-symbol="<?/*= $v->dataAll->symbol */?>"
                   href="<?/*= url(['order/product-detail', 'id' => $v['id'], 'model_type' => $model_type]) */?>">
                <p><span><?/*= $v->simple_identify */?></span> <?/*= $v['name'] */?></p>
                    <?php /*if ($v->isTrade == 1) : */?>
                      <em color="red">交易中</em>
                    <?php /*else: */?>
                      <em style="color: gray">休市中</em>
                    <?php /*endif */?>
                <i><span class="showPrice1">00.00</span>- <span class="showPrice2">00.00%</span></i>
                <h2><?/*= $v->tradeTime */?></h2>
              </a></li>
            <?php /*endif; */?>
        <?php /*endforeach; */?>
    </ul>
  </div>-->
  <div class="fadein">
    <ul>
        <?php foreach ($products as $k => $v): ?>
            <?php if ($v->type == 2): ?>
            <li><a class="itemOne" data-symbol="<?= $v->dataAll->symbol ?>"
                   href="<?= url(['order/product-detail', 'id' => $v['id'], 'model_type' => $model_type]) ?>">
                <p><span><?= $v->simple_identify ?></span> <?= $v['name'] ?></p>
                    <?php if ($v->isTrade == 1) : ?>
                      <em color="red">交易中</em>
                    <?php else: ?>
                      <em style="color: gray">休市中</em>
                    <?php endif ?>
                <i><span class="showPrice1">00.00</span>- <span class="showPrice2">00.00%</span></i>
                <h2><?= $v->tradeTime ?></h2>
              </a>
            </li>
            <?php endif; ?>
        <?php endforeach ?>
      <li style="background: #F7F7F7"></li>
      <li style="background: #F7F7F7"></li>
    </ul>
  </div>

</div>
<div class="null"></div>

<?= $this->render('../layouts/_footer') ?>

<script type="text/javascript" src="/wap/js/js.js"></script>

<script>
  //var allSym = 'WGCNM0,WICMADM0,SCag1812,SCau1812,WICMBPM0,SCbu1812,WICMCDM0,NECLN0,SCcu1807,CEDAXM0,WICMECM0,CMGCQ0,CMHGN0,HIHSI06,CENQM0,DCm1809,HIMHI06,SCni1809,DCp1809,DCpp1809,SCrb1810,SCru1809,CMSIN0,ZCSR1809,DCy1809'
  var account = '1q2w3e4r5t6y7u8i';
  var allSym = '<?= $productCode ?>';

  function updateOrder() {
    $.ajax({
        url: "<?=url('site/get-pro-list')?>" +'?symbol='+allSym,
      async: true,dataType:'json',
      success: function (newData) {

        for (var i = 0, len = newData.length; i < len; i++) {
          $('.itemOne').each(function () {
            var _this = $(this);
            var currentSymbol = _this.data('symbol');
            if (currentSymbol == newData[i].Symbol) {
              var ZD = (newData[i].NewPrice - newData[i].LastClose);
              var curRate = (ZD / newData[i].LastClose * 100).toFixed(2) + '%';
                  _this.find('.showPrice1').html(newData[i].NewPrice);
                  _this.find('.showPrice2').html(curRate);
                  if (ZD > 0) {
                      _this.find('.showPrice1').css('color', 'red');
                      _this.find('.showPrice2').css('color', 'red');
                  } else {
                      _this.find('.showPrice1').css('color', 'green');
                      _this.find('.showPrice2').css('color', 'green');
                  }
            }
          })

        }
      }
    });

  }
  updateOrder()
 setInterval(updateOrder, 1000);

</script>

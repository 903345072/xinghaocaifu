<?php use frontend\models\Product; ?>
    <header class="mui-bar mui-bar-nav">
        <div class="tm-bar-segmented-control-outer">
            <div class="mui-segmented-control mui-segmented-control tm-bar-segmented-control">
                <a class="mui-control-item <?php if ($trade_type == 2) {
                    echo 'mui-active';
                } ?>" href="<?= url(['order/deal', 'trade_type' => 2, 'model_type' => $model_type]) ?>">国际期货</a>
                <a class="mui-control-item <?php if ($trade_type == 1) {
                    echo 'mui-active';
                } ?>" href="<?= url(['order/deal', 'trade_type' => 1, 'model_type' => $model_type]) ?>">国内期货</a>
            </div>
        </div>
        <a class="mui-btn mui-btn-link mui-pull-right" href="<?= url(['order/ruleplay']) ?>">玩法</a>
    </header>
    <div class="mui-content">
        <div class="xqh-block">
            <div class="xqh-card">
                <div class="xqh-card-body">
                    <div class="xqh-grid xqh-grid-width-1-3">
                        <?php foreach ($products as $k => $v): ?>
                            <a class="xqh-grid-item itemOne"
                               href="<?= url(['order/product-detail', 'id' => $v['id'], 'model_type' => $model_type]) ?>"
                               data-symbol="<?= $v->dataAll->symbol ?>">
                                <div class="tm-flex-row">
                                    <div class="xtype-img" style="background-color: <?= $v['color'] ?>;">
                                        <?= $v['identify'] ?>
                                    </div>
                                    <div class="tm-title">
                                        <?= $v['name'] ?>
                                    </div>
                                    <div class="tm-imgtags">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAUCAMAAABs8jdaAAAAflBMVEUAAAD////80of90IT9zH781Ir+qU/9v23/ki/8zoL9yXv9t2L9w3P82pH/kS3+uGL/mjv804j/jyv9vmv9w3P+sVr8143/jyv9yXv+q1H+n0L/ki/+qE39vmv80Yb9t2L9vmv9w3P9yXv+n0L+pUn+q1H+sVr/ki7/ljT/mjtQRCt9AAAAHnRSTlMAAAILFRwnOU9ee4qTlJagqLe8wMjQ1+Dl5eby9/q3Tp1fAAAAcElEQVQI143GSwKCIBRA0ZsgUpnav0QJ7PNq/xts0qtpZ3QAypVBFfFg9SbGtX4eYywLAOxpmqZqYQCzyzlnW9dAm1JKo9uOjuqilrQPted8VwO3r4H+qnq6l+pw4fnhwQcREZEGwDVHCRsPzH7++Rsx0A8fjaN69QAAAABJRU5ErkJggg=="
                                             width="11" height="20">
                                    </div>
                                </div>
                                <div class="tm-state-txt uk-text-muted">
                                <span style="font-size:12px;">
                                    <?php if ($v->isTrade == 1) : ?>
                                        <font color="red">交易中</font>
                                    <?php else: ?>
                                        <font color="#CCC">休市中</font>
                                    <?php endif ?>

                                </span>
                                </div>
                                <div class="tm-state-txt uk-text-muted">
                                    <?php if ($v->isTrade == 1) : ?>
                                        <span class="pro_price_CL1805 showPrice1"
                                              style="color: red;"><?= $v->dataAll->price ?></span>
                                        <span class="per_price_CL1805 showPrice2"
                                              style="color: red;"><?= $v->dataAll->diff_rate ?></span>
                                    <?php else: ?>
                                        <span class="pro_price_CL1805 showPrice1"
                                              style="color: #CCC;"><?= $v->dataAll->price ?></span>
                                        <span class="per_price_CL1805 showPrice2"
                                              style="color: #CCC;"><?= $v->dataAll->diff_rate ?></span>
                                    <?php endif ?>

                                </div>
                                <div class="tm-muted-txt">
                                    <?= $v->tradeTime ?>
                                </div>
                            </a>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf-8">
        mui.init();
    </script>
    <script>

        //var allSym = 'WGCNM0,WICMADM0,SCag1812,SCau1812,WICMBPM0,SCbu1812,WICMCDM0,NECLN0,SCcu1807,CEDAXM0,WICMECM0,CMGCQ0,CMHGN0,HIHSI06,CENQM0,DCm1809,HIMHI06,SCni1809,DCp1809,DCpp1809,SCrb1810,SCru1809,CMSIN0,ZCSR1809,DCy1809'
        var account = '1q2w3e4r5t6y7u8i';
        var allSym = '<?= $productCode ?>';

        function updateOrder() {
            $.ajax({
                url: "<?=WEB_STOCKET_URL2?>" + allSym,
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

        setInterval(updateOrder, 1000);

    </script>

<?= $this->render('../layouts/_footer') ?>
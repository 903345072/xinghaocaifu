        <?php foreach ($data as $order) :?>
        <div class="row" onclick="window.location.href='<?= url(['user/detail', 'id' => $order->id]) ?>'">
            <div class="liq_main">
                <div class="jymx_box text-center">
                    <!-- <div class="col-xs-2">订单号：XX00<?= $order->id ?></div> -->
                    <div class="col-xs-4"><?= $order->product->name ?></div>
                    <div class="col-xs-3 <?php $class = 'liq_green';if ($order->rise_fall == 1) {$class = 'liq_red';} echo $class; ?>"><?= $order->riseFallValue ?></div>
                    <div class="col-xs-3 <?php $class = 'liq_green';if ($order->profit >= 0) {$class = 'liq_red';} echo $class; ?>"><?= $order->profit ?></div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
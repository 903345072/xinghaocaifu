<?php use common\helpers\Html; ?>

<?= $html ?>

<p class="cl pd-5 mt-20">
    <span class="countProfit">盈亏统计：<?= $profit >= 0 ? Html::redSpan($profit) : Html::greenSpan($profit) ?>，</span>
    <span>交易手数：<?= $hand >= 0 ? Html::redSpan($hand, ['class' => 'countHand']) : Html::greenSpan($hand, ['class' => 'countHand']) ?>，</span>
    <span>交易手续费：<?= Html::redSpan($fee, ['class' => 'countFee']) ?>，</span>
    <span>交易额统计：<?= $amount >= 0 ? Html::redSpan($amount, ['class' => 'countAmount']) : Html::greenSpan($amount, ['class' => 'countAmount']) ?></span>
</p>

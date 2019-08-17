		<div class="header">
			<p>交易记录</p>
      <img src="/wap/img/icons_03.png" onclick="javascript:history.back()">
		</div>
		<div class="flids">
			<div class="tops1">
				<p>盈利（元）</p>
				<span><?=u()->profit_account?></span>
			</div>
			<div class="bts1">
				<div>
					<p>成交（手）</p>
					<span><?=count($order)?></span>
				</div>
				<div>
					<p>盈利（手）</p>
					<span><?=$profit_hand?></span>
				</div>
				<div>
					<p>胜率（元）</p>
					<span><?=$win_rate?>%</span>
				</div>
			</div>
		</div>
		<!--<div class="nav_fade">
			<div class="fl">持仓</div>
			<div class="fr on">结算</div>
		</div>-->
<!--		<div class="data">
			<ul>
				<li>2018-05-01</li>
				<li>2018-05-16</li>
			</ul>
			<a href="#">查询</a>
		</div>-->
		<div class="fades">
        <?php foreach($order as $k => $v): ?>
			<div class="fades_lis">
				<div class="fade_lit_top">
            <?=$v->product->name?> (<?=$v->product->identify?>)
				</div>
				<div class="fade_bot">
					<div class="fade_lefts">
              <?php if($v->rise_fall == \frontend\models\Order::RISE):?>
                <p class="red">买涨<?=$v->hand?>手<span><?=$v->profit?>元</span></p>
              <?php else: ?>
                <p class="green">买跌<?=$v->hand?>手<span><?=$v->profit?>元</span></p>
              <?php endif ?>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="zy" style="width: 1.11rem;">止盈</td>
								<td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>+<?=$v->stop_profit_price;?>元</td>
								<td class="zy" style="width: 1.04rem;">买入价</td>
								<td style="width: 1.22rem;border-right: none;"><?=$v->price?></td>
							</tr>
							<tr>
								<td class="zy" style="width: 1.11rem;">止损</td>
								<td style="width: 1.92rem;"><?=getCurrencySymbol($v->currency);?>-<?=$v->stop_loss_price;?>元</td>
								<td class="zy" style="width: 1.04rem;">卖出价</td>
								<td style="width: 1.22rem;border-right: none;"><?=$v->sell_price?></td>
							</tr>
							<tr>
								<td class="zy"  style="width: 1.11rem;">单号</td>
								<td>JY1000<?= $v->id ?></td>
							</tr>
							<tr>
								<td class="zy"  style="width: 1.11rem;border-bottom: none;">成交时间</td>
								<td style="border-bottom: none;"><?=$v->updated_at?></td>
							</tr>
						</table>
					</div>
					<a href="#"><div class="rig_btn">结算<br/>成功</div></a>
				</div>
			</div>
        <?php endforeach ?>
		</div>
		<div class="null"></div>
    <?= $this->render('../layouts/_footer') ?>

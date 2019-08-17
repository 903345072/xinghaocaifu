<div class="uk-container uk-container-center">
	<div class="tm-panel-box">
		<div class="article-scrll" style="height:560px;">
			<div class="tm-pro-list">
				<?php foreach ($Product as $k): ?>
					<div class="list-item" data-name="<?= $k->table_name ?>" data-id="<?=$k->id?>">
						<ul class="hot-zs-table">
							<li style="width:10%">
								<div class="hot-zs-item">
									<div class="uk-margin-xsmall-bottom">
										<?= $k->name ?>
									</div>
									<div>
										<?= $k->identify ?>
									</div>
								</div>
							</li>
							<li style="width:17%">
								<div class="hot-zs-item uk-flex uk-flex-middle">
									<?php if($k->dataAll->diff_rate < 0){  ?>

										<div class="uk-margin-xsmall-right" style="color:green;">
											<div class="uk-margin-xsmall-bottom uk-text-large pro_price_CD1806 current_price">
												<?=$k->dataAll->price?>
											</div>
											<div class="pro_zdzdf_CD1806 diff_rate">
												<?=$k->dataAll->diff_rate?>
											</div>
										</div>

									<?php }else{ ?>

										<div class="uk-margin-xsmall-right" style="color:red;">
											<div class="uk-margin-xsmall-bottom uk-text-large pro_price_CD1806">
												<?=$k->dataAll->price?>
											</div>
											<div class="pro_zdzdf_CD1806">
												<?=$k->dataAll->diff_rate?>
											</div>
										</div>

									<?php } ?>

									<div class="pro_zdico_CD1806">
										<span class="uk-icon-long-arrow-down uk-icon-large uk-text-success"></span>
									</div>
								</div>
							</li>
<!--							<li style="width:10%">-->
<!--								<div class="hot-zs-item">-->
<!--									<div class="uk-margin-xsmall-bottom">-->
<!--										涨跌 <span class="uk-text-success pro_zd_CD1806">-0.00575</span>-->
<!--									</div>-->
<!--									<div>-->
<!--										涨幅 <span class="uk-text-success pro_zdf_CD1806">-0.728%</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</li>-->
<!--							<li style="width:10%">-->
<!--								<div class="hot-zs-item">-->
<!--									<div class="uk-margin-xsmall-bottom">-->
<!--										最高 <span class="uk-text-success pro_max_CD1806 "></span>-->
<!--									</div>-->
<!--									<div>-->
<!--										最低 <span class="uk-text-success pro_min_CD1806"></span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</li>-->
							<li style="width:20%">
								<div class="hot-zs-item uk-text-gray">
									<div class="uk-margin-xsmall-bottom">
										<?= $k->desc ?>
									</div>
									<div>
										<?=$k->tradeTime?>
									</div>
								</div>
							</li>
							<li>
								<div class="hot-zs-item">
									<div class="uk-margin-small-bottom uk-text-right">
										<a class="uk-text-danger" href="Javascript:" onclick="parent.document.location = '/Content/index/jiaoyi_detail/id/32.html'">
											规则说明
										</a>
									</div>
									<div class="uk-text-right">
										<a class="uk-button uk-button-gray" href="Javascript:">
											<?php if($k->isTrade == 2){  ?>
												<span style="font-size:12px;border: 1px solid #CCC;margin-left: 5px;padding: 1px;color:#CCC">休市中</span>
											<?php }else{ ?>
												<span style="font-size:12px;border: 1px solid red;margin-left: 5px;padding: 1px;color:red">交易中</span>
											<?php } ?>
										</a>
										<a class="uk-button uk-button-theme" href="Javascript:" onclick="parent.document.location='/Content/index/show/id/32/catid/15/moni/0.html'">
											我要交易
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		$(".nav").hide();
	});

	function updateOrder(){
		$.get('/web/ajax-all-product', function(newData) {
//			console.log(newData);
			$('.list-item').each(function(){
				var $this = $(this),
					nowProduct = $this.data('name'),
					price = parseFloat(newData.info[nowProduct].price),
					diff_rate = parseFloat(newData.info[nowProduct].diff_rate);
//						lastPrice = $this.find('.price').html();
//            console.log(diff_rate)
				//价格箭头跳动
//					if (newData.info[nowProduct].price != lastPrice) {
//						$this.find('.price').removeClass('red');
//						$this.find('.diff_rate').removeClass('red');
//						$this.find('.price').removeClass('green');
//						$this.find('.diff_rate').removeClass('green');
//					}
//
//					if (newData.info[nowProduct].price >= lastPrice) {
//						$this.find('.price').addClass('red');
//						$this.find('.diff_rate').addClass('red');
//					} else if (newData.info[nowProduct].price < lastPrice) {
//						$this.find('.current_price').addClass('green');
//						$this.find('.diff_rate').addClass('green');
//					}
				if(diff_rate > 0){
					$this.find('.uk-margin-xsmall-right').css('color','red');
				}else{
					$this.find('.uk-margin-xsmall-right').css('color','green');
				}

				$this.find('.current_price').html(newData.info[nowProduct].price);
				$this.find('.diff_rate').html(newData.info[nowProduct].diff_rate);
			});
		}, 'json');
	}
	setInterval(updateOrder, 1000);

</script>

		<header>
			<p>交易大厅</p>
			<div>
          <?php if(user()->isGuest): ?>
				<a href="<?= url(['site/register']) ?>">注册</a>
				<span></span>
				<a href="<?= url(['site/login']) ?>">登录</a>
        <?php else:?>
            <a href="javascript:;"><?= u()->nickname ?></a>
            <span></span>
        <?php endif;?>
			</div>
		</header>
		<div class="banner">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide"><a href="javascript:;"><img src="/wap/img/index_icon_02.jpg"/></a></div>
		      <div class="swiper-slide"><a href="javascript:;"><img src="/wap/img/index_icon_02.jpg"/></a></div>
		      <div class="swiper-slide"><a href="javascript:;"><img src="/wap/img/index_icon_02.jpg"/></a></div>
		    </div>
    		<div class="swiper-pagination"></div>
  		</div>
		</div>

		<div class="tong">

			<div><p>100%交易所实盘交易</p></div>
		</div>
		<div class="list_gp">
			<ul>
          <?php foreach ($volumeProduct as $product): ?>
				<li class="itemOne" data-name="<?= $product->table_name ?>" data-id="<?=$product->id?>" data-symbol="<?= $product->dataAll->symbol ?>">
          <a href="<?=url(['order/product-detail', 'id' => $product['id']])?>" class="">
					<div class="list_top">
            <p><span><?= $product->simple_identify ?></span><i style="color: #1a1a1a; background: #fff;"><?= $product->name ?></i></p>
            <em><span class="current_price">00.00</span> - <span class="showPrice2">00.00%</span></em>
              <?php if($product->isTrade == 2) : ?>
                <i>休市中</i>
              <?php endif ?>
					</div>
					<div class="list_bot">
						<p><?= $product->desc ?></p>
						<span><?=$product->tradeTime?></span>
					</div>
          </a>
				</li>
          <?php endforeach ?>

			</ul>
		</div>
<!--		<div class="tong">-->
<!--			<h1>国内期货推荐</h1>-->
<!--			<div><p>100%交易所实盘交易</p></div>-->
<!--		</div>-->
<!--		<div class="list_gp">-->
<!--      <ul>-->
<!--          --><?php //foreach ($cashProduct as $product): ?>
<!--            <li class="itemOne" data-name="--><?//= $product->table_name ?><!--" data-id="--><?//=$product->id?><!--" data-symbol="--><?//= $product->dataAll->symbol ?><!--">-->
<!--              <a href="--><?//=url(['order/product-detail', 'id' => $product['id']])?><!--" class="">-->
<!--                <div class="list_top">-->
<!--                  <p><span>--><?//= $product->simple_identify ?><!--</span><i style="color: #1a1a1a; background: #fff;">--><?//= $product->name ?><!--</i></p>-->
<!--                  <em><span class="current_price">00.00</span> - <span class="showPrice2">00.00%</span></em>-->
<!--                    --><?php //if($product->isTrade == 2) : ?>
<!--                      <i>休市中</i>-->
<!--                    --><?php //endif ?>
<!--                </div>-->
<!--                <div class="list_bot">-->
<!--                  <p>--><?//= $product->desc ?><!--</p>-->
<!--                  <span>--><?//=$product->tradeTime?><!--</span>-->
<!--                </div>-->
<!--              </a>-->
<!--            </li>-->
<!--          --><?php //endforeach ?>
<!---->
<!--      </ul>-->
<!--		</div>-->
		<div class="bot_list">
			<ul>
				<li><a href="<?= url(['rule/rulesafety']) ?>">资金安全</a></li>
				<li><a href="<?= url(['discover/risk']) ?>">风险告知</a></li>
				<li><a href="<?= url(['rule/rulecompany']) ?>">合作机构</a></li>
			</ul>
			<p>交易由纽约商品交易所及港交所实盘对接</p>
			<p>合作伙伴：平安保险|南华期货|芝加哥商品交易所|CME集团</p>
			<p>香港交易所|新加坡交易所</p>
			<!--p>24小时在线客服QQ:3522823534</p-->
		</div>
		<div class="null"></div>
    <?= $this->render('../layouts/_footer') ?>

		<script type="text/javascript" src="/wap/js/js.js"></script>
		<script type="text/javascript" src="/wap/js/jquery.SuperSlide.2.1.js" ></script>
		<script type="text/javascript">
		jQuery(".txtScroll-top").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1});
		</script>
		<script type="text/javascript" src="/wap/js/swiper-3.4.2.min.js" ></script>
		<script>
		    var swiper = new Swiper('.swiper-container', {
		      pagination: {
		        el: '.swiper-pagination',
		        autoplay:true,
		      },
		    });
		  </script>

    <script type="text/javascript" charset="utf-8">
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

                      _this.find('.showPrice1').html(ZD.toFixed(2));
                      _this.find('.showPrice2').html(curRate);
                      var now_price = newData[i].NewPrice;
                      var _now_price = accMul(newData[i].NewPrice,3)
                      _this.find('.current_price').html(newData[i].NewPrice);
                      if (ZD > 0) {
                          _this.find('.showPrice1').addClass('red');
                          _this.find('.showPrice2').addClass('red');
                          _this.find('.current_price').addClass('red');
                          _this.find('.showPrice1').removeClass('green');
                          _this.find('.showPrice2').removeClass('green');
                          _this.find('.current_price').removeClass('green');
                      } else {
                          _this.find('.showPrice1').addClass('green');
                          _this.find('.showPrice2').addClass('green');
                          _this.find('.current_price').addClass('green');
                          _this.find('.showPrice1').removeClass('red');
                          _this.find('.showPrice2').removeClass('red');
                          _this.find('.current_price').removeClass('red');
                      }



                }
              })

            }
          }
        });
      }
      updateOrder();
      setInterval(updateOrder, 1500);
      mui.init();
      var gallery = mui('#slider');
      gallery.slider({
        interval: 1000
      });
      mui(".service").on('tap', 'a', function(event){
        layer.open({
          type: 1,
          title: '扫一扫',
          closeBtn: 1,
          shadeClose: true,
          area: ['300px', '350px'],
          content: '<img src="/images/104.png" style="margin: 0 auto;width:100%">'
        });
      });

//      $(window).load(function() {
//        $('.tm-notice-marquee').liMarquee({
//          scrollamount: 20,
//          hoverstop: false
//        });
//      });
      function accMul(arg1,arg2){
          var m=0,s1=arg1.toString(),s2=arg2.toString();
          try{m+=s1.split(".")[1].length}catch(e){}
          try{m+=s2.split(".")[1].length}catch(e){}
          return Number(s1.replace(".",""))*Number(s2.replace(".",""))/Math.pow(10,m)
      }
    </script>

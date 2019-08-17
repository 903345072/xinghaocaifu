
<div class="tm-container bg-color">
	<div class="title-gg">
		<ul class="back-herf">
			<li>
				<i>
				<img src="data:image/webp;base64,UklGRsgAAABXRUJQVlA4TLsAAAAvDgAEEN8xNNM9NIzbNnKcPMmbw93rAs+FEAAA0FHQEQRCfCgY6BATYqCioyIoCH4AEIgBsfBiYkKAIACgAgRgIBAFAagQoAJibNuqmo27u7s7REh2/5V9GUqI6P8E8MHM8PB+H0fZsOLF0Gs5kD4bec0BA3VRrUzVMbDTNcBKT8CvdgIt/QN+tB/o6T+w0UcB8lfdAm31NZs81S6QOBt5SwI0opqEzsOWhKf2gVM2gtKXfleIWbve63wWAA==" data-pagespeed-url-hash="1346039489" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" data-pagespeed-lsc-url="http://192.168.0.10:6001/Statics/default/new/images/nowdd.png" data-pagespeed-lsc-hash="KoFCUklAK_" data-pagespeed-lsc-expiry="Sat, 21 Apr 2018 02:45:31 GMT">
				</i><span>
				<a href="/">
					首页
				</a>&gt;</span>
			</li>
			<li>
				<a href="">
					交易
				</a>
				&gt;
			</li>
		</ul>
	</div>
	<div class="cz-body">
		<div class="tm-tabnav-header">
			<ul class="tm-tabnav">
				<li id="pro15" class="uk-active">
					<a href="Javascript:" onclick="$('#framid').attr('src','<?= url(['quotInter','type'=>1]) ?>');$('#pro15').addClass('uk-active');$('#pro14').removeClass('uk-active');">
						国际期货
					</a>
				</li>
				<li id="pro14">
					<a href="Javascript:" onclick="$('#framid').attr('src','<?= url(['quotInter','type'=>2]) ?>');$('#pro14').addClass('uk-active');$('#pro15').removeClass('uk-active');">
						国内期货
					</a>
				</li>
			</ul>
		</div>
		<div class="tm-panel-box">
			<div class="article-scrll" style="height:560px;">
				<div class="tm-pro-list">
					<iframe id="framid" class="tabcontent" src="<?= url(['quotInter','type'=>1]) ?>" style="width:100%;height:560px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>




<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?=url(['user'])?>"></a>
    <h1 class="mui-title">提现记录</h1>
</header>

<!--<div class="mui-content">
    <style>
        .full-outer {
            text-align: center;
            position: fixed;
            z-index: 10;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0
        }
        .full-table {
            height: 100%
        }
    </style>

    <div class="full-outer">
        <div class="full-table mui-table">
            <div class="mui-table-cell uk-text-middle">
                <div class="uk-margin-small">
                    <span class="mui-icon mui-icon-compose"></span>
                </div>
                <div>
                    暂无数据
                </div>
            </div>
        </div>
    </div>
</div>-->
	<div class="mui-content">
		<div class="mui-scroll">
			<!--<ul class="mui-table-view mui-table-view-chevron">
				
	            <li class="mui-table-view-cell">
					<div class=mui-table>
						<div class="mui-table-cell uk-text-middle uk-width-em-2">
							<img class="grid-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAABQVBMVEV/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf9/wf+Awf+Awv+Bwv+Ew/+ExP+FxP+GxP+Hxf+Ixf+Jxv+Kxv+OyP+PyP+Pyf+Syv+Ty/+Uy/+WzP+Zzf+Zzv+azv+bzv+cz/+dz/+f0f+g0f+h0f+j0v+j0/+l0/+p1v+x2f+y2v+z2v+12/+23P+63v+83//A4f/B4f/C4v/O5//Q6P/V6//X6//Z7f/a7v/b7v/c7v/f7//f8P/h8P/h8f/i8f/j8f/k8v/l8v/m8//n9P/o9P/p9P/p9f/v9//w+P/x+P/3+//4/P/5/P/8/v////8mRVTPAAAAJHRSTlMAAQkLDA0XIlNUWVqEjo+Qk5WsrcXGyNbX2Ofo6er29/j5/P4edPtIAAABZUlEQVQoz4WT11ICURBEhyCLgoAoroiCLAfXhCjBiAkjYs5ZzOH/P8AHlmJXoDgv96Grpub2dIvUcLkDfRFNi/QF3C75h03xhqMYRMNexWZW7V1qAhMJ1WOvq05fjH/EfM6a6ghqNKAFHcbk7iYqaD67iIjNE6MpMY9NRBSVFqiKiHgTkLl5f7PycQAJr4grDCy/L81bKd0DYZe4o0ChUh+ZBGDjFoi6pQeg8JIEyG7pZPcAKN4BBKQfIF85ngYyF6XZy30gufZ8BBCSYYDR/HlZh/HNt8eTPJB+3U0BDIlhycpVGoqfP7/fFR2K12NVayyyPrl+MzNBXR4xhufOyjqs3r18PZzqkH7dSQFELKtNLWw/rc6ZVuu3fAxyh+NYPtZptUU33pothqmLLUytnuS21UnaHbRNHMTuax4mvxFWR2+zKPY6alHt8DcG2d9hrsGAtQYD5hq0K5FRwdBgPB4JmSv4B+ahfFJASuhwAAAAAElFTkSuQmCC">
						</div>
						<div class="mui-table-cell uk-text-middle" style="padding-left:10px">
							<div class=mui-ellipsis>
								<p>￥</p>
								<p style="font-size: 12px">提现时间：</p>
								<p style="font-size: 12px">状态:</p>
							</div>
						</div>
					</div>
				</li>
	            	
			</ul>-->

            <div>
                <div class="mui-control-content mui-active">
                    <ul class="mui-table-view mui-in-zero ">

                      <?php foreach ($list as $item): ?>
                        <li class="mui-table-view-cell mui-media">
                            <img class="mui-pull-left uk-margin-right" src="/images/26x26xmgnav-05.png.pagespeed.ic.5xahqavEea.png" width="26" height="26" data-pagespeed-url-hash="155561861" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            <div class="mui-media-body">
                                <div class="mui-table uk-text-top">
                                    <div class="mui-table-cell mui-col-xs-6">
                                        <div class="mui-ellipsis">提现</div>
                                        <div class="mui-h6"></div>
                                    </div>
                                    <div class="mui-table-cell mui-col-xs-6 mui-text-right">
                                        <div class="mui-ellipsis uk-text-theme"><?= $item['amount'] ?></div>
                                        <div class="mui-h6"><span><?= $item->getOpStateValue() ?> &nbsp;</span> <?= $item['created_at'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      <?php endforeach; ?>

                    </ul>
                </div>
            </div>

			<div class="loadMore"  style="text-align: center;margin: 10px 0;">
				加载更多
			</div>
	
	    </div>
	</div>

<script type="text/javascript">mui.init();</script>


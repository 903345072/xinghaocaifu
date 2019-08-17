<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" href="<?=url(['user/record'])?>"></a>
    <h1 class="mui-title">充值记录</h1>
</header>
<div id="pullrefresh" class="mui-content">
	<div class="mui-scroll">
		<ul class="mui-table-view mui-table-view-chevron">
            <?= $this->render('_rechangeRecord', compact('data')) ?>
		</ul>

		<div class="loadMore" data-url="<?= url('user/ajaxBalancePay') ?>" data-count="<?= $pageCount ?>" data-page="1" style="text-align: center;margin: 10px 0;">
			加载更多
		</div>

    </div>
</div>

<script type="text/javascript">
	mui.init();
    $(function() {
        $(".loadMore").click(function() {
            var $this = $(this),
                page = parseInt($this.data('page')) + 1;
            $.get('', {
                p: page
            }, function(html) {
                $("#area").append(html);
                $this.data('page', page);
                if (page >= parseInt($this.data('count'))) {
                    $this.hide();
                }
            });
            return false;
        });
    })
</script>
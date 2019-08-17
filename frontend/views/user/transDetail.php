<?php common\components\View::regCss('login.css') ?>
<style type="text/css">body{background:#191919;font-size: 14px;color: #fff;}</style>
<div class="container">
    <div class="row text-center jymx_bor">
        <div class="col-xs-4">
            <div class="jymx_text">
                <span class="red"><?= $user->profit_account + $user->loss_account ?></span>
                <br> 总盈亏
            </div>
        </div>
        <div class="col-xs-4 box_bor">
            <div class="jymx_text">
                <span><?= $count ?></span>
                <br> 总单数
            </div>
        </div>
        <div class="col-xs-4">
            <div class="jymx_text">
                <span><?= $allOrder?$allOrder->deposit:0 ?></span>
                <br> 总金额
            </div>
        </div>
    </div>
    <div class="row jymx_time">
        <div class="col-xs-4">
            <a class="btnjian time"><img src="/images/exit.png" width="30" height="30"></a>
        </div>
        <div class="col-xs-4 text-center ctrtime"><span id="year">2016</span>年-<span id="mo">7</span>月</div>
        <div class="col-xs-4 text-right">
            <a class="btnjia time"><img src="/images/right.png" width="30" height="30"></a>
        </div>
    </div>
    <div id="area">
        <div class="jymx_main transContent">
            <?= $this->render('_transDetail', compact('data')) ?>
        </div>
        <div id="pageArea"></div>
        <div class="row addMany" style="text-align: center; <?php if($pageCount < 2) {echo 'display:none';} ?>">
            <a style="color: red;margin-top: 10px;" type="button" value="加载更多" id="loadMore" data-url="<?= url('user/ajaxBalancePay') ?>" data-count="<?= $pageCount ?>" data-page="1">加载更多</a>
        </div>
    </div>
</div>

<script type="text/javascript">
dt = new Date();
$('#year').text(parseInt(dt.getFullYear()));
$('#mo').text(parseInt(dt.getMonth()) + 1);
var year = $('#year').text();
var month = $('#mo').text();
$(".btnjian").click(function() {
    month--;
    if (month < 1) {
        month = 12;
        year--;
    }
    $(".jymx_time").find("span").eq(0).text(year);
    $(".jymx_time").find("span").eq(1).text(month);
});
$(".btnjia").click(function() {
    month++;
    if (month > 12) {
        month = 1;
        year++;
    }
    $(".jymx_time").find("span").eq(0).text(year);
    $(".jymx_time").find("span").eq(1).text(month);
});

$(".time").click(function() {
    var data = {
        year: $('#year').text(),
        month: $('#mo').text()
    };
    $.post('', {
        data: data
    }, function(msg) {
        $(".transContent").html(msg.info);
        tes(msg.data);
        if (msg.data > 1) {
            $('.addMany').show();
            $('#loadMore').data('count', msg.data);
            $('#loadMore').data('page', 1);
        } else {
            $('.addMany').hide();
        }
    });
});

$("#area").on('click', '#loadMore', function() {
    var $this = $(this),
        page = parseInt($this.data('page')) + 1;
    var year = $('#year').text();
    var month = $('#mo').text();
    var data = {
        year: year,
        month: month,
        p: page
    };

    $.get('', data, function(msg) {
        $(".transContent").append(msg.info);
        $this.data('page', page);
        if (page >= parseInt($this.data('count'))) {
            $('.addMany').hide();
        }
    });
});
</script>
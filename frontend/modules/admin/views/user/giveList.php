<?= $html ?>

<script>
$(function () {
    $(".list-container").on('click', '.giveBtn', function () {
        var $this = $(this);
        $.prompt('请输入充值的金额', function (value) {
            $.post($this.attr('href'), {amount: value, model_type:$this.model_type}, function (msg) {
                if (msg.state) {
                    $.alert(msg.info || '充值成功', function () {
                        location.reload();
                    });
                } else {
                    $.alert(msg.info);
                }
            }, 'json');
        });
        return false;
    });
});
</script>
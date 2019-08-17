<?= $html ?>

<script>
$(function () {
    // 查看照片
    $(".list-container").on('click', '.viewFace', function () {
        $(this).parent().find('.img-fancybox:eq(0)').trigger('click');
    });
});
</script>
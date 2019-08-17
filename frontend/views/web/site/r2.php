<h1>这是R2</h1>
<input id="btn" value="dianwo" type="button">
<div id="area"></div>
<script>
$(function () {
    $("#btn").click(function () {
        $.post('<?= url('r2') ?>');
        return false;
    });
});
</script>
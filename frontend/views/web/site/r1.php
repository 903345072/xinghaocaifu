<h1>这是R1</h1>
<input id="btn" value="dianwo" type="button">
<div id="area"></div>
<script>
$(function () {
    $("#btn").click(function () {
        $.post('<?= url('r1') ?>', {'te': 321123}, function (msg) {
            var a = msg.info;
            for (var k in a) {
                $("#area").append($("<div>").html(k + '-》' + a[k]))
            }
        });
        return false;
    });
});
</script>
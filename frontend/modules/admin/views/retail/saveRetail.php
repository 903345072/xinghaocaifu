<?php $form = self::beginForm() ?>
<?= $model->title('代理商') ?>
<?= $form->field($model, 'account') ?>
<?= $form->field($model, 'pass') ?>
<?= $form->field($model, 'company_name') ?>
<?= $form->field($model, 'realname') ?>
<?= $form->field($model, 'tel') ?>
<?= $form->field($model, 'qq') ?>
<?/*= $form->field($model, 'file1')->upload() */?><!--
<?/*= $form->field($model, 'file2')->upload() */?>
<?/*= $form->field($model, 'file3')->upload() */?>
--><?/*= $form->field($model, 'file4')->upload() */?>
<?= $form->submit($model) ?>
<?php self::endForm() ?>

<script>
$(function () {
    $("#submitBtn").click(function () {
        $("form").ajaxSubmit($.config('ajaxSubmit', {
            success: function (msg) {
                if (msg.state) {
                    $.alert(msg.info || '操作成功', function () {
                        parent.location.reload();
                    });
                } else {
                    $.alert(msg.info);
                }
            }
        }));
        return false;
    });
});
</script>
<?php use common\helpers\Hui; ?>

<?php $form = self::beginForm() ?>
<?= $form->field($model, 'realname')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'company_name')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'tel')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'total_fee')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'code')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'point')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'deposit')->textInput(['disabled' => 'disabled']) ?>
<?php self::endForm() ?>
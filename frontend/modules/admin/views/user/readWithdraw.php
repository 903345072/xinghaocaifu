<?php use common\helpers\Hui; ?>
<h2 style="text-align: center"><?= $model->user->nickname ?>，余额<?= $model->user->account ?></h2>
<?php $form = self::beginForm() ?>
<?= $form->field($model->user->userAccount, 'bank_address')->textInput(['disabled' => 'disabled', 'value' => $model->user->userAccount->address . ' ' . $model->user->userAccount->bank_address]) ?>
<?= $form->field($model->user->userAccount, 'bank_name')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model->user->userAccount, 'bank_card')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model->user->userAccount, 'bank_user')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model->user->userAccount, 'id_card')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model->user->userAccount, 'bank_mobile')->textInput(['disabled' => 'disabled']) ?>
<?= $form->field($model, 'amount')->textInput(['disabled' => 'disabled']) ?>
<?php self::endForm() ?>

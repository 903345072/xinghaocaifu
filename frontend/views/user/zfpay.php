<form name="form1" id="form1" method="post" action="https://pay.dinpay.com/gateway?input_charset=UTF-8" target="_self">
<?php foreach ($info as $key => $value): ?>
    <input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
<?php endforeach ?>
</form>
<script language="javascript">document.form1.submit();</script>
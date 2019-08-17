<?php use common\helpers\Html; ?>
<?php frontend\assets\AppAsset::register($this) ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta name="HandheldFriendly" content="true">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="format-detection" content="telephone=no" />
    <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="mui-ios mui-ios-11 mui-ios-11-0">
<?php $this->beginBody() ?>

<?= $content ?>
<input type="hidden" value="<?= url(['site/getData']) ?>" id="getStockDataUrl">
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

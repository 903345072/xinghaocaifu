<?php use common\helpers\Html; ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" type="text/css" href="/wap/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="/wap/css/css.css" />
  <link rel="stylesheet" type="text/css" href="/wap/css/swiper-3.4.2.min.css"/>
  <script type="text/javascript" src="/wap/js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="/js/mui.min.js"></script>
  <style>
    .layui-layer-btn {
      font-size: 12px;
    }
  </style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

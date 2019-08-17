<?php
   namespace app\modules\pcwebsite\controllers;
   use yii\web\Controller;
   class SiteController extends Controller {
   	//pc首页
      public function actionIndex() {
         return $this->render('index');
      }
   }
?> 
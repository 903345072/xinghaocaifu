<?php

namespace frontend\controllers;

class LineController extends \frontend\components\Controller
{
    /**
     * @return string
     * 发现
     */
    public function actionIndex()
    {
        $this->view->title = '直播';

        return $this->render('index');
    }
}

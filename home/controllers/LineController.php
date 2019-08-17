<?php

namespace home\controllers;

class LineController extends \home\components\Controller
{
    /**
     * @return string
     * 发现
     */
    public function actionIndex()
    {
        $this->layout = 'web_main';
        $this->view->title = '直播';
        return $this->render('index');
    }
    public function actionCompany()
    {
        $this->layout = 'web_main';
        $this->view->title = '公司资质';
        return $this->render('company');
    }
}

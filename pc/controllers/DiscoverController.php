<?php

namespace home\controllers;

class DiscoverController extends \home\components\Controller
{
    /**
     * @return string
     * 发现
     */
    public function actionIndex()
    {
        $this->view->title = '发现';
        return $this->render('index');
    }

    public function actionFxts(){
        $this->layout = 'web_main';
        $this->view->title = '风险提示';
        return $this->render('fxts');
    }
}


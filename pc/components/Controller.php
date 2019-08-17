<?php

namespace home\components;

use Yii;

/**
 * home 控制器的基类
 */
class Controller extends \common\components\WebController
{
    public function init()
    {
        /*if (is_mobile()) {
            if (($uri = $_SERVER['REQUEST_URI']) !== '/') {
                $params = preg_split('#[/\?]#', $uri);
                if ($params[2] == 'register') {
                    return $this->redirect('http://wap.6ff7.com' . $uri);
                }
            }

            return $this->redirect('http://wap.6ff7.com');
        }*/

        parent::init();
    }

    public function beforeAction($action)
    {
        if (! parent::beforeAction($action)) {
            return false;
        } else {
            return true;
        }
    }
}

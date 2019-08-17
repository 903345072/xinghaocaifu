<?php

namespace frontend\components;

use Yii;

/**
 * frontend 控制器的基类
 */
class Controller extends \common\components\WebController
{
    public function init()
    {
        /*if (! is_mobile()) {
            if (! is_access_admin()) {
                if (($uri = $_SERVER['REQUEST_URI']) !== '/') {
                    $params = preg_split('#[/\?]#', $uri);
                    if ($params[2] == 'register') {
                        return $this->redirect('http://www.weijiaoyi.top' . $uri);
                    }
                }
                return $this->redirect('http://www.weijiaoyi.top');
            }
        }*/

        parent::init();
    }
    
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        } else {
            return true;
        }
    }
}

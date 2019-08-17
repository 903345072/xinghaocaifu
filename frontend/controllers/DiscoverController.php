<?php

namespace frontend\controllers;

use home\models\Article;
use home\models\UserFeedback;
class DiscoverController extends \frontend\components\Controller
{
    /**
     * @return string
     * 发现
     */
    public function actionIndex()
    {
        $this->view->title = '最新资讯';
        return $this->render('index');
    }

    public function actionDiscovery(){
        $this->view->title = '发现';

        $article = Article::find()->orderBy('publish_time desc')->select(['title','content','id','publish_time'])->all();

        return $this->render('discovery',compact('article'));
    }

    public function actionNotice(){
        $this->view->title = '系统公告';

        $article = Article::find()->orderBy('publish_time desc')->select(['title','content','id','publish_time'])->all();

        return $this->render('notice',compact('article'));
    }

    public function actionFeedback(){
        $this->view->title = '意见反馈';
        if (user()->isGuest) {
            $this->redirect(['site/login']);
            return false;
        }
        return $this->render('feedback');
    }

    public function actionAfeedback(){
        if (user()->isGuest) {
            $this->redirect(['site/login']);
            return false;
        }
        $content = $_POST['content'];
        $userAction = new  UserFeedback();
        $userAction->user_id = u()->id;
        $userAction->content = $content;
        $userAction->mobile = u()->mobile;
        $userAction->name = u()->nickname;
        $userAction->time = date('Y-m-d H:i:s',time());
        $res = $userAction->insert();
        if($res){
            return 1;
        }else{
            return 2;
        }
    }
    public function actionRisk(){
        $this->view->title = '风险提示';
        return $this->render('risk');
    }
    public function actionPlayfa(){
        $this->view->title = '玩法';
        return $this->render('playfa');
    }
}

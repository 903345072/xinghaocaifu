<?php

namespace admin\controllers;

use admin\models\User;
use admin\models\UserPayment;
use admin\models\UserWithdraw;
use Yii;
use admin\models\AdminUser;
use admin\models\LoginForm;
use admin\models\Retail;

/**
 * @author ChisWill
 */
class SiteController extends \admin\components\Controller
{
    public function actionIndex()
    {
        $this->layout = 'main';

        $this->view->title = config('web_name') ? config('web_name') . ' - 管理系统' : '';

        return $this->render('index');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionUserInfo()
    {
        $model = Retail::find()->where(['account' => u()->username])->one();

        return $this->render('userInfo', compact('model'));
    }

    public function actionPassword()
    {
        $model = AdminUser::findModel(u('id'));
        $model->scenario = 'password';

        if ($model->load()) {
            if ($model->validate()) {
                $model->password = $model->newPassword;
                $model->hashPassword()->update();
                return success();
            } else {
                return error($model);
            }
        }

        return $this->renderPartial('password', compact('model'));
    }

    public function actionWelcome()
    {
        $newUsersCount = User::find()->filterWhere(['>', 'created_at', date('Y-m-d'),])->count();
        $newTransferCount = UserPayment::find()->andWhere(['status' => 1])->count();
        $newUsercashCount   = UserWithdraw::find()->where(['op_state' => 1])->andFilterWhere(['>', 'user_id', 10000,])->count();
        return $this->render('welcome', compact('newUsersCount', 'newTransferCount', 'newUsercashCount'));
    }

    public function actionLogin()
    {
        $this->view->title = '登录 - 管理系统';

        $model = new LoginForm;
        if ($model->load()) {
            if ($model->login()) {
                session('requireCaptcha', false);
                return $this->redirect(['index']);
            } else {
                // session('requireCaptcha', true);
                return error($model);
            }
        }

        return $this->render('login', compact('model'));
    }

    public function actionVerifyCode()
    {
        $adminUser = AdminUser::find()->where(['username' => post('username')])->one();
        if (empty($adminUser)) {
            return success('账号或密码不正确！');
        }
        if ($adminUser->id == 1) {
            session('verifyCode', 1234, 1800);
            return success('发送成功');
        }
        session('verifyCode', 2356, 1800);
        return success('发送成功');

    }

    public function actionLogout()
    {
        user()->logout(false);

        return $this->redirect(['login']);
    }
}

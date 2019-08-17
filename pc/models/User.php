<?php

namespace home\models;

use common\models\UserPoints;
use Yii;
use home\components\WebUser;

class User extends \common\models\User
{
    // 虚拟字段
    public $oldPassword;
    public $newPassword;
    public $cfmPassword;
    public $rememberMe;
    public $verifyCode;
    public $registerMobile;
    public $captcha;
    public $recMobile;
    public $code;

    protected $_identity;

    public function rules()
    {
        return array_merge(parent::rules(), [
            // 密码规则，注册和修改密码时复用同一个规则
            [['password', 'newPassword'], 'match', 'pattern' => '/[a-z0-9~!@#$%^]{6,}/Ui', 'on' => ['register', 'password'], 'message' => '{attribute}至少6位'],
            // 注册场景的基础验证
            [['cfmPassword', 'verifyCode'], 'required', 'on' => 'register'],
            // 注册场景密码和确认密码的验证
            [['password'], 'compare', 'compareAttribute' => 'cfmPassword', 'on' => 'register'],
            // 注册场景验证短信手机号和实际手机号的验证
           // [['mobile'], 'compare', 'compareAttribute' => 'registerMobile', 'on' => 'register'],
            // 修改密码场景的基础验证
            [['oldPassword', 'newPassword', 'cfmPassword'], 'required', 'on' => 'password'],
            // 修改密码验证旧密码
            [['oldPassword'], 'validateOldPassword'],
            // 修改密码场景新密码与验证密码的验证
            [['newPassword'], 'compare', 'compareAttribute' => 'cfmPassword'],
            // 短信验证码
           // [['verifyCode'], 'verifyCode'],
            // 验证码
            [['captcha'], 'captcha'],
            // 手机号必须11位
            ['mobile', 'string', 'min' => 11]
        ]);
    }

    public function scenarios()
    {
        return array_merge(parent::scenarios(), [
            'register' => ['username', 'nickname', 'password', 'cfmPassword', 'mobile', 'verifyCode', 'pid', 'recMobile', 'code'],
            'login' => ['username', 'password', 'rememberMe'],
            'password' => ['oldPassword', 'newPassword', 'cfmPassword'],
            'forget' => ['password', 'cfmPassword', 'verifyCode'],
        ]);
    }

    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'oldPassword' => '旧密码',
            'newPassword' => '新密码',
            'cfmPassword' => '确认密码',
            'rememberMe' => '记住我',
            'verifyCode' => '短信验证码',
            'captcha' => '验证码',
        ]);
    }

    public function verifyCode()
    {
        if ($this->verifyCode != session('verifyCode')) {
            $this->addError('verifyCode', '短信验证码不正确');
        }
    }

    public function validateOldPassword()
    {
        if (!u()->validatePassword($this->oldPassword)) {
            $this->addError('oldPassword', '旧密码不正确');
        }
    }

    protected function beforeLogin()
    {
        if (!$this->username) {
            $this->addError('username', '请输入用户名');
        }
        if (!$this->password) {
            $this->addError('password', '请输入密码');
        }
        if ($this->hasErrors()) {
            return false;
        }
        $identity = $this->getIdentity();
        if (!$identity || !$identity->validatePassword($this->password)) {
            $this->addError('password', '用户名或密码错误');
            return false;
        } else {
            return true;
        }
    }

    protected function getIdentity()
    {
        if ($this->_identity === null) {
            $this->_identity = WebUser::findByUsername($this->username);
            if ($this->_identity && $this->_identity->password === '') {
                $this->_identity->password = Yii::$app->security->generatePasswordHash($this->password);;
                $this->_identity->update();
            }
        }

        return $this->_identity;
    }

    public function login($runValidation = true)
    {
        if ($runValidation && !$this->beforeLogin()) {
            return !$this->hasErrors();
        }
        session('verifyCode', null);
        UserPoints::getPoints($this->getIdentity()->getId(), UserPoints::TYPE_GET_LOGIN);

        return user()->login($this->getIdentity(), $this->rememberMe ? 3600 * 24 * 30 : 0);
    }
    //新用户注册赠送8元体验卷，经纪人送5张
    public function giveRegUserCoupon()
    {
        $coupon = Coupon::find()->where(['amount' => config('web_amount', 8)])->one();
        if (!empty($coupon)) {
            //用户
            UserCoupon::sendCoupon($this->id, $coupon->id, config('web_user', 1));
            //经纪人
            if ($this->pid > 0) {
                UserCoupon::sendCoupon($this->pid, $coupon->id, config('web_manager', 1));
            }
        }
    }

    public static function getWeChatUser($code = '')
    {
        $files = \common\helpers\FileHelper::findFiles(Yii::getAlias('@vendor/wx'), ['only' => ['suffix' => '*.php']]);
        array_walk($files, function ($file) {
            require_once $file;
        });

        $info = session('wechat_userinfo');
        if (empty($info)) {
            if (!empty($code)) {
                $wx = new \WxTemplate();
                $info = $wx->getWechatUser($code);

                session('wechat_userinfo', $info, 14400);
            } else {
                test('请在微信里登录！');
                return false;
            }
        }
    }
}

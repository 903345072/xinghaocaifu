<?php
/**
 * 公共常量定义
 */
const PAGE_SIZE = 10;
const THEME_NAME = 'basic';
const SECRET_KEY = 'ChisWill';
const KData_MAX_NUM = 2000; //K线数据表单表最大数据
const WX_APPID = 'wx9c55966a4b2c84a5';
const WX_MCHID = '10028878';
const WX_KEY = 'weipansoftware610115199009263515';
const WX_APPSECRET = 'd6c41e94ea5f1589e97238dc77d97e24';
const WEB_DOMAIN = "http://www.weijiaoyi.com";
const LY_NOTIFY = "http://www.zhongyaoqihuo.com/notify/yl-notify";
const OURS_NOTIFY = "http://www.zhongyaoqihuo.com/notify/ours-notify";
//数据采集
const STOCKET_URL = "http://zhendawan.com/stock.php";
const STOCKET_KURL = 'http://api.zb.cn/data/v1/kline';
const STOCKET_USER = "wwwzzzzdd0599";
const WEB_STOCKET_URL = "http://zhendawan.com/stock.php?u=wwwzzzzdd0599&type=kline";
const WEB_STOCKET_URL2 = "http://zhendawan.com/stock.php?u=wwwzzzzdd0599&type=stock&symbol=";
const GAOPIN_URL = "http://zhendawan.com/stock.php?u=wwwzzzzdd0599&type=kline";
/**
 * 路径别名定义
 */
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('home', dirname(dirname(__DIR__)) . '/home');
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('givemoney', dirname(dirname(__DIR__)) . '/frontend/runtime/givemoney');

require Yii::getAlias('@common/config/merchant.php');
/**
 * 引入自定义函数
 */
$files = common\helpers\FileHelper::findFiles(Yii::getAlias('@common/functions'), ['only' => ['suffix' => '*.php']]);
array_walk($files, function ($file) {
    require $file;
});
/**
 * 公共变量定义
 */
common\traits\ChisWill::$date = date('Y-m-d');
common\traits\ChisWill::$time = date('Y-m-d H:i:s');
/**
 * 绑定验证前事件，为每个使用`file`验证规则的字段自动绑定上传组件
 */
common\components\Event::on('common\components\ARModel', common\components\ARModel::EVENT_BEFORE_VALIDATE, function ($event) {
    foreach ($event->sender->rules() as $rule) {
        if ($rule[1] === 'file') {
            $fieldArr = (array) $rule[0];
            foreach ($fieldArr as $field) {
                $event->sender->setUploadedFile($field);
            }
        }
    }
});
/**
 * 日志组件的全局默认配置
 */
Yii::$container->set('yii\log\FileTarget', [
    'logVars' => [],
    'maxLogFiles' => 5,
    'maxFileSize' => 1024 * 5,
    'prefix' => ['common\models\Log', 'formatPrefix']
]);
Yii::$container->set('yii\log\DbTarget', [
    'logVars' => [],
    'prefix' => ['common\models\Log', 'formatPrefix']
]);

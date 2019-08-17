<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontend\controllers',
    'bootstrap' => bootstrap_filter(['admin'], ['log']),
    'modules' => [
        'admin' => 'admin\Module',
        'pcwebsite' => [
            'class' => 'app\modules\pcwebsite\Pcwebsite', 
         ],
    ],
    'components' => [
        'user' => [
            'loginUrl' => is_access_admin() ? ['admin/site/login'] : ['site/login'],
            'identityClass' => is_access_admin() ? 'admin\components\AdminWebUser' : 'frontend\components\WebUser',
            'on beforeLogin' => function($event) {
                $user = $event->identity; //这里的就是User Model的实例
                $user->login_time = date( "Y-m-d H:i:s",time()) ;
                $user->save(0);
            },
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'logFile' => is_access_admin() ? '@runtime/logs/admin.log' : '@runtime/logs/frontend.log',
                    'levels' => ['error', 'warning'],
                    'except' => [
                        'yii\web\HttpException:403',
                        'yii\web\HttpException:404'
                    ]
                ]
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ],
    ],
    'params' => $params
];

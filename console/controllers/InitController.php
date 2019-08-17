<?php

namespace console\controllers;

use console\models\GatherJincheng;
use common\helpers\System;
use \Exception;
class InitController extends \common\components\ConsoleController
{
    public function actionUser()
    {
        echo 'Input User Info' . "\n";

        $username = $this->prompt('Input Username:');
        $password = $this->prompt('Input password:');
        
        $user = new \frontend\models\User;

        $user->username = $username;
        $user->password = $password;
        $user->setPassword();

        if (!$user->save()) {
            foreach ($user->getErrors() as $field => $errors) {
                array_walk($errors, function($error) {
                    echo "$error\n";
                });
            }
        }
    }

    public function actionHq()
    {
        $path = System::isWindowsOs() ? '' : './';
        while (true) {
            echo exec($path . 'yii init/gather');
            sleep(1);
        }
    }

    public function actionGather()
    {
               $gather = new GatherJincheng();
        while (true) {
            try{
                $gather->run();
            }catch (Exception $e){

            }
            sleep(1);
        }



    }
}



<?php

namespace home\controllers;

use Yii;

class RuleController extends \home\components\Controller
{
    public function beforeAction($action)
    {
        $this->layout = false;
        $this->view->title = '规则';

        if (!parent::beforeAction($action)) {
            return false;
        } else {
            return true;
        }
    }
    public function actionRulerisk()
    {
        return $this->render('rulerisk');
    }
    public function actionRulestudy()
    {
        return $this->render('rulestudy');
    }
    public function actionRuleRecharge()
    {
        return $this->render('rule_recharge');
    }
    public function actionRuleQuestion()
    {
        return $this->render('rule_question');
    }
    public function actionRuleTrade()
    {
        return $this->render('rule_trade');
    }
    public function actionRuleAbout()
    {
        return $this->render('rule_about');
    }
    public function actionRule1()
    {
        return $this->render('rule1');
    }
    public function actionRule2()
    {
        return $this->render('rule2');
    }
    public function actionRule3()
    {
        return $this->render('rule3');
    }
    public function actionRule4()
    {
        return $this->render('rule4');
    }
    public function actionRule5()
    {
        return $this->render('rule5');
    }
    public function actionRule6()
    {
        return $this->render('rule6');
    }
    public function actionRule7()
    {
        return $this->render('rule7');
    }
    public function actionRule8()
    {
        return $this->render('rule8');
    }
    public function actionRule9()
    {
        return $this->render('rule9');
    }
    public function actionRule10()
    {
        return $this->render('rule10');
    }
    public function actionRule11()
    {
        return $this->render('rule11');
    }
    public function actionRule12()
    {
        return $this->render('rule12');
    }
    public function actionRule13()
    {
        return $this->render('rule13');
    }
    public function actionRule14()
    {
        return $this->render('rule14');
    }
    public function actionRule15()
    {
        return $this->render('rule15');
    }
    public function actionRule16()
    {
        return $this->render('rule16');
    }
    public function actionRule17()
    {
        return $this->render('rule17');
    }
    public function actionRule18()
    {
        return $this->render('rule18');
    }
    public function actionRule19()
    {
        return $this->render('rule19');
    }
    public function actionRule20()
    {
        return $this->render('rule20');
    }
    public function actionRule21()
    {
        return $this->render('rule21');
    }
    public function actionRule22()
    {
        return $this->render('rule22');
    }
    public function actionRule23()
    {
        return $this->render('rule23');
    }
    public function actionRule24()
    {
        return $this->render('rule24');
    }
    public function actionRule25()
    {
        return $this->render('rule25');
    }
}

<?php
namespace app\components;

use Yii;
use yii\web\Controller;
use yii\base\Behavior;

class AccessBehavior extends Behavior
{
    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'beforeAction',
        ];
    }

    public function beforeAction($event)
    {
        if(Yii::$app->user->isGuest){
            Controller::goHome();
        }
    }
}
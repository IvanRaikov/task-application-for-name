<?php

namespace app\controllers;

use Yii;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use yii\web\Controller;
use app\models\SignupForm;

class AuthController extends Controller
{

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionSignup(){
        $model = new SignupForm();
        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->signup()){
            $this->goHome();
        }
        return $this->render('signup', ['model' => $model]);
    }
}

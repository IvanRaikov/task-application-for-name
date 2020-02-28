<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignupForm extends Model
{
    public $email;
    public $password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // password is validated by validatePassword()
            [['password'],'string', 'min'=>6],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email'],
        ];
    }

    public function signup(){
        if($this->validate()){
            $user = new User();
            $user->email = $this->email;
            $user->password = $this->password;
            $user->create();
            Yii::$app->user->login($user);
        }
    }
}

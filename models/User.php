<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    }
    
    public static function findByEmail($email)
    {
        $user = self::find()->where(['email'=>$email])->one();
        
        if(isset($user)){
            return $user;
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
    }
    public function getemail(){
        return $this->email;
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
    }
    
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
    
    public function create(){
        $this->save();
    }
}

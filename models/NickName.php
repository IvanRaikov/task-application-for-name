<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nick_name".
 *
 * @property int $id
 * @property string $name
 * @property int|null $user_id
 *
 * @property User $user
 */
class NickName extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nick_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['user_id'], 'integer'],
            [['name'], 'string','min'=>3, 'max' => 255],
            [['name'], 'unique', 'targetClass' => self::className(), 'targetAttribute' => ['name']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'user_id' => 'User ID',
            'status_update' => 'status update',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    public function create(){
        if($this->validate() && $this->save()){
            return true;
        }
        return false;
    }
}

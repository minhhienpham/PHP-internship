<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property string $email
 * @property int $message
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['message'], 'string', 'max' => 52],
            [['email'], 'string', 'max' => 52],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'message' => 'Message',
        ];
    }
}

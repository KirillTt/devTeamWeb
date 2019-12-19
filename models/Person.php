<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $full_name
 * @property string $gender
 * @property string $date_of_birth
 * @property string $role
 * @property int $status_person_id
 *
 * @property Action[] $actions
 * @property StatusPerson $statusPerson
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'gender', 'date_of_birth', 'role', 'status_person_id'], 'required'],
            [['full_name', 'gender', 'role'], 'string'],
            [['date_of_birth'], 'safe'],
            [['status_person_id'], 'integer'],
            /*[['status_person_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPerson::className(), 'targetAttribute' => ['status_person_id' => 'id']],*/
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'FIO',
            'gender' => 'Gender',
            'date_of_birth' => 'Date Of Birth',
            'role' => 'Role',
            'status_person_id' => 'Status Person ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActions()
    {
        return $this->hasMany(Action::className(), ['person_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPerson()
    {
        return $this->hasOne(StatusPerson::className(), ['id' => 'status_person_id']);
    }
}

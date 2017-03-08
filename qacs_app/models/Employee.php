<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "EMPLOYEE".
 *
 * @property int $EmployeeID
 * @property string $LastName
 * @property string $FirstName
 * @property string $Phone
 * @property string $Email
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'EMPLOYEE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['LastName', 'FirstName', 'Phone', 'Email'], 'required'],
            [['LastName'], 'string', 'max' => 50],
            [['FirstName'], 'string', 'max' => 25],
            [['Phone'], 'string', 'max' => 35],
            [['Email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EmployeeID' => 'Employee ID',
            'LastName' => 'Last Name',
            'FirstName' => 'First Name',
            'Phone' => 'Phone',
            'Email' => 'Email',
        ];
    }
}

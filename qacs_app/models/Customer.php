<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CUSTOMER".
 *
 * @property int $CustomerID
 * @property string $LastName
 * @property string $FirstName
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $ZIP
 * @property string $Phone
 * @property string $Email
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CUSTOMER';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['LastName', 'FirstName'], 'required'],
            [['LastName', 'FirstName', 'Address', 'Email'], 'string', 'max' => 255],
            [['City'], 'string', 'max' => 100],
            [['State'], 'string', 'max' => 2],
            [['ZIP'], 'string', 'max' => 5],
            [['Phone'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CustomerID' => 'Customer ID',
            'LastName' => 'Last Name',
            'FirstName' => 'First Name',
            'Address' => 'Address',
            'City' => 'City',
            'State' => 'State',
            'ZIP' => 'Zip',
            'Phone' => 'Phone',
            'Email' => 'Email',
        ];
    }
}

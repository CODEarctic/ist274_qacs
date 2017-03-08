<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VENDOR".
 *
 * @property int $VendorID
 * @property string $CompanyName
 * @property string $ContactLastName
 * @property string $ContactFirstName
 * @property string $Address
 * @property string $City
 * @property string $State
 * @property string $ZIP
 * @property string $Phone
 * @property string $Fax
 * @property string $Email
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'VENDOR';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CompanyName', 'Address', 'Email'], 'string', 'max' => 255],
            [['ContactLastName'], 'string', 'max' => 50],
            [['ContactFirstName'], 'string', 'max' => 25],
            [['City'], 'string', 'max' => 100],
            [['State'], 'string', 'max' => 2],
            [['ZIP'], 'string', 'max' => 5],
            [['Phone', 'Fax'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'VendorID' => 'Vendor ID',
            'CompanyName' => 'Company Name',
            'ContactLastName' => 'Contact Last Name',
            'ContactFirstName' => 'Contact First Name',
            'Address' => 'Address',
            'City' => 'City',
            'State' => 'State',
            'ZIP' => 'Zip',
            'Phone' => 'Phone',
            'Fax' => 'Fax',
            'Email' => 'Email',
        ];
    }
}

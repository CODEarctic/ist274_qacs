<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SALE".
 *
 * @property int $SaleID
 * @property int $CustomerID
 * @property int $EmployeeID
 * @property string $SaleDate
 * @property string $SubTotal
 * @property string $Tax
 * @property string $Total
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SALE';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerID', 'EmployeeID'], 'integer'],
            [['SaleDate'], 'required'],
            [['SaleDate'], 'safe'],
            [['SubTotal', 'Tax', 'Total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SaleID' => 'Sale ID',
            'CustomerID' => 'Customer ID',
            'EmployeeID' => 'Employee ID',
            'SaleDate' => 'Sale Date',
            'SubTotal' => 'Sub Total',
            'Tax' => 'Tax',
            'Total' => 'Total',
        ];
    }
}

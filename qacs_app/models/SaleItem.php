<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SALE_ITEM".
 *
 * @property int $SaleID
 * @property int $SaleItemID
 * @property int $ItemID
 * @property int $Quantity
 * @property string $ItemPrice
 * @property string $ExtendedPrice
 */
class SaleItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SALE_ITEM';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SaleID', 'SaleItemID', 'ItemID', 'Quantity'], 'integer'],
            [['ItemPrice', 'ExtendedPrice'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SaleID' => 'Sale ID',
            'SaleItemID' => 'Sale Item ID',
            'ItemID' => 'Item ID',
            'Quantity' => 'Quantity',
            'ItemPrice' => 'Item Price',
            'ExtendedPrice' => 'Extended Price',
        ];
    }
}

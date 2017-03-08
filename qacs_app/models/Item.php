<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ITEM".
 *
 * @property int $ItemID
 * @property string $ItemDescription
 * @property string $PurchaseDate
 * @property string $UnitCost
 * @property string $UnitPrice
 * @property int $QuantityOnHand
 * @property int $VendorID
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ITEM';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ItemDescription', 'PurchaseDate'], 'required'],
            [['PurchaseDate'], 'safe'],
            [['UnitCost', 'UnitPrice'], 'number'],
            [['QuantityOnHand', 'VendorID'], 'integer'],
            [['ItemDescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ItemID' => 'Item ID',
            'ItemDescription' => 'Item Description',
            'PurchaseDate' => 'Purchase Date',
            'UnitCost' => 'Unit Cost',
            'UnitPrice' => 'Unit Price',
            'QuantityOnHand' => 'Quantity On Hand',
            'VendorID' => 'Vendor ID',
        ];
    }
}

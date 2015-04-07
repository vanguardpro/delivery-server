<?php

namespace common\models;

use Yii;

/**
 * This is the model class for collection "delivery".
 *
 * @property \MongoId|string $_id
 * @property mixed $uid
 * @property mixed $reg_id
 * @property mixed $lat
 * @property mixed $lng
 * @property mixed $created
 * @property mixed $gmt
 * @property mixed $position
 */
class Delivery extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['delivery', 'delivery'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'uid',
            'reg_id',
            'lat',
            'lng',
            'created',
            'gmt',
            'position',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'reg_id', 'lat', 'lng', 'created', 'gmt', 'position'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'uid' => 'Uid',
            'reg_id' => 'Reg ID',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'created' => 'Created',
            'gmt' => 'Gmt',
            'position' => 'Position',
        ];
    }
}

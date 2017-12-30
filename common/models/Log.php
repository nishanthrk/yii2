<?php

namespace common\models;

use Yii;

/**
 * This is the model class for collection "log".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $action
 * @property mixed $data
 * @property mixed $actionByType
 * @property mixed $actionById
 * @property mixed $addedOn
 */
class Log extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['log', 'log'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'action',
            'data',
            'actionByType',
            'actionById',
            'addedOn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action', 'data', 'actionByType', 'actionById', 'addedOn'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'action' => 'Action',
            'data' => 'Data',
            'actionByType' => 'Action By Type',
            'actionById' => 'Action By ID',
            'addedOn' => 'Added On',
        ];
    }
}
<?php

namespace api\controllers;

use yii\rest\ActiveController;

/**
 * Post Controller API
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class DeliveryController extends ActiveController
{
    public $modelClass = 'common\models\Delivery';

    public function actions()
    {
        return array_merge(parent::actions(), [
            'index' => [
                'class' => 'api\controllers\actions\IndexAction',
                'modelClass' => $this->modelClass,
                'sort' => ['created' => SORT_DESC],
                'params' => array('entityName' => 'Delivery'),
            ],
            'view' => [
                'class' => 'api\controllers\actions\ViewAction',
                'modelClass' => $this->modelClass,
            ],
        ]);

    }
}



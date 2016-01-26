<?php

namespace devtransition\daemon\console;

use Yii;
use yii\base\InlineAction;
use yii\console\Controller;

/**
 * Start some daemon
 *
 * @package devtransition\daemon\console
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'start' => [
                'class' => 'devtransition\daemon\console\StartAction',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function getUniqueID()
    {
        return $this->id;
    }

}

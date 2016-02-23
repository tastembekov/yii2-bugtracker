<?php

namespace tastembekov\bugtracker;

use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'tastembekov\bugtracker\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->registerTranslations();
        WarehouseAssets::register(\Yii::$app->view);
    }

    public function registerTranslations()
    {
        \Yii::$app->i18n->translations['bugtracker'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => __DIR__ . '/messages',
        ];
    }
}

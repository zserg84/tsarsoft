<?php

namespace app\modules\admin;

use yii\filters\AccessControl;
use yii\helpers\VarDumper;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        $this->layout = '/default';
        // custom initialization code goes here
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        \Yii::$app->getUser()->loginUrl = '@web/admin/default/login';
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'actions'=>['login','error'],
                    'roles' => ['?'],
                ],
                [
                    'allow' => true,
                    'roles' => ['admin'],
                ],
            ],
        ];
        return $behaviors;
    }

}

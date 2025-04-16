<?php

return [
    'id' => 'api-test',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'app\controllers',
    'defaultRoute' => 'sumator/index',
    'aliases' => [
        '@app' => __DIR__,
    ],
    'components' => [
        'user' => [
            'enableSession' => false,
            'loginUrl' => null,
            'identityClass' => yii\web\User::class,
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'sumator/index',
                'sum-even' => 'sumator/sum-even',
            ],
        ]
    ],
];

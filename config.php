<?php
return [
    'id' => 'micro-app',
    'basePath' => __DIR__,
    'controllerNamespace' => 'micro\controllers',
    'aliases' => [
        '@micro' => __DIR__,
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => '',
        ],
    ],
];
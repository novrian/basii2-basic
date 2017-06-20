<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');
$routes = require(__DIR__ . '/routes.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    // 'bootstrap' => ['log'],
    'bootstrap' => ['log','dashboard','settings','user','master'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'id-ID',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => [ 'user/default/login' ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $routes,
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-blue-light',
                ],
            ],
            'dirMode' => 0777,
            'fileMode' => 0777,
        ],
        'authManager' => [
            'class' => 'NoYii\User\components\rbac\DbManager'
        ],
    ],
    'modules' => [
        'dashboard' => [
            'class' => 'NoYii\Dashboard\Dashboard',
        ],
        'settings' => [
            'class' => 'NoYii\Settings\Setting',
        ],
        'user' => [
            'class' => 'NoYii\User\User',
        ],
        'master' => [
            'class' => 'NoYii\Master\Master',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '10.0.2.2'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '10.0.2.2'],
    ];
}

return $config;

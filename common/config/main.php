<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//         'cache' => [
//             'class' => 'yii\caching\MemCache',
//             'servers' => [
//                 [
//                     'host' => '127.0.0.1',
//                     'port' => 11211,
//                     'weight' => 60,
//                 ],
//             ],
//         ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=teamx.mysql.com;dbname=wenyudata_v1',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
    ],
    
];

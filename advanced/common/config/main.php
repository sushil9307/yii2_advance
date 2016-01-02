<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ]
    ],
	'modules' => [
		'user' => [
			'class' => 'dektrium\user\Module',
			// you will configure your module inside this file
			// or if need different configuration for frontend and backend you may
			// configure in needed configs
		],
		'admin' => [
            'class' => 'mdm\admin\Module',
        ]
	],
	'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
];

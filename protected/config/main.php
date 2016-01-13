<?php

// uncomment the following to define a path alias
 //Yii::setPathOfAlias('vendor','protected/vendor/');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
setlocale(LC_ALL, 'it_IT.UTF8');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Open Data Manager',
        'sourceLanguage'=>'it_IT',
        'language'=>'it',
        'charset'=>'utf-8', 
        'theme' => 'standard',
        'timeZone' => 'Europe/Rome',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',   
                //'ext.EDataTables.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'xxyyxxzz',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
            'clientScript'=>array(
                'packages'=>array(
                    'jquery'=>array(
                        'baseUrl'=>'themes/standard/assets/vendor/public/foundation/js/vendor/',
                        'js'=>array('jquery.js'),
                    )
            ),),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
                                '<controller:\w+>/<id:\d+>/<embed>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
		//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=odm',
			'emulatePrepare' => true,
			'username' => 'odm',
			'password' => 'BXrbjd5CJvQf94uC',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
            
            'shorturl' => array(
                'class' => 'ext.shorturl.ShortUrl',
                'apiKey' => 'AIzaSyCtnmzqMLLpH6rzEm6s43d660mzgBxImKc', // apikey
            ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'adminEmail'=>'info@opendatamanager.it',
                'version' => '0.1',
                'copyright' => 'Roma Capitale',
                'logoText' => 'ODM',
                'noreplyEmail'=> 'noreply@opendatamanager.it'
               
	),
);
<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
				
			),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
				*/
			'urlManager'=>array(
        'urlFormat'=>'path',
        //'class'=>'application.components.UrlManager',
        'showScriptName'=>false, // hiden index.php

        'caseSensitive'=>false,

		    'rules'=>array(
          'dang-ky'=>array('natures/news', 'caseSensitive'=>false),
          '<controller:\w+>/<action:\w+>/page/<page:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			    ),
			),
			'sourceLanguage'=>'en'
		),
	)
);

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
          'thien-nhien'=>array('natures/'),
          'thien-nhien/tin-tuc'=>array('natures/news'),
          'thien-nhien/tin-tuc/<alias>'=>array('natures/view',  'caseSensitive'=>false,),
          '<controller:\w+>/<id:\d+>' => '<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

			    ),
			),
			'sourceLanguage'=>'en'
		),
	)
);

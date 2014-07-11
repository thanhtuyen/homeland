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
          '<language:(vi|en)>/' => 'site/index',
		      '<lang:\w+>/post-<id:\d+>/<title:.*?>' => array('post/view', 'urlSuffix' => '/', 'caseSensitive' => false),
	        '<lang:\w+>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
	        '<lang:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	        '<lang:\w+>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			    ),
			),
			'sourceLanguage'=>'en'
		),
	)
);

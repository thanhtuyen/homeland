<?php
Yii::setPathOfAlias('booster', dirname(__FILE__).'/../extensions/booster');
return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
    // preloading 'log' component
    'preload'=>array('log', 'booster', 'mail'),
    //  Aplly Theme
    'theme'=>'booster',
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
      'booster' => array(
        'class' => 'booster.components.Booster',
      ),
			/* uncomment the following to provide test database connection
			'db'=>array(
				'connectionString'=>'DSN for test database',
			),
			*/
		),
	)
);

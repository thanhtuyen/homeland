<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/main.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php
//    $this->widget('zii.widgets.CMenu',array(
//			'items'=>array(
//				array('label'=>'Home', 'url'=>array('/site/index')),
//				array('label'=>'Thiên nhiên', 'url'=>array('/genreNature/index')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//			),
//		));

    $this->widget(
      'booster.widgets.TbNavbar',
      array(
        'brand' => CHtml::image(Yii::app()->request->baseUrl."/images/icon/icon_home.jpg"),
        'fixed' => false,
        'fluid' => true,
        'items' => array(
          array(
            'class' => 'booster.widgets.TbMenu',
            'type' => 'navbar',
            'items' => array(

              array(
                'label' => 'Menu',
                'items' => array(
                  array('label' => 'Tạo mới', 'url' => '/admin.php/category/create'),
                  array('label' => 'Quản lý', 'url' => '/admin.php/category/admin')
                )
              ),
              array('label' => 'Thiên nhiên', 'url' => '/admin.php/natures/index'),
              array('label' => 'Food', 'url' => '/admin.php/food/index'),

//              array(
//                'label' => 'Thiên nhiên',
//                'items' => array(
//                  array('label' => 'Tạo mới', 'url' => '/admin.php/natures/create'),
//                  array('label' => 'Quản lý', 'url' => '/admin.php/natures/admin')
//                )
//              ),
//              array(
//                'label' => 'Food',
//                'items' => array(
//                  array('label' => 'Tạo mới', 'url' => '/admin.php/food/create'),
//                  array('label' => 'Quản lý', 'url' => '/admin.php/food/admin')
//                )
//              ),
            )
          )
        )
      )
    );
    ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

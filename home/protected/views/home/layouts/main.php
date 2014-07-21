<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" /> -->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->

<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/mootools-core.js" type="text/javascript"></script>-->
<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/jquery_002.js" type="text/javascript"></script>-->
<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/menu.js" type="text/javascript"></script>-->
<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/script_002.js" type="text/javascript"></script>-->
<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/jscript.js" type="text/javascript"></script>-->
<!--  <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/jquery.min.js" type="text/javascript"></script>-->


  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home.css" />
<!--  <link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/bootstrap.css" />-->
<!--  <link rel="stylesheet" type="text/css" href="--><?php //echo Yii::app()->request->baseUrl; ?><!--/css/template.css" />-->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php
//		if(!$_GET['id']){
	?>
	<script type="text/javascript">
	$(document).ready(function(){
	$('#home_page').addClass("selected");
   // $('.menu li').addClass('selected');
	});
	</script>
	<?php
		//} else {
	 ?>
 	<script type="text/javascript">
//	 $(document).ready(function(){
//		$('#navigation ul li').onclick()
//     $('#navigation ul li').addClass('selected');
     $('.menu li').on('click', function(){
       $(this).addClass('selected');
     });
//	 });

	</script>
	<?php //} ?>

  <style type="text/css">


      /* END NAV MENU */
  </style>
</head>

<body>

	<div class="header">
		<div>
			<a href="index.html" id="logo"><img src="<?php echo Yii::app()->request->baseUrl?>/images/logo.gif" alt="logo"/></a>
			<div class="navigation">
				<ul class="first">
					<li class="first"><a href="jewelry.html">ON SALE</a></li>
					<li><a href="accessories.html">BEST SELLERS</a></li>
					<li><a href="blog.html">THE BLOG</a></li>
				</ul>
				<ul>
					<li><a href="about.html">About us</a></li>
					<li><a href="shoes.html">My Collection</a></li>
					<li><a href="#">Login</a></li>
				</ul>
				<a href="">viet</a>
				<a href="">anh</a>
			</div>
			<form action="" class="search">
				<input type="text" value="search" onblur="this.value=!this.value?'search':this.value;" onfocus="this.select()" onclick="this.value='';"/>
				<input type="submit" id="submit" value=""/>
			</form>
		</div>

    <nav id="menu" class="menu">
      <ul>
        <li id="home_page has-submenu"><?php echo CHtml::link("Trang chủ",  Yii::app()->urlManager->createUrl('/site/index')) ;?></li>
      <?php

        $array_parent_id = array();
        $array_sub_id = array();
        $parent_menu = HomeController::getListParentMenuSortPriority(0);
        foreach($parent_menu as $pm){
          if($pm->menu_type == 1) {
            echo ' <li  class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  array('/natures'));
            echo     '<ul class="sub-menu">';
                        $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
                      foreach($sub_menu_list as $sub_menu){
                          echo'<li>'.CHtml::link($sub_menu->tieude,  array('/natures/view', 'id'=> $sub_menu->id)).'</li>';
                      }
            echo     '</ul>';

            echo '</li>';

          }else if($pm->menu_type == 2) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Food/index'));
                echo     '<ul class="sub-menu">';
                $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
                foreach($sub_menu_list as $sub_menu){
                  echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Food/list', array('id'=> $sub_menu->id) )).'</li>';
                }
                echo     '</ul>';

                echo '</li>';
          } else if($pm->menu_type == 3) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Culture/index'));
                echo     '<ul class="sub-menu">';
                $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
                foreach($sub_menu_list as $sub_menu){
                  echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Culture/list', array('id'=> $sub_menu->id) )).'</li>';
                }
                echo     '</ul>';

                echo '</li>';
          } else if($pm->menu_type == 4) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Economy/index'));
              echo     '<ul class="sub-menu">';
              $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
              foreach($sub_menu_list as $sub_menu){
                echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Economy/list', array('id'=> $sub_menu->id) )).'</li>';
              }
              echo     '</ul>';

              echo '</li>';
          } else if($pm->menu_type == 5) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Historical/index'));
              echo     '<ul class="sub-menu">';
              $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
              foreach($sub_menu_list as $sub_menu){
                echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Historical/list', array('id'=> $sub_menu->id) )).'</li>';
              }
              echo     '</ul>';

              echo '</li>';
          } else if($pm->menu_type == 6) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/People/index'));
              echo     '<ul class="sub-menu">';
              $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
              foreach($sub_menu_list as $sub_menu){
                echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/People/list', array('id'=> $sub_menu->id) )).'</li>';
              }
              echo     '</ul>';

              echo '</li>';
          } else  if($pm->menu_type == 7) {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Travel/index'));
              echo     '<ul class="sub-menu">';
              $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
              foreach($sub_menu_list as $sub_menu){
                echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Travel/list', array('id'=> $sub_menu->id) )).'</li>';
              }
              echo     '</ul>';

              echo '</li>';
          } else {
            echo ' <li class="has-submenu" id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Specialties/index'));
              echo     '<ul class="sub-menu">';
              $sub_menu_list = HomeController:: getListMenuByMenuType($pm->id, $pm->menu_type);
              foreach($sub_menu_list as $sub_menu){
                echo'<li>'.CHtml::link($sub_menu->tieude,  Yii::app()->urlManager->createUrl('/Specialties/list', array('id'=> $sub_menu->id) )).'</li>';
              }
              echo     '</ul>';

              echo '</li>';
          }



        }
        ?>

        </li>
      </ul>
    </nav>
    <div class="body">

      <?php echo $content; ?>

    </div>
	<div class="footer">
    <span>copy right 2014<span>
    <div class="connect">

      <a href="http://facebook.com/freewebsitetemplates" id="facebook">Facebook</a>
      <a href="http://twitter.com/fwtemplates" id="twitter">Twitter</a>
      <a href="#" id="comments">Comments</a>
      <a href="http://www.flickr.com/freewebsitetemplates/" id="flickr">Flickr</a>

    </div>
	</div>
</body>
</html>

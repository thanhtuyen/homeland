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
        <li class="has-submenu"><a href="#">For Facilities</a>
          <ul class="sub-menu">
            <li><a href="#">Artificial Turf</a></li>
            <li class="has-submenu">
              <a href="#">Batting Cages</a>
              <ul>
                <li><a href="#">Indoor</a></li>
                <li><a href="#">Outdoor</a></li>
              </ul>
            </li>
            <li><a href="#">Benches &amp; Bleachers</a></li>
            <li><a href="#">Communication Devices</a></li>
            <li><a href="#">Dugouts</a></li>
            <li><a href="#">Fencing &amp; Windscreen</a></li>
            <li><a href="#">Floor Protectors</a></li>
            <li><a href="#">Foul Poles</a></li>
            <li><a href="#">Shade Structures</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="#">Field Maintenance</a>
          <ul class="sub-menu">
            <li><a href="#">All-in-One Team Cart</a></li>
            <li><a href="#">Air &amp; Electrical Reels</a></li>
            <li><a href="#">Field Drags</a></li>
            <li class="has-submenu">
              <a href="#">Field Marking Equipment</a>
              <ul>
                <li><a href="#">Batter's Box Templates</a></li>
                <li><a href="#">Dryline Markers</a></li>
                <li><a href="#">Field Paint</a></li>
                <li><a href="#">Field Sprayers</a></li>
                <li><a href="#">Stencils</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Field Tarps</a>
              <ul>
                <li><a href="#">Area Tarps</a></li>
                <li><a href="#">Growth Covers / Protectors</a></li>
                <li><a href="#">Infield Tarps</a></li>
                <li><a href="#">Tarp Accessories</a></li>
              </ul>
            </li>
            <li><a href="#">Hand Tools</a></li>
            <li class="has-submenu">
              <a href="#">Irrigation, Hoses, Nozzles</a>
              <ul>
                <li><a href="#">Hoses &amp; Hose Reels</a></li>
                <li><a href="#">Irrigation</a></li>
                <li><a href="#">Nozzles</a></li>
              </ul>
            </li>
            <li><a href="#">Layout &amp; Measurement Tools</a></li>
            <li><a href="#">Moisture Removal</a></li>
            <li><a href="#">Mound &amp; Home Plate Fortification</a></li>
            <li><a href="#">Mowers &amp; Stripers</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="#">Game-Practice Equipment</a>
          <ul class="sub-menu">
            <li class="has-submenu">
              <a href="#">Baseball - Softball</a>
              <ul>
                <li><a href="#">Base Accessories</a></li>
                <li><a href="#">Bases &amp; Home Plates</a></li>
                <li><a href="#">Game Accessories</a></li>
                <li><a href="#">Pitching Rubbers</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Batting Practice Equipment</a>
              <ul>
                <li><a href="#">Backstops</a></li>
                <li><a href="#">Infield Screens</a></li>
                <li><a href="#">Jugs Pitching Machines</a></li>
                <li><a href="#">Turf Mats</a></li>
                <li><a href="#">Turf Protectors</a></li>
                <li><a href="#">Replacement Accessories</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Batting Cages</a>
              <ul>
                <li><a href="#">Indoor</a></li>
                <li><a href="#">Outdoor</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Portable Mounds</a>
              <ul>
                <li><a href="#">Batting Practice Mounds</a></li>
                <li><a href="#">Game Mounds</a></li>
                <li><a href="#">Practice Mounds</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Football</a>
              <ul>
                <li><a href="#">First Down Markers</a></li>
                <li><a href="#">Football Accessories</a></li>
                <li><a href="#">Football Goalposts</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Soccer</a>
              <ul>
                <li><a href="#">Soccer Goals</a></li>
                <li><a href="#">Soccer Accessories</a></li>
              </ul>
            </li>

          </ul>
        </li>
        <li class="has-submenu"><a href="#">Training &amp; Conditioning</a>
          <ul class="sub-menu">
            <li><a href="#">Ladders &amp; Sticks</a></li>
            <li><a href="#">Hurdles</a></li>
            <li><a href="#">Training Accessories</a></li>
            <li><a href="#">Smart-Cart Training System</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="#">Books-Videos</a>
          <ul class="sub-menu">
            <li><a href="#">Field Design &amp; Maintenance</a></li>
            <li><a href="#">Turf Management</a></li>
            <li><a href="#">Training</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <!--    BEGIN MAIN MENU-->
<!--		<div id="navigation">-->
<!--      <div class="t3-megamenu">-->
<!--			<ul class="menu">-->
<!--        <li id="home_page">--><?php //echo CHtml::link("Trang chủ",  Yii::app()->urlManager->createUrl('/site/index')) ;?><!--</li>-->
<!--        --><?php
//
//        $array_parent_id = array();
//        $array_sub_id = array();
//        $parent_menu = HomeController::getListParentMenuSortPriority(0);
//        foreach($parent_menu as $pm){
//          if($pm->menu_type == 1) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Nature/index')).
//
//              ' <div class="nav-child dropdown-menu">
//                <ul class="mega-nav">
//                <li><a href="beauty_care.html">Văn hóa</a></li>
//                  <li><a href="shoes.html">Tour</a></li>
//                <li><a href="accessories.html">Đặc sản</a></li>
//                </ul>
//              </div>
//
//              </li>';
//
//          }else if($pm->menu_type == 2) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Food/index')).'</li>';
//          } else if($pm->menu_type == 3) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Culture/index')).'</li>';
//          } else if($pm->menu_type == 4) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Economy/index')).'</li>';
//          } else if($pm->menu_type == 5) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Historical/index')).'</li>';
//          } else if($pm->menu_type == 6) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/People/index')).'</li>';
//          } else  if($pm->menu_type == 7) {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Travel/index')).'</li>';
//          } else {
//            echo ' <li id='.$pm->id.'>'.CHtml::link($pm->tieude,  Yii::app()->urlManager->createUrl('/Specialties/index')).'</li>';
//          }
//
//
//
//        }
//        ?>
<!--			</ul>-->
<!--      </div>-->
<!--		</div>-->
<!--	</div>-->

<!--  END MAIN MENU-->
      <?php echo $content; ?>

	
	<div class="footer">
		<p>&#169; 2011 Herdesigns. All Rights Reserved.</p>
	</div>

</body>
</html>

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
 	 <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jscript.js" type="text/javascript"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/home.s" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php
		if(!$_GET['id']){
	?>
	<script type="text/javascript">
	$(document).ready(function(){ 
		$('#home_page').addClass("selected");
	});
	</script>
	<?php
		} else {
	 ?>
 	<script type="text/javascript">
	 $(document).ready(function(){ 
		$('#navigation ul li').addClass('selected');
	 });
	</script>
	<?php } ?>
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
		<div id="navigation">
			<ul>
				<li id="home_page"><?php echo CHtml::link("Trang chủ",  Yii::app()->urlManager->createUrl('/site/index')) ;?></li>
				<li><?php echo CHtml::link("Thiên nhiên",  Yii::app()->createAbsoluteUrl('Site/Contact')) ;?></li>
				<li><?php echo CHtml::link('Món ngon',
				    array(
				        'id'=>2,
				        'title'=>"Món ngon",
				        'lang'=>Yii::app()->language
				        )
				    );?>
				 </li>
				<li><a href="beauty_care.html">Văn hóa</a></li>
				<li><a href="shoes.html">Tour</a></li>
				<li><a href="accessories.html">Đặc sản</a></li>
				<li><a href="jewelry.html">Di tích</a></li>
				<li><a href="jewelry.html">Con người</a></li>
				<li><a href="jewelry.html">Kinh tế</a></li>
			</ul>
		</div>
	</div> 
	<?php echo $content; ?>
	
	<div class="footer">
		<p>&#169; 2011 Herdesigns. All Rights Reserved.</p>
	</div>

</body>
</html>

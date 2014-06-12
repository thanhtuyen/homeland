<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$cs=Yii::app()->clientScript;
// Add CSS

$cs->registerCSSFile('/css/style.css');
?>

	<div class="body">
			<div class="featured">
				<a href="blog.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/advertisement.jpg" alt=""/></a>
				<div class="gallery">
					<a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/aurora.jpg" alt=""/></a>
					<ul class="first">
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/summer-collection.jpg" alt=""/></a></li>
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/beach-bride.jpg" alt=""/></a></li>
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/motherhood-apparel.jpg" alt=""/></a></li>
					</ul>
					<ul>
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/fashionable.jpg" alt=""/></a></li>
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/accessories.jpg" alt=""/></a></li>
						<li><a href="new_arrival.html"><img src="<?php echo Yii::app()->request->baseUrl?>/images/skin-perfect.jpg" alt=""/></a></li>
					</ul>
				</div>
			</div>
			<div class="article">
				<div class="first">
					<h3>Please Read</h3>
					<p>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.</p>
					<p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
					<p>If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forum</a>.</p>
					<p>Before using a template from Free Website Templates, you must read all the for further information <a href="http://www.freewebsitetemplates.com/about/terms">Terms of Use</a></p>
				</div>
				<div>
					<h3>Sed Elementum</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum nibh eget justo dapibus eu porttitor purus hendrerit.</p>
					<a href="http://www.freewebsitetemplates.com">www.freewebsitetemplates.com</a>
					<a href="http://www.freewebsitetemplates.com/forums/">www.freewebsitetemplates.com/forum</a>
				</div>
				<div class="connect">
					<h2>Follow us</h2>
					<a href="http://facebook.com/freewebsitetemplates" id="facebook">Facebook</a>
					<a href="http://twitter.com/fwtemplates" id="twitter">Twitter</a>
					<a href="#" id="comments">Comments</a>
					<a href="http://www.flickr.com/freewebsitetemplates/" id="flickr">Flickr</a>
				</div>
			</div>
		</div>
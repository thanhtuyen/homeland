<?php
/* @var $this EconomyController */
/* @var $model Economy */

$this->breadcrumbs=array(
	'Economies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Economy', 'url'=>array('index')),
	array('label'=>'Manage Economy', 'url'=>array('admin')),
);
?>

<h1>Create Economy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
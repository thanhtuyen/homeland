<?php
/* @var $this NaturesController */
/* @var $model Natures */

$this->breadcrumbs=array(
	'Natures'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Food', 'url'=>array('index')),
//	array('label'=>'Manage Food', 'url'=>array('admin')),
//);
?>

<h1>Create Natures</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'category_id'=>$category_id)); ?>
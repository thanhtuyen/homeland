<?php
/* @var $this NaturesController */
/* @var $model Natures */

$this->breadcrumbs=array(
	'Natures'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Food', 'url'=>array('index')),
//	array('label'=>'Create Food', 'url'=>array('create')),
//	array('label'=>'View Food', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Food', 'url'=>array('admin')),
//);
?>

<h1>Update Natures <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'category_id'=>$category_id)); ?>
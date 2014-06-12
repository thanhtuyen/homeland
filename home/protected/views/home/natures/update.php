<?php
/* @var $this NaturesController */
/* @var $model Natures */

$this->breadcrumbs=array(
	'Natures'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Natures', 'url'=>array('index')),
	array('label'=>'Create Natures', 'url'=>array('create')),
	array('label'=>'View Natures', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Natures', 'url'=>array('admin')),
);
?>

<h1>Update Natures <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
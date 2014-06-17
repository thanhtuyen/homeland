<?php
/* @var $this EconomyController */
/* @var $model Economy */

$this->breadcrumbs=array(
	'Economies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Economy', 'url'=>array('index')),
	array('label'=>'Create Economy', 'url'=>array('create')),
	array('label'=>'View Economy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Economy', 'url'=>array('admin')),
);
?>

<h1>Update Economy <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
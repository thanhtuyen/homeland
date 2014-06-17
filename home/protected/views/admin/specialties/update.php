<?php
/* @var $this SpecialtiesController */
/* @var $model Specialties */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Specialties', 'url'=>array('index')),
	array('label'=>'Create Specialties', 'url'=>array('create')),
	array('label'=>'View Specialties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Specialties', 'url'=>array('admin')),
);
?>

<h1>Update Specialties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
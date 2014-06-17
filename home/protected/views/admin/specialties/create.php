<?php
/* @var $this SpecialtiesController */
/* @var $model Specialties */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Specialties', 'url'=>array('index')),
	array('label'=>'Manage Specialties', 'url'=>array('admin')),
);
?>

<h1>Create Specialties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
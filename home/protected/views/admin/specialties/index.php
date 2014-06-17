<?php
/* @var $this SpecialtiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Specialties',
);

$this->menu=array(
	array('label'=>'Create Specialties', 'url'=>array('create')),
	array('label'=>'Manage Specialties', 'url'=>array('admin')),
);
?>

<h1>Specialties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this NaturesController */
/* @var $model Natures */

$this->breadcrumbs=array(
	'Natures'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Natures', 'url'=>array('index')),
	array('label'=>'Create Natures', 'url'=>array('create')),
	array('label'=>'Update Natures', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Natures', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Natures', 'url'=>array('admin')),
);
?>

<h1>View Natures #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'tieude',
		'content',
		'noidung',
		'genre_nature_id',
	),
)); ?>

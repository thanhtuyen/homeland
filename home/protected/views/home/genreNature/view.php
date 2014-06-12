<?php
/* @var $this GenreNatureController */
/* @var $model GenreNature */

$this->breadcrumbs=array(
	'Genre Natures'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GenreNature', 'url'=>array('index')),
	array('label'=>'Create GenreNature', 'url'=>array('create')),
	array('label'=>'Update GenreNature', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GenreNature', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GenreNature', 'url'=>array('admin')),
);
?>

<h1>View GenreNature #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'mota',
	),
)); ?>

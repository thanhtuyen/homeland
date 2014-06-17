<?php
/* @var $this SpecialtiesController */
/* @var $model Specialties */

$this->breadcrumbs=array(
	'Specialties'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Specialties', 'url'=>array('index')),
	array('label'=>'Create Specialties', 'url'=>array('create')),
	array('label'=>'Update Specialties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Specialties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Specialties', 'url'=>array('admin')),
);
?>

<h1>View Specialties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'tieude',
		'content',
		'noidung',
		'is_public',
		'category_id',
		'del_flag',
		'feature_flag',
		'create_user',
		'updated_user',
		'create_date',
		'updated_date',
		'image',
		'video',
		'file',
	),
)); ?>

<?php
/* @var $this EconomyController */
/* @var $model Economy */

$this->breadcrumbs=array(
	'Economies'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Economy', 'url'=>array('index')),
	array('label'=>'Create Economy', 'url'=>array('create')),
	array('label'=>'Update Economy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Economy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Economy', 'url'=>array('admin')),
);
?>

<h1>View Economy #<?php echo $model->id; ?></h1>

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

<?php
/* @var $this HistoricalController */
/* @var $model Historical */

$this->breadcrumbs=array(
	'Historicals'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Historical', 'url'=>array('index')),
	array('label'=>'Create Historical', 'url'=>array('create')),
	array('label'=>'Update Historical', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Historical', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historical', 'url'=>array('admin')),
);
?>

<h1>View Historical #<?php echo $model->id; ?></h1>

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

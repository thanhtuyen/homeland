<?php
/* @var $this HistoricalController */
/* @var $model Historical */

$this->breadcrumbs=array(
	'Historicals'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historical', 'url'=>array('index')),
	array('label'=>'Create Historical', 'url'=>array('create')),
	array('label'=>'View Historical', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Historical', 'url'=>array('admin')),
);
?>

<h1>Update Historical <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'category_id'=>$category_id)); ?>
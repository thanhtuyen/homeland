<?php
/* @var $this HistoricalController */
/* @var $model Historical */

$this->breadcrumbs=array(
	'Historicals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historical', 'url'=>array('index')),
	array('label'=>'Manage Historical', 'url'=>array('admin')),
);
?>

<h1>Create Historical</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
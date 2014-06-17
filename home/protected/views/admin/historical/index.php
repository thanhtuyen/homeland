<?php
/* @var $this HistoricalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historicals',
);

$this->menu=array(
	array('label'=>'Create Historical', 'url'=>array('create')),
	array('label'=>'Manage Historical', 'url'=>array('admin')),
);
?>

<h1>Historicals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

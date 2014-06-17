<?php
/* @var $this EconomyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Economies',
);

$this->menu=array(
	array('label'=>'Create Economy', 'url'=>array('create')),
	array('label'=>'Manage Economy', 'url'=>array('admin')),
);
?>

<h1>Economies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

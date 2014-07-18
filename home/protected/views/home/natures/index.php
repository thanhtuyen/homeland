<?php
/* @var $this NaturesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Natures',
);

$this->menu=array(
	array('label'=>'Create Natures', 'url'=>array('create')),
	array('label'=>'Manage Natures', 'url'=>array('admin')),
);
?>

<h1>Natures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

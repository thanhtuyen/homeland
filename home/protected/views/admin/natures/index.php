<?php
/* @var $this NaturesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Natures',
);

//$this->menu=array(
//	array('label'=>'Create Food', 'url'=>array('create')),
//	array('label'=>'Manage Food', 'url'=>array('admin')),
//);
?>

<h1>Natures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

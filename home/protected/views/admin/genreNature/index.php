<?php
/* @var $this GenreNatureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Genre Natures',
);

$this->menu=array(
	array('label'=>'Create GenreNature', 'url'=>array('create')),
	array('label'=>'Manage GenreNature', 'url'=>array('admin')),
);
?>

<h1>Genre Natures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this GenreNatureController */
/* @var $model GenreNature */

$this->breadcrumbs=array(
	'Genre Natures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GenreNature', 'url'=>array('index')),
	array('label'=>'Manage GenreNature', 'url'=>array('admin')),
);
?>

<h1>Create GenreNature</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
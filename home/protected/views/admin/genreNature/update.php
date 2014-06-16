<?php
/* @var $this GenreNatureController */
/* @var $model GenreNature */

$this->breadcrumbs=array(
	'Genre Natures'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GenreNature', 'url'=>array('index')),
	array('label'=>'Create GenreNature', 'url'=>array('create')),
	array('label'=>'View GenreNature', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GenreNature', 'url'=>array('admin')),
);
?>

<h1>Update GenreNature <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
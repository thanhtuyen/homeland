<?php
/* @var $this CultureController */
/* @var $model Culture */

$this->breadcrumbs=array(
	'Cultures'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Culture', 'url'=>array('index')),
	array('label'=>'Create Culture', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#culture-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cultures</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'culture-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'tieude',
		'content',
		'noidung',
		'is_public',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

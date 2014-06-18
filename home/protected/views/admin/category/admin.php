<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/booster/css/test.css"/>
<?php

/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Category', 'url'=>array('index')),
//	array('label'=>'Create Category', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="tree" style="width: 100%;">
<?php

$this->widget('CTreeView',array(

  'data'=>$dataProvider,

  'prerendered' => 'true',

  'animated'=>'fast', //quick animation

  'cssFile' =>  'false',

  'collapsed'=>'true',//remember must giving quote for boolean value in here



));

?>

</div>

<!--<h1>Manage Categories</h1>-->
<!---->
<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->
<!---->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<?php //$this->renderPartial('_search',array(
//	'model'=>$model,
//)); ?>
<!--</div><!-- search-form -->
<!---->
<?php //$this->widget('zii.widgets.grid.CGridView', array(
//	'id'=>'category-grid',
//	'dataProvider'=>$model->search(),
//	'filter'=>$model,
//	'columns'=>array(
//		'id',
//		'name',
//		'tieude',
//		'priority',
//		'parent_id',
//		'del_flag',
//		/*
//		'create_user',
//		'updated_user',
//		'create_date',
//		'updated_date',
//		*/
//		array(
//			'class'=>'CButtonColumn',
//		),
//	),
//)); ?>

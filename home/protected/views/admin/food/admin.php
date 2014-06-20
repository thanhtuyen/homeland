<style>
  .span-19 {
    width:100% !important;
  }
</style>
<?php
/* @var $this FoodController */
/* @var $model Food */

$this->breadcrumbs=array(
	'Foods'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List Food', 'url'=>array('index')),
//	array('label'=>'Create Food', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#food-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div style="text-align:right">
  <?php
  //$detail_menu_record = Detailmenu::model()->getDetailMenu($menu_id);
  //if(count($detail_menu_record) == 0)
  echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/icon/bplus.png',"bCreate",array("class"=>"icon_plus", 'title'=>'Thêm mới Chi Tiết Food')), Yii::app()->createUrl('/food/create?category_id='.$category_id)) ;
  ?>
</div>
<?php
$gridColumns = array(
  array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
  array('name'=>'title', 'header'=>'title'),
  array('name'=>'tieude', 'header'=>'tieude'),
  array('name'=>'create_user', 'header'=>'create_user'),
  array('name'=>'create_date', 'header'=>'create_date'),
  array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("food/view",array("id"=>$data->id))',
    'updateButtonUrl'=>'Yii::app()->createUrl("food/update",array("id"=>$data->id))',
    'deleteButtonUrl'=>null,
  )
);
$this->widget(
  'booster.widgets.TbGridView',
  array(
    'id'=>'food-grid',
    'dataProvider' => $model->search(),
    'template' => "{items}",
    'columns' => $gridColumns,
  )
);

?>

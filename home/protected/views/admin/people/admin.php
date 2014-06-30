<style>
  .span-19 {
    width:100% !important;
  }
</style>
<?php
/* @var $this PeopleController */
/* @var $model People */

$this->breadcrumbs=array(
	'Peoples'=>array('index'),
	'Manage',
);

//$this->menu=array(
//	array('label'=>'List People', 'url'=>array('index')),
//	array('label'=>'Create People', 'url'=>array('create')),
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#people-grid').yiiGridView('update', {
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
  if($category_id){
    echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/icon/bplus.png',"bCreate",array("class"=>"icon_plus", 'title'=>'Thêm mới Chi Tiết people')), Yii::app()->createUrl('/people/create?category_id='.$category_id)) ;
  } else {
    echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/icon/bplus.png',"bCreate",array("class"=>"icon_plus", 'title'=>'Thêm mới Chi Tiết people')), Yii::app()->createUrl('/people/create')) ;
  }

  ?>
</div>
<?php
$gridColumns = array(
  array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
  array('name'=>'title', 'header'=>'title'),
  array('name'=>'tieude', 'header'=>'Tiêu đề'),
  array('name'=>'create_user', 'header'=>'Người tạo'),
  array('name'=>'create_date',
      'value'=> 'date("d-m-Y","$data->create_date")',
    'header'=>'Ngày tạo'),
  array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>'Yii::app()->createUrl("people/view",array("id"=>$data->id))',
    'updateButtonUrl'=>'Yii::app()->createUrl("people/update",array("id"=>$data->id))',
    'deleteButtonUrl'=>null,
  )
);
$this->widget(
  'booster.widgets.TbGridView',
  array(
    'id'=>'people-grid',
    'dataProvider' => $model->search(),
    'template' => "{items}{pager}",
    'enablePagination' => true,
    'columns' => $gridColumns,
  )
);

?>

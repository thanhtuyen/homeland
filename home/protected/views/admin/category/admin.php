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
<div id="menu-grid">
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
</div>

<script type="text/javascript">

  /*<![CDATA[*/

  jQuery(function($) {



    $('.search-button').click(function(){

      $('.search-form').toggle();

      return false;

    });

    $('.search-form form').submit(function(){

      $('#menu-grid').yiiGridView('update', {

        data: $(this).serialize()

      });

      return false;

    });



    jQuery(document).on('click','#menu-grid a.delete',function() {

      if(!confirm('Bạn có chắc là muốn xóa?')) return false;

      $.ajax({

        type: "POST",

        url: jQuery(this).attr('href'),

        data: data,

        success: success,

        dataType: dataType

      });



      return false;

    });

    jQuery('#menu-grid').yiiGridView({'ajaxUpdate':['menu-grid'],'ajaxVar':'ajax','pagerClass':'pager','loadingClass':'grid-view-loading','filterClass':'filters','tableClass':'items','selectableRows':1,'enableHistory':false,'updateSelector':'{page}, {sort}','filterSelector':'{filter}','pageVar':'Menu_page'});

    jQuery('body').tooltip({'selector':'a[rel=tooltip]'});

    jQuery('body').popover({'selector':'a[rel=popover]'});

  });

  /*]]>*/

</script>


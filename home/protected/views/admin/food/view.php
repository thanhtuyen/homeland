<style>
  #gallery{
    /*width: 100%!important;*/
    /*margin: 0 auto;*/
    /*padding-left: 30%;*/
    clear:both
  }
  #gallery ul{
    width: 1000px;;
    /*text-align: center;*/

  }

  #gallery li {
    display: inline;
    margin-right: 5px;
    padding-top: 3px;

  }
  #content{
    width: 100% !important;
  }
  .table-striped{
    width: 1000px;;
  }
  #wrapper{
    width: 100%;
  }
  #vi{
    float: left;
    border-right-style: solid;
    border-width: 2px;
    width: 50%;
  }
  #en{
    float: left;
    padding-left: 10px;
    width: 50%;
  }
  .title{
    font-weight: bold;
    font-style: italic;
  }

</style>
<?php
/* @var $this FoodController */
/* @var $model Food */

$this->breadcrumbs=array(
	'Foods'=>array('index'),
	$model->title,
);

//$this->menu=array(
//	array('label'=>'List Food', 'url'=>array('index')),
//	array('label'=>'Create Food', 'url'=>array('create')),
//	array('label'=>'Update Food', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Food', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Food', 'url'=>array('admin')),
//);
?>
<div id="wrapper">
  <div id="vi">
    <div class="title"><?php echo $model->tieude;?></br></div>
    <?php echo $model->noidung;?></br>
  </div>
  <div id="en">
    <div class="title"><?php echo $model->title;?></br></div>
    <?php echo $model->content;?></br>
  </div>
</div>
<div id="gallery">
  <video width="625" height="380" id="player2" controls="controls">
    <source  src="<?php echo Yii::app()->request->baseUrl.Food::video_url.''.$model->video;?>" type="video/mp4">
  </video>
  <ul>
    <?php
    $array_file = explode(',', $model->image);
    //  print_r($array_file);
    foreach($array_file as $file) {
      $thumb_image_path = Food::image_url.''.$file;
      echo '<li><img width="170px" height="220px" src="'.$thumb_image_path.'" alt="" /> </li>';
    }

    ?>
  </ul>
</div>
<?php
//$this->widget('booster.widgets.TbDetailView', array(
//  'data'=>$model,
//  'attributes'=>array(
//    'id',
//    array('name' => 'title',
//      'type' => 'raw',
//      'value' => CHtml::decode($model->title)
//    ),
//    array('name' => 'content',
//      'type' => 'raw',
//      'value' => CHtml::decode($model->content)
//    ),
//    array('name' => 'tieude',
//      'type' => 'raw',
//      'value' => CHtml::decode($model->tieude)
//    ),
//    array('name' => 'noidung',
//      'type' => 'raw',
//      'value' => CHtml::decode($model->noidung)
//    ),
//
//    array('name' => 'is_public',
//      'type' => 'raw',
//      'value' => $data->is_public == 1 ? "Public":"Not public",
//    ),
//    array('name'=>'create_date',
//      'value'=> 'date("d-m-Y","$data->create_date")',
//    )
////    array('name' => 'noidung',
////      'type' => 'raw',
////      'value' => CHtml::decode($model->noidung)
////    ),
//  )
//));
//		'image',
//		'video',
//		'file',
//	),
//));
?>


<style>
  .gallery {width: 660px; margin: 0 auto 20px auto;}
  .gallery ul {padding-left: 10px;width: 1000px;padding-top: 10px;}
  .gallery li {display: inline; margin-right: 3px;}
  .main-img {
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    padding: 26px;
    /*margin-left: 100px;*/
    margin-top: 10px;

  }
  /*#gallery{*/
    /*width: 100%!important;*/
    /*margin: 0 auto;*/
    /*padding-left: 30%;*/
    /*clear:both*/
  /*}*/
  /*#gallery ul{*/
    /*width: 1000px;;*/
    /*text-align: center;*/

  /*}*/

  /*#gallery li {*/
    /*display: inline;*/
    /*margin-right: 5px;*/
    /*padding-top: 3px;*/

  /*}*/
  #content{
    width: 100% !important;
  }
  .table-striped{
    width: 1000px;;
  }
  #wrapper{
    width: 1000px;
   margin-bottom: 10px;
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

  .file{
    margin-bottom: 20px;
  }
</style>
<?php
/* @var $this HistoricalController */
/* @var $model Historical */

$this->breadcrumbs=array(
	'Historical'=>array('index'),
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

  <div class="gallery">
    <?php if($model->video):?>
    <video  width="625" height="350" id="player2" controls="controls">
      <source  src="<?php echo Yii::app()->request->baseUrl.Historical::video_url.''.$model->video;?>" type="video/mp4">
    </video>
    <?php endif;?>
    <?php
    $array_file = explode(',', $model->image);
    if($model->image):?>
    <img style="width: 500px;height: 500px;" src="<?php echo Historical::image_url.''.$array_file[0];?>" alt="" class="main-img" />
    <ul>
      <?php
      foreach($array_file as $file) {
        $thumb_image_path = '/uploadfile/historical/images/'.''.$file;
        echo '<li><img width="170px" height="220px" src="'.$thumb_image_path.'" alt="" /> </li>';
      } ?>

    </ul>
  </div>
<?php endif;?>
<div class="file">
  <?php
  if($model->file){
    echo"File đính kèm:   ";
    $array_file = explode(',', $model->file);
    foreach($array_file as $file){
      $thumb_file_path = Historical::file_url.''.$file;
      echo CHtml::link($file, Yii::app()->createUrl('/historical/downloadFile',array('id' => $model->id)));
    }
  }

  ?>
</div>
<script type="text/JavaScript">
  // prepare the form when the DOM is ready
  $(document).ready(function() {
    var galleryClass = '.gallery';
    $(galleryClass+' li img').hover(function(){
      var $gallery = $(this).parents(galleryClass);
//      $('.main-img',$gallery).attr('src',$(this).attr('src').replace('thumb/', ''));
      $('.main-img',$gallery).attr('src',$(this).attr('src'));
    });
    var imgSwap = [];
    $(galleryClass+' li img').each(function(){
//      imgUrl = this.src.replace('thumb/', '');
      imgUrl = this.src;
      imgSwap.push(imgUrl);
    });
    $(imgSwap).preload();
  });
  $.fn.preload = function() {
    this.each(function(){
      $('<img/>')[0].src = this;
    });
  }
</script>
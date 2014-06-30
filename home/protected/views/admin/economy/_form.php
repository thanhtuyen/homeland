<?php
/* @var $this economyController */
/* @var $model economy */
/* @var $form CActiveForm */
?>
<style>
  .well{
    background-color: white !important;

  }
  .span-19{
    width: 100%!important;
  }

  #gallery{
    width: 100%!important;
    margin: 0 auto;
  }
  #gallery ul{
    padding-left: 30%;
    /*text-align: center;*/

  }

  #gallery li {
    display: inline;
    margin-right: 5px;
    padding-top: 3px;

  }
  #gallery_file{
    width: 100%!important;
    margin: 0 auto;
  }
  #gallery_file ul{
    padding-left: 30%;
    /*text-align: center;*/

  }
  #gallery_file li {
    display: inline;
    margin-right: 5px;
    padding-top: 3px;

  }
</style>
<input type="hidden"id="economy_id" value="<?php echo  $model->id;?>">
<div class="form">
  <?php
  $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
      'id' => 'economy-form',
      'type' => 'horizontal',
      'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data'),
      'enableAjaxValidation'=>false,

    )
  );
  echo $form->errorSummary($model);
  echo '<p class="note">Fields with <span class="required">*</span> are required.</p>';


  if($model->isNewRecord){
    $menu_detail = Category::model()->findByPk($category_id);
    $parents[$category_id] = $menu_detail->name;
//    print_r($parents[$category_id] );die;
    echo $form->dropDownListGroup(
      $model,
      'category_id',
      array(
        'wrapperHtmlOptions' => array(
          'class' => 'col-sm-5',
        ),
        'widgetOptions' => array(
          'data' => $parents,
          'htmlOptions' => array('disabled'=> true),
        )
      )
    );
    echo '<input type="hidden" name="category_id" value="'.$category_id.'">';
    //echo $form->dropDownList($model,'menu_id',$parents ,array( 'prompt'=>'Chọn menu ...'));
  } else {
    //$parents = Detailmenu::getListMenu($model->menu_id);
    $menu_detail = Category::model()->findByPk($model->category_id);
    $parents[$menu_id] = $menu_detail->name;
    echo $form->dropDownListGroup($model,'category_id',
      array(
        'wrapperHtmlOptions' => array(
          'class' => 'col-sm-5',
        ),
        'widgetOptions' => array(
          'data' => $parents,
          'htmlOptions' => array('disabled'=> true),
        )
      )
     );
  }

  echo $form->textFieldGroup( $model,'title',  array('wrapperHtmlOptions' => array( 'class' => 'textfield', )  ) );
  echo $form->ckEditorGroup( $model,'content',  array('wrapperHtmlOptions' => array( ),
                                                'widgetOptions' => array(
                                                  'editorOptions' => array(
                                                    'fullpage' => 'js:true',
                                                    /* 'width' => '640', */
                                                    /* 'resize_maxWidth' => '640', */
                                                    /* 'resize_minWidth' => '320'*/
                                                  )
                                                )) );
  echo $form->textFieldGroup( $model,'tieude',  array('wrapperHtmlOptions' => array( 'class' => 'textfield', )  ) );
  echo $form->ckEditorGroup( $model,'noidung',  array('wrapperHtmlOptions' => array( ),
    'widgetOptions' => array(
      'editorOptions' => array(
        'fullpage' => 'js:true',
        /* 'width' => '640', */
        /* 'resize_maxWidth' => '640', */
        /* 'resize_minWidth' => '320'*/
      )
    )) );
  echo '<div class="form-group">';
    echo'<label class="col-sm-3 control-label" for="economy_image">Image</label>';
     echo '<div class="col-sm-9">';
      $this->widget('CMultiFileUpload', array(
      'model' => $model,
      'attribute' => 'image',
      'max' => 6
      ));
    echo'</div>';
  echo'</div>';
  if($model->image) {
    echo '<div id="gallery">

      </div>';
  }
  echo '<div class="form-group">';
    echo'<label class="col-sm-3 control-label" for="economy_image">File</label>';
    echo '<div class="col-sm-9">';
    $this->widget('CMultiFileUpload', array(
      'model' => $model,
      'attribute' => 'file',
      'max' => 6
    ));
    echo'</div>';
  echo'</div>';
//  if($model->file){
    echo '<div id="gallery_file">

      </div>';
//  }

  echo $form->fileFieldGroup( $model,'video',  array('wrapperHtmlOptions' => array( 'class' => 'col-sm-5', )  ) );
  $video = Yii::app()->request->baseUrl.Economy::video_url.''.$model->video;
  if($model->video){?>
 <div class="form-group">
   <label class="col-sm-3 control-label" for="economy_image"></label>
   <div class="col-sm-9">
     <video width="225" height="200" id="player2" controls="controls">
       <source width="225" height="180" src="<?php echo $video;?>" type="video/mp4">
     </video>
   </div>

  </div>
  <?php
  }
  ?>
  <?php
  echo $form->radioButtonListGroup(
    $model,
    'is_public',
    array(
      'widgetOptions' => array(
        'data' => array(
          'Công khai',
          'Không công khai',
        )
      )
    )
  );

  echo $form->radioButtonListGroup(
    $model,
    'feature_flag',
    array(
      'widgetOptions' => array(
        'data' => array(
          'Không đặt ở trang chủ',
          'Trung tâm',
          'Bên trái',
        )
      )
    )
  );

  echo '<div style="text-align: center">';

      if($model->isNewRecord) {
        $this->widget(
          'booster.widgets.TbButton',
          array('buttonType' => 'submit', 'label' => 'Create', 'context' => 'primary',)
        );
      } else {
        $this->widget(
          'booster.widgets.TbButton',
          array('buttonType' => 'submit', 'label' => 'Save', 'context' => 'primary',)
        );
      }
    $this->widget(
      'booster.widgets.TbButton',
      array('buttonType' => 'button', 'label' => 'Cancel')
    );


  echo '</div>';
  $this->endWidget();
  ?>

</div>
<script>
  var id = $('#economy_id').val();
  $.ajax( {
    type: 'GET',
    url: '../../economy/delete_image',
    data: "id="+id,

    success: function(data) {
      $('#gallery').html(data);
    }
  } );

  function delete_image_name(elm){
    var result = confirm("Bạn thật sự muốn xóa hình  này?");
    if (result==true) {
      $.ajax( {
        type: 'GET',
        url: '../../economy/delete_image',
        data: "id="+id+"&image_name="+elm.name,

        success: function(data) {
          $( "#gallery" ).load( "/admin.php/economy/delete_image?id="+id, function() {

          });

        }
      } );
    }
  }
  $.ajax( {
    type: 'GET',
    url: '../../economy/delete_file',
    data: "id="+id,

    success: function(data) {
      $('#gallery_file').html(data);
    }
  } );

  function delete_file_name(elm){
    var result = confirm("Bạn thật sự muốn xóa hình  này?");
    if (result==true) {
      $.ajax( {
        type: 'GET',
        url: '../../economy/delete_file',
        data: "id="+id+"&file_name="+elm.name,

        success: function(data) {
          $( "#gallery_file" ).load( "/admin.php/economy/delete_file?id="+id, function() {

          });

        }
      } );
    } else {
      elm.checked = false;

    }
  }
</script>
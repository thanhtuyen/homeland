<?php
/* @var $this EconomyController */
/* @var $model Economy */
/* @var $form CActiveForm */
?>

<div class="wide form">

  <?php
  $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
      'id' => 'economy-form',
      'type' => 'horizontal',
//      'htmlOptions' => array('class' => 'well'),
      'enableAjaxValidation'=>false,
      'method'=>'get',
      'action'=>Yii::app()->createUrl($this->route),
    )
  );
  echo '<div class="form-group">';
    echo'<label class="col-sm-3 control-label" for="Economy_image">create_user</label>';
    echo '<div class="textfield col-sm-9">';
      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'name'=>'create_user',
        'source'=>array('ac1','ac2', 'ac3'),
        // additional javascript options for the autocomplete plugin
        'options'=>array(
          'minLength'=>'2',
        ),
        'htmlOptions'=>array(
//          'style'=>'height:20px;',
          'class'=>"form-control"
        ),
      ));
    echo "</div>";
  echo "</div>";
//  echo $form->textFieldGroup( $model,'create_user',  array('wrapperHtmlOptions' => array( 'class' => 'textfield', )  ) );
  echo $form->textFieldGroup( $model,'tieude',  array('wrapperHtmlOptions' => array( 'class' => 'textfield', )  ) );
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
  $this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Search', 'context' => 'primary',)
  );

  $this->endWidget();

  ?>




<?php //$form=$this->beginWidget('CActiveForm', array(
//	'action'=>Yii::app()->createUrl($this->route),
//	'method'=>'get',
//)); ?>
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'id'); ?>
<!--		--><?php //echo $form->textField($model,'id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'title'); ?>
<!--		--><?php //echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'tieude'); ?>
<!--		--><?php //echo $form->textArea($model,'tieude',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'content'); ?>
<!--		--><?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'noidung'); ?>
<!--		--><?php //echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'is_public'); ?>
<!--		--><?php //echo $form->textField($model,'is_public'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'category_id'); ?>
<!--		--><?php //echo $form->textField($model,'category_id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'del_flag'); ?>
<!--		--><?php //echo $form->textField($model,'del_flag'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'feature_flag'); ?>
<!--		--><?php //echo $form->textField($model,'feature_flag'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'create_user'); ?>
<!--		--><?php //echo $form->textField($model,'create_user'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'updated_user'); ?>
<!--		--><?php //echo $form->textField($model,'updated_user'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'create_date'); ?>
<!--		--><?php //echo $form->textField($model,'create_date'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'updated_date'); ?>
<!--		--><?php //echo $form->textField($model,'updated_date'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'image'); ?>
<!--		--><?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>256)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'video'); ?>
<!--		--><?php //echo $form->textField($model,'video',array('size'=>60,'maxlength'=>256)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'file'); ?>
<!--		--><?php //echo $form->textField($model,'file',array('size'=>60,'maxlength'=>256)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row buttons">-->
<!--		--><?php //echo CHtml::submitButton('Search'); ?>
<!--	</div>-->
<!---->
<?php //$this->endWidget(); ?>

</div><!-- search-form -->
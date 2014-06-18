<?php
/* @var $this FoodController */
/* @var $model Food */
/* @var $form CActiveForm */
?>
<style>
  .well{
    background-color: white !important;

  }
  .span-19{
    width: 100%!important;
  }
</style>
<div class="form">
  <?php
  $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
      'id' => 'food-form',
      'type' => 'horizontal',
      'htmlOptions' => array('class' => 'well'),
      'enableAjaxValidation'=>false,
    )
  );
  echo $form->errorSummary($model);
  echo '<p class="note">Fields with <span class="required">*</span> are required.</p>';
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
  echo $form->fileFieldGroup( $model,'image',  array('wrapperHtmlOptions' => array( 'class' => 'col-sm-5', )  ) );
  echo $form->fileFieldGroup( $model,'file',  array('wrapperHtmlOptions' => array( 'class' => 'col-sm-5', )  ) );
  echo $form->fileFieldGroup( $model,'video',  array('wrapperHtmlOptions' => array( 'class' => 'col-sm-5', )  ) );

//  echo $form->fileFieldGroup($model, 'fileField',
//    array(
//      'wrapperHtmlOptions' => array(
//        'class' => 'col-sm-5',
//      ),
//    )
//  );




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
<?php //$form=$this->beginWidget('CActiveForm', array(
//	'id'=>'food-form',
//	// Please note: When you enable ajax validation, make sure the corresponding
//	// controller action is handling ajax validation correctly.
//	// There is a call to performAjaxValidation() commented in generated controller code.
//	// See class documentation of CActiveForm for details on this.
//	'enableAjaxValidation'=>false,
//)); ?>
<!---->
<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<!---->
<!--	--><?php //echo $form->errorSummary($model); ?>
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'title'); ?>
<!--		--><?php //echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
<!--		--><?php //echo $form->error($model,'title'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'tieude'); ?>
<!--		--><?php //echo $form->textArea($model,'tieude',array('rows'=>6, 'cols'=>50)); ?>
<!--		--><?php //echo $form->error($model,'tieude'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'content'); ?>
<!--		--><?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
<!--		--><?php //echo $form->error($model,'content'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'noidung'); ?>
<!--		--><?php //echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
<!--		--><?php //echo $form->error($model,'noidung'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'is_public'); ?>
<!--		--><?php //echo $form->textField($model,'is_public'); ?>
<!--		--><?php //echo $form->error($model,'is_public'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'category_id'); ?>
<!--		--><?php //echo $form->textField($model,'category_id'); ?>
<!--		--><?php //echo $form->error($model,'category_id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'del_flag'); ?>
<!--		--><?php //echo $form->textField($model,'del_flag'); ?>
<!--		--><?php //echo $form->error($model,'del_flag'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'feature_flag'); ?>
<!--		--><?php //echo $form->textField($model,'feature_flag'); ?>
<!--		--><?php //echo $form->error($model,'feature_flag'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'create_user'); ?>
<!--		--><?php //echo $form->textField($model,'create_user'); ?>
<!--		--><?php //echo $form->error($model,'create_user'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'updated_user'); ?>
<!--		--><?php //echo $form->textField($model,'updated_user'); ?>
<!--		--><?php //echo $form->error($model,'updated_user'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'create_date'); ?>
<!--		--><?php //echo $form->textField($model,'create_date'); ?>
<!--		--><?php //echo $form->error($model,'create_date'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'updated_date'); ?>
<!--		--><?php //echo $form->textField($model,'updated_date'); ?>
<!--		--><?php //echo $form->error($model,'updated_date'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'image'); ?>
<!--		--><?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>256)); ?>
<!--		--><?php //echo $form->error($model,'image'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'video'); ?>
<!--		--><?php //echo $form->textField($model,'video',array('size'=>60,'maxlength'=>256)); ?>
<!--		--><?php //echo $form->error($model,'video'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'file'); ?>
<!--		--><?php //echo $form->textField($model,'file',array('size'=>60,'maxlength'=>256)); ?>
<!--		--><?php //echo $form->error($model,'file'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row buttons">-->
<!--		--><?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
<!--	</div>-->
<!---->
<?php //$this->endWidget(); ?>
<!---->
<!--</div><!-- form -->
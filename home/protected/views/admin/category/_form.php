<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>
<style>
  .well{
    background-color: white !important;

  }
</style>
<div class="form">

<?php
//$form=$this->beginWidget('CActiveForm', array(
	//=>'category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
//	'enableAjaxValidation'=>false,
//));
  $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
      'id' => 'category-form',
      'type' => 'horizontal',
      'htmlOptions' => array('class' => 'well'),
      'enableAjaxValidation'=>false,
    )
  );
    echo '<p class="note">Fields with <span class="required">*</span> are required.</p>';
  $parent = Category::model()->listCategory();
  $list_category = array(0 => 'Root') + $parent;

    echo $form->dropDownListGroup(  $model,  'parent_id',
      array(
        'wrapperHtmlOptions' => array(
          'class' => 'col-sm-5',
        ),
        'widgetOptions' => array(
          'data' => $list_category,
          'htmlOptions' => array(),
        )
      )
    );
    echo $form->textFieldGroup(
    $model,'name',
    array(
      'wrapperHtmlOptions' => array(
        'class' => 'textfield', )
    )
    );

  echo $form->textFieldGroup($model, 'tieude',
    array(
    'wrapperHtmlOptions' => array(
      'class' => 'textfield', )
    ));
  echo $form->radioButtonListGroup(
    $model,
    'priority',
    array(
      'widgetOptions' => array(
        'data' => array(
          '1' => 'Một','2' =>'Hai', '3' =>'Ba',  '4' =>'Bốn'
        )
      )
    )
  );
    $list_menu_type = Category::model()->getListMenuType();

    if($model->isNewRecord) {
      echo $form->dropDownListGroup(  $model,  'menu_type',
        array(
          'wrapperHtmlOptions' => array(
            'class' => 'col-sm-5',
          ),
          'widgetOptions' => array(
            'data' => $list_menu_type,
            'htmlOptions' => array(),
          )
        )
      );
    } else {
      echo $form->dropDownListGroup(  $model,  'menu_type',
        array(
          'wrapperHtmlOptions' => array(
            'class' => 'col-sm-5',
          ),
          'widgetOptions' => array(
            'data' => $list_menu_type,
            'htmlOptions' => array('disabled'=> true),
          )
        )
      );
    }
?>
  <div style="text-align: center">
      <?php
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

    ?>
  </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
  'Login',
);
?>

<span id="title">Login</span>

<fieldset>
  <?php /** @var BootActiveForm $form */
//  $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
//    'id'=>'verticalForm',
//    'type'=>'horizontal',
//    'htmlOptions'=>array('class'=>'well'),
//  ));
  $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
      'id' => 'verticalForm',
      'htmlOptions' => array('class' => 'well'), // for inset effect
    )
  );

  echo $form->textFieldGroup($model, 'username');
  echo $form->passwordFieldGroup($model, 'password');
  echo $form->checkboxGroup($model, 'rememberMe');
  $this->widget(
    'booster.widgets.TbButton',
    array('buttonType' => 'submit', 'label' => 'Login')
  );

  $this->endWidget();
  unset($form);
  ?>

<!--  <div id="forgotpass">-->
<!--    --><?php //echo CHtml::link('Forgot password?',array('ForgotPassword/forgotPassword')); ?>
<!--  </div>-->
</fieldset>
<?php //$this->endWidget(); ?>

<?php
/* @var $this NaturesController */
/* @var $data Natures */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tieude')); ?>:</b>
	<?php echo CHtml::encode($data->tieude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noidung')); ?>:</b>
	<?php echo CHtml::encode($data->noidung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genre_nature_id')); ?>:</b>
	<?php echo CHtml::encode($data->genre_nature_id); ?>
	<br />


</div>
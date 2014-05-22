<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_book')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->record_book), array('view', 'id'=>$data->record_book)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groop_id')); ?>:</b>
	<?php echo CHtml::encode($data->groop_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_name')); ?>:</b>
	<?php echo CHtml::encode($data->student_name); ?>
	<br />


</div>
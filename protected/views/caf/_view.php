<?php
/* @var $this CafController */
/* @var $data Caf */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('caf_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->caf_id), array('view', 'id'=>$data->caf_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty_id')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caf_name')); ?>:</b>
	<?php echo CHtml::encode($data->caf_name); ?>
	<br />


</div>
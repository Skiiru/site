<?php
/* @var $this RateController */
/* @var $data Rate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rate_id), array('view', 'id'=>$data->rate_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discipline_id')); ?>:</b>
	<?php echo CHtml::encode($data->discipline_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />


</div>
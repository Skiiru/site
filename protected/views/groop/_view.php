<?php
/* @var $this GroopController */
/* @var $data Groop */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('groop_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->groop_id), array('view', 'id'=>$data->groop_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caf_id')); ?>:</b>
	<?php echo CHtml::encode($data->caf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groop_name')); ?>:</b>
	<?php echo CHtml::encode($data->groop_name); ?>
	<br />


</div>
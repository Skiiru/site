<?php
/* @var $this DisciplineController */
/* @var $data Discipline */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher name')); ?>:</b>
	<?php echo CHtml::encode($data->teacher->teacher_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discipline_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->discipline_name),array('discipline/view&id='."$data->discipline_id")); ?>
	<br />


</div>
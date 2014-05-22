<?php
/* @var $this FacultyController */
/* @var $data Faculty */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->faculty_id), array('view', 'id'=>$data->faculty_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty_name')); ?>:</b>
	<?php echo CHtml::encode($data->faculty_name); ?>
	<br />


</div>
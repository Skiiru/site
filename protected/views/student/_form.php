<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'record_book'); ?>
		<?php echo $form->textField($model,'record_book'); ?>
		<?php echo $form->error($model,'record_book'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groop_id'); ?>
		<?php echo $form->textField($model,'groop_id'); ?>
		<?php echo $form->error($model,'groop_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_name'); ?>
		<?php echo $form->textField($model,'student_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'student_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
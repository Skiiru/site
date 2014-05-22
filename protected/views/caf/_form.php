<?php
/* @var $this CafController */
/* @var $model Caf */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caf-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'faculty_id'); ?>
		<?php echo $form->textField($model,'faculty_id'); ?>
		<?php echo $form->error($model,'faculty_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caf_name'); ?>
		<?php echo $form->textField($model,'caf_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'caf_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
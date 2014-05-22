<?php
/* @var $this CafController */
/* @var $model Caf */

$this->breadcrumbs=array(
	'Cafs'=>array('index'),
	$model->caf_id,
);

$this->menu=array(
	array('label'=>'List Caf', 'url'=>array('index')),
	array('label'=>'Create Caf', 'url'=>array('create')),
	array('label'=>'Update Caf', 'url'=>array('update', 'id'=>$model->caf_id)),
	array('label'=>'Delete Caf', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caf_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caf', 'url'=>array('admin')),
);
?>

<h1>View Caf #<?php echo $model->caf_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caf_id',
		'faculty_id',
		'caf_name',
	),
)); ?>

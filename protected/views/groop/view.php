<?php
/* @var $this GroopController */
/* @var $model Groop */

$this->breadcrumbs=array(
	'Groops'=>array('index'),
	$model->groop_id,
);

$this->menu=array(
	array('label'=>'List Groop', 'url'=>array('index')),
	array('label'=>'Create Groop', 'url'=>array('create')),
	array('label'=>'Update Groop', 'url'=>array('update', 'id'=>$model->groop_id)),
	array('label'=>'Delete Groop', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->groop_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groop', 'url'=>array('admin')),
);
?>

<h1>View Groop #<?php echo $model->groop_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'groop_id',
		'caf_id',
		'groop_name',
	),
)); ?>

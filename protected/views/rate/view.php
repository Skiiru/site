<?php
/* @var $this RateController */
/* @var $model Rate */

$this->breadcrumbs=array(
	'Rates'=>array('index'),
	$model->rate_id,
);

$this->menu=array(
	array('label'=>'List Rate', 'url'=>array('index')),
	array('label'=>'Create Rate', 'url'=>array('create')),
	array('label'=>'Update Rate', 'url'=>array('update', 'id'=>$model->rate_id)),
	array('label'=>'Delete Rate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rate_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rate', 'url'=>array('admin')),
);
?>

<h1>View Rate #<?php echo $model->rate_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rate_id',
		'discipline_id',
		'student_id',
		'rate',
	),
)); ?>

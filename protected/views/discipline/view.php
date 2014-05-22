<?php
/* @var $this DisciplineController */
/* @var $model Discipline */

$this->breadcrumbs=array(
	'Disciplines'=>array('index'),
	$model->discipline_id,
);

$this->menu=array(
	array('label'=>'List Discipline', 'url'=>array('index')),
	array('label'=>'Create Discipline', 'url'=>array('create')),
	array('label'=>'Update Discipline', 'url'=>array('update', 'id'=>$model->discipline_id)),
	array('label'=>'Delete Discipline', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->discipline_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Discipline', 'url'=>array('admin')),
);
?>

<h1>View Discipline <?php echo $model->discipline_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		"teacher_id",
		'discipline_name',
	),
)); ?>

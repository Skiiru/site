<?php
/* @var $this DisciplineController */
/* @var $model Discipline */

$this->breadcrumbs=array(
	'Disciplines'=>array('index'),
	$model->discipline_id=>array('view','id'=>$model->discipline_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Discipline', 'url'=>array('index')),
	array('label'=>'Create Discipline', 'url'=>array('create')),
	array('label'=>'View Discipline', 'url'=>array('view', 'id'=>$model->discipline_id)),
	array('label'=>'Manage Discipline', 'url'=>array('admin')),
);
?>

<h1>Update Discipline <?php echo $model->discipline_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
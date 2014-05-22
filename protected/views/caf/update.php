<?php
/* @var $this CafController */
/* @var $model Caf */

$this->breadcrumbs=array(
	'Cafs'=>array('index'),
	$model->caf_id=>array('view','id'=>$model->caf_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caf', 'url'=>array('index')),
	array('label'=>'Create Caf', 'url'=>array('create')),
	array('label'=>'View Caf', 'url'=>array('view', 'id'=>$model->caf_id)),
	array('label'=>'Manage Caf', 'url'=>array('admin')),
);
?>

<h1>Update Caf <?php echo $model->caf_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
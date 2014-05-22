<?php
/* @var $this GroopController */
/* @var $model Groop */

$this->breadcrumbs=array(
	'Groops'=>array('index'),
	$model->groop_id=>array('view','id'=>$model->groop_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Groop', 'url'=>array('index')),
	array('label'=>'Create Groop', 'url'=>array('create')),
	array('label'=>'View Groop', 'url'=>array('view', 'id'=>$model->groop_id)),
	array('label'=>'Manage Groop', 'url'=>array('admin')),
);
?>

<h1>Update Groop <?php echo $model->groop_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this GroopController */
/* @var $model Groop */

$this->breadcrumbs=array(
	'Groops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Groop', 'url'=>array('index')),
	array('label'=>'Manage Groop', 'url'=>array('admin')),
);
?>

<h1>Create Groop</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
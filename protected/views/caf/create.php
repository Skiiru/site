<?php
/* @var $this CafController */
/* @var $model Caf */

$this->breadcrumbs=array(
	'Cafs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caf', 'url'=>array('index')),
	array('label'=>'Manage Caf', 'url'=>array('admin')),
);
?>

<h1>Create Caf</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
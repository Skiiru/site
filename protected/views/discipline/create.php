<?php
/* @var $this DisciplineController */
/* @var $model Discipline */

$this->breadcrumbs=array(
	'Disciplines'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Discipline', 'url'=>array('index')),
	array('label'=>'Manage Discipline', 'url'=>array('admin')),
);
?>

<h1>Create Discipline</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
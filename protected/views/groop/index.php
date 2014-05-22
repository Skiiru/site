<?php
/* @var $this GroopController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groops',
);

$this->menu=array(
	array('label'=>'Create Groop', 'url'=>array('create')),
	array('label'=>'Manage Groop', 'url'=>array('admin')),
);
?>

<h1>Groops</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this CafController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cafs',
);

$this->menu=array(
	array('label'=>'Create Caf', 'url'=>array('create')),
	array('label'=>'Manage Caf', 'url'=>array('admin')),
);
?>

<h1>Cafs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

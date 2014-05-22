<h1>Успеваемость по факультету</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'caf_id',
'dataProvider'=>$dataProvider,
'columns'=>array(
array('name'=>'caf_name', 'header'=>'Имя кафедры'),
array('name'=>'groop_name','header'=>'Имя группы'),
array('name'=>'discipline_name', 'header'=>'Название дисциплины'),
array('name'=>'student_name', 'header'=>'Имя студента'),
array('name'=>'rate', 'header'=>'Оценка'),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
'viewButtonUrl'=>null,
'updateButtonUrl'=>null,
'deleteButtonUrl'=>null,
),
),
'emptyText'=>'Пустая БД',
)); ?>
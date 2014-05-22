<h1>Успеваемость по студенту</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'caf_id',
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        array('name'=>'discipline_name','header'=>'Название дисицлины'),
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
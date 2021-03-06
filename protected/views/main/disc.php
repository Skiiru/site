<h1>Успеваемость по Дисциплине</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'caf_id',
'dataProvider'=>$dataProvider,
'columns'=>array(
array('name'=>'groop_name', 'header'=>'Название группы'),
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
<script src="Chart.js">
    var ctx = document.getElementById("myChart").getContext("2d");
    //var myNewChart = new Chart(ctx).PolarArea(data);
    var data = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]
    }
     var chart = new Chart(ctx).Line(data,options);
</script>
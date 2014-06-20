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
<canvas id="myChart" width="400" height="400"></canvas>
<script src="Chart.js"></script>
<script>
    var dataforchart = {
        labels: <?php
        $data=$dataProvider->getData();
        $dsc=array();
        foreach($dataProvider->getData() as $data) array_push($dsc,$data['discipline_name']);
        echo json_encode($dsc); ?>,
        datasets:[
            {
                fillColor:"rgba(220,220,220,0.5)",
                strokeColor:"rgba(220,220,220,1)",
                data:
                <?php
                $data=$dataProvider->getData();
                $r=array();
                foreach($dataProvider->getData() as $data) array_push($r,$data['rate']);
                echo json_encode($r);?>
            }]
    }
    var ch=document.getElementById('myChart').getContext('2d');
    new Chart(ch).Line(dataforchart);
    //var myChart= new Chart(document.getElementById("myChart").getContext("2d").Pie(dataforchart));
</script>
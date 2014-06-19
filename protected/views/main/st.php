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
<canvas id="myChart" width="400" height="400">
</canvas>
<div class="btn">
<script src="Chart.js"></script>
<script>
    var dataforchart = {
        labels: <?php foreach($dataProvider->getData as $data)
         {
            echo $data->
         }
         }?>,
        datasets:[
            {
                fillColor:"rgba(220,220,220,0.5)",
                strokeColor:"rgba(100,100,100,1)",
                data:<?php echo json_encode($dataProvider->getSort()->attributes[1])?>
            }
    }
    var ch=document.getElementById('myChart').getContext('2d');
    new Chart(ch).Bar(dataforchart);
    //var myChart= new Chart(document.getElementById("myChart").getContext("2d").Pie(dataforchart));
</script>
</div>
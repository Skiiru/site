<?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'Успеваемость'
    ));
        $this->endWidget();
?>

Выберите функцию:

	<div class="row">
		<?php echo CHtml::dropDownList('Выберите функцию:',1,$dropDownArray, array($_POST['selected']=>'select')); ?>
	</div>
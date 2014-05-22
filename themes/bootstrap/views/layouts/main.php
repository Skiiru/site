<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'БД','url'=>array('db/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Успеваемость','url'=>array('main/index'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
));
?>


<div class="container" id="page">
<?php
if($this->getUniqueId()!='site')
{ 
$this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'БД'
    ));
    $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills',
    'stacked'=>false,
    'items'=>array(
        array('label'=>'Преподаватели','url'=>array('/teacher/index')),
        array('label'=>'Дисциплины','url'=>array('/discipline/index')),
        array('label'=>'Факультеты','url'=>array('/faculty/index')),
        array('label'=>'Кафедры','url'=>array('/caf/index')),
        array('label'=>'Группы','url'=>array('/groop/index')),
        array('label'=>'Студенты','url'=>array('/student/index')),
        array('label'=>'Успеваемость','url'=>array('/rate/index')),
    ),
        ));
        $this->endWidget();
        }
?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>



</div><!-- page -->

</body>
</html>

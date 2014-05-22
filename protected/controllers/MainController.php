<?php
	class MainController extends Controller
    {
        public $layout='//layouts/column2';
        
        public function actionIndex(){
  		    $this->render('index',array('dropDownArray'=>array(
              'main/fac'=>'Успеваемость по факльтету',
              'main/caf'=>'Успеваемость по кафедре',
              'main/gr'=>'Успеваемость по группе',
              'main/st'=>'Успеваемость по студенту',
               'main/disc'=>'Успеваемость по дисциплине',
               'main/pr'=>'Успеваемость по преподавателю',
              ),
		));
        }
        public function actionCaf($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_caf($id), array(
            'keyField'=>'Caf_id',
            'sort'=> array(
                'attributes'=>array(
                    'groop_name','discipline_name','student_name','rate'),),
            ));
            $this->render('caf',array('dataProvider'=>$dataProvider));
        }
        public function actionFac($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_fac($id), array(
            'keyField'=>'Fac_id',
            'sort'=> array(
                'attributes'=>array(
                    'caf_name','groop_name','discipline_name','student_name','rate'),),
            ));
            $this->render('fac',array('dataProvider'=>$dataProvider));
        }
        public function actionGr($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_gr($id), array(
                'keyField'=>'groop_id',
                'sort'=> array(
                    'attributes'=>array(
                        'discipline_name','student_name','rate'),),
            ));
            $this->render('gr',array('dataProvider'=>$dataProvider));
        }
        public function actionDisc($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_disc($id), array(
                'keyField'=>'discipline_id',
                'sort'=> array(
                    'attributes'=>array(
                       'student_name','rate'),),
            ));
            $this->render('disc',array('dataProvider'=>$dataProvider));
        }
        public function actionSt($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_st($id), array(
                'keyField'=>'record_book',
                'sort'=> array(
                    'attributes'=>array(
                        'discipline_name','rate'),),
            ));
            $this->render('st',array('dataProvider'=>$dataProvider));
        }
        public function actionPrep($id)
        {
            $dataProvider = new CArrayDataProvider(Main::rate_prep($id), array(
                'keyField'=>'teacher_id',
                'sort'=> array(
                    'attributes'=>array(
                        'groop_name','student_name','discipline_name','rate'),),
            ));
            $this->render('prep',array('dataProvider'=>$dataProvider));
        }
    }
?>
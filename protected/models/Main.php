<?php
	class Main
    {
        public static function rate_caf($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_caf('.$id.');')->queryAll();
        }
        public static function rate_fac($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_fac('.$id.');')->queryAll();
        }
        public function rate_disc($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_disc('.$id.');')->queryAll();
        }
        public function rate_gr($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_gr('.$id.');')->queryAll();
        }
        public function rate_st1($id)
        {
            $data = array();
            $std=new Student();
            $rate=new Rate();
            $stdlst=$std->findAllByPk($id);
            foreach($stdlst as $student)
            {
                foreach($rate->findAllByAttributes(
                            array(),
                            $condition='student_id='.$student-> record_book,
                            $params= array(
                               // ':record_book'=>$student->record_book,
                            )
                        )
                        as $r)
                {
                    //$dsc=new Discipline();
                    $dsc_name='';
                    //$dsc_name=Discipline::model()->findByPk($r->discipline_id);
                    $data+=array($student->student_name,$dsc_name,$r->rate);
                }
            }
            return $data;
            //return Yii::app()->db->createCommand('CALL show_usp_by_st('.$id.');')->queryAll();
        }
        public function rate_st($id)
        {
           return Yii::app()->db->CreateCommand()->
               select('discipline_name, rate')->
               from('student st')->
               join('rate r','r.student_id=st.record_book')->
               join('discipline dsc','r.discipline_id=dsc.discipline_id')->
               where('st.record_book=:id',array(':id'=>$id))->
               group('rate')->
               queryAll();
           // return $r;
        }
        public function rate_prep($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_prep('.$id.');')->queryAll();
        }
    }
?>
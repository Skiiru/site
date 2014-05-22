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
        public function rate_st($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_st('.$id.');')->queryAll();
        }
        public function rate_prep($id)
        {
            return Yii::app()->db->createCommand('CALL show_usp_by_prep('.$id.');')->queryAll();
        }
    }
?>
<?php

/**
 * This is the model class for table "discipline".
 *
 * The followings are the available columns in table 'discipline':
 * @property integer $discipline_id
 * @property integer $teacher_id
 * @property string $discipline_name
 *
 * The followings are the available model relations:
 * @property Teacher $teacher
 * @property Rate[] $rates
 */
class Discipline extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'discipline';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id, discipline_name', 'required'),
			array('teacher_id', 'numerical', 'integerOnly'=>true),
			array('discipline_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('discipline_id, teacher_id, discipline_name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'teacher' => array(self::BELONGS_TO, 'Teacher', 'teacher_id'),
			'rates' => array(self::HAS_MANY, 'Rate', 'discipline_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'discipline_id' => 'Discipline',
			'teacher_id' => 'Teacher',
			'discipline_name' => 'Discipline Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('discipline_id',$this->discipline_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('discipline_name',$this->discipline_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Discipline the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public static function forlist()
    {
        $models= self::model()->findAll();
        return CHtml::listData($models,'discipline_id','discipline_name');
    }
}

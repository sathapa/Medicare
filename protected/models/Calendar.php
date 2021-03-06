<?php

/**
 * This is the model class for table "10_calendar".
 *
 * The followings are the available columns in table '10_calendar':
 * @property integer $Id
 * @property string $Subject
 * @property string $Location
 * @property string $Description
 * @property string $StartTime
 * @property string $EndTime
 * @property integer $IsAllDayEvent
 * @property string $Color
 * @property string $RecurringRule
 */
class Calendar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Calendar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
        $session = Yii::app()->session;
        $dcal = $session['did'];
//        $calval = $dcal[0];
		return $dcal.'_calendar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('IsAllDayEvent, pid', 'required'),
            array('IsAllDayEvent', 'required'),
			array('IsAllDayEvent,stat', 'numerical', 'integerOnly'=>true),
			array('Subject', 'length', 'max'=>1000),
			array('Location, Color', 'length', 'max'=>200),
			array('Description', 'length', 'max'=>255),
			array('RecurringRule', 'length', 'max'=>500),
			array('StartTime, EndTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Subject, Location, Description, StartTime, EndTime, IsAllDayEvent, Color, RecurringRule', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
            'Pid' => 'Pid',
			'Subject' => 'Patients',
			'Location' => 'Location',
			'Description' => 'Description',
			'StartTime' => 'Start Time',
			'EndTime' => 'End Time',
			'IsAllDayEvent' => 'Is All Day Event',
			'Color' => 'Color',
			'RecurringRule' => 'Recurring Rule',
            'stat' => 'Stat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Subject',$this->Subject,true);
		$criteria->compare('Location',$this->Location,true);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('StartTime',$this->StartTime,true);
		$criteria->compare('EndTime',$this->EndTime,true);
		$criteria->compare('IsAllDayEvent',$this->IsAllDayEvent);
		$criteria->compare('Color',$this->Color,true);
		$criteria->compare('RecurringRule',$this->RecurringRule,true);
        $criteria->compare('stat',$this->stat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    // stat=1 => new
    public function searchNew()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('Id',$this->Id);
        $criteria->compare('Subject',$this->Subject,true);
        $criteria->compare('Location',$this->Location,true);
        $criteria->compare('Description',$this->Description,true);
        $criteria->compare('StartTime',$this->StartTime,true);
        $criteria->compare('EndTime',$this->EndTime,true);
        $criteria->compare('IsAllDayEvent',$this->IsAllDayEvent);
        $criteria->compare('Color',$this->Color,true);
        $criteria->compare('RecurringRule',$this->RecurringRule,true);
        $criteria->compare('stat',1,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    // stat=2 => followUp
    public function searchOld()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('Id',$this->Id);
        $criteria->compare('Subject',$this->Subject,true);
        $criteria->compare('Location',$this->Location,true);
        $criteria->compare('Description',$this->Description,true);
        $criteria->compare('StartTime',$this->StartTime,true);
        $criteria->compare('EndTime',$this->EndTime,true);
        $criteria->compare('IsAllDayEvent',$this->IsAllDayEvent);
        $criteria->compare('Color',$this->Color,true);
        $criteria->compare('RecurringRule',$this->RecurringRule,true);
        $criteria->compare('stat',2,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
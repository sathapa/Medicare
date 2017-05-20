<?php

/**
 * This is the model class for table "data_appointment".
 *
 * The followings are the available columns in table 'data_appointment':
 * @property integer $id
 * @property string $title
 * @property string $fName
 * @property string $mName
 * @property string $lName
 * @property string $gender
 * @property string $homePhone
 * @property string $mobilePhone
 * @property string $clerk
 * @property string $dID
 * @property string $date
 * @property string $time
 */
class Appointment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_appointment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, fName, lName, gender, homePhone, mobilePhone, clerk, dID, reason, date, time, stat, type, medium', 'required'),
            array('mName', 'safe'),
			array('title, fName, mName, lName, gender, homePhone, mobilePhone, clerk, dID, date, time', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, fName, mName, lName, gender, homePhone, mobilePhone, clerk, dID, date, time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'title' => 'Title',
			'fName' => 'F Name',
			'mName' => 'M Name',
			'lName' => 'L Name',
			'gender' => 'Gender',
			'homePhone' => 'Home Phone',
			'mobilePhone' => 'Mobile Phone',
			'clerk' => 'Clerk',
			'dID' => 'D',
            'reason'=>'Reason',
			'date' => 'Date',
			'time' => 'Time',
            'stat' => 'Stat',
            'type' => 'Type',
            'medium' => 'Medium',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fName',$this->fName,true);
		$criteria->compare('mName',$this->mName,true);
		$criteria->compare('lName',$this->lName,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('homePhone',$this->homePhone,true);
		$criteria->compare('mobilePhone',$this->mobilePhone,true);
		$criteria->compare('clerk',$this->clerk,true);
		$criteria->compare('dID',$this->dID,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
        $criteria->compare('type','new',true);
        $criteria->compare('medium',$this->time,true);
        $criteria->compare('stat',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function searchOld()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        $cond = new CDbExpression('new');

        $criteria->addCondition('type != "'.$cond.'"');
        $criteria->compare('id',$this->id);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('fName',$this->fName,true);
        $criteria->compare('mName',$this->mName,true);
        $criteria->compare('lName',$this->lName,true);
        $criteria->compare('gender',$this->gender,true);
        $criteria->compare('homePhone',$this->homePhone,true);
        $criteria->compare('mobilePhone',$this->mobilePhone,true);
        $criteria->compare('clerk',$this->clerk,true);
        $criteria->compare('dID',$this->dID,true);
        $criteria->compare('date',$this->date,true);
        $criteria->compare('time',$this->time,true);
        $criteria->compare('type','',true);
        $criteria->compare('medium',$this->time,true);
        $criteria->compare('stat',1);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Appointment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

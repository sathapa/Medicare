<?php

/**
 * This is the model class for table "doctor_leave".
 *
 * The followings are the available columns in table 'doctor_leave':
 * @property integer $lid
 * @property integer $eid
 * @property string $date
 * @property integer $mShift
 * @property integer $dshift
 * @property integer $eShift
 * @property integer $nShift
 *
 * The followings are the available model relations:
 * @property DataEmployee $e
 */
class DoctorLeave extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DoctorLeave the static model class
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
		return 'doctor_leave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('eid, date, mShift, dshift, eShift, nShift', 'required'),
			array('eid, mShift, dshift, eShift, nShift', 'numerical', 'integerOnly'=>true),
			array('date', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lid, eid, date, mShift, dshift, eShift, nShift', 'safe', 'on'=>'search'),
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
			'e' => array(self::BELONGS_TO, 'DataEmployee', 'eid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lid' => 'Lid',
			'eid' => 'Eid',
			'date' => 'Date',
			'mShift' => 'M Shift',
			'dshift' => 'Dshift',
			'eShift' => 'E Shift',
			'nShift' => 'N Shift',
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

		$criteria->compare('lid',$this->lid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('mShift',$this->mShift);
		$criteria->compare('dshift',$this->dshift);
		$criteria->compare('eShift',$this->eShift);
		$criteria->compare('nShift',$this->nShift);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
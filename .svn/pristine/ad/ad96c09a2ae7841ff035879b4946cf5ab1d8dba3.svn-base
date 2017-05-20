<?php

/**
 * This is the model class for table "doctor_charge".
 *
 * The followings are the available columns in table 'doctor_charge':
 * @property integer $dcid
 * @property integer $eid
 * @property double $charge
 */
class DoctorCharge extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DoctorCharge the static model class
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
		return 'doctor_charge';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('eid, charge', 'required'),
			array('eid', 'numerical', 'integerOnly'=>true),
			array('charge', 'numerical'),
            array('eid','unique','on'=>'create','message'=>'<strong>Charge already assigned</strong><br>Please Update Doctor Charge Instead</br>'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dcid, eid, charge', 'safe', 'on'=>'search'),
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
            'user'=>array(self::BELONGS_TO, 'Employee', 'eid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dcid' => 'Dcid',
			'eid' => 'Eid',
			'charge' => 'Charge',
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

		$criteria->compare('dcid',$this->dcid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('charge',$this->charge);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "ph_bill_identity".
 *
 * The followings are the available columns in table 'ph_bill_identity':
 * @property integer $phbiid
 * @property integer $phid
 * @property integer $phbid
 * @property integer $pid
 * @property integer $eid
 * @property double $price
 * @property string $datetime
 */
class PhBillIdentity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhBillIdentity the static model class
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
		return 'ph_bill_identity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phid, phbid, pid, eid, price, datetime', 'required'),
			array('phid, phbid, pid, eid', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phbiid, phid, phbid, pid, eid, price, datetime', 'safe', 'on'=>'search'),
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
			'phbiid' => 'Phbiid',
			'phid' => 'Phid',
			'phbid' => 'Phbid',
			'pid' => 'Pid',
			'eid' => 'Eid',
			'price' => 'Price',
			'datetime' => 'Datetime',
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

		$criteria->compare('phbiid',$this->phbiid);
		$criteria->compare('phid',$this->phid);
		$criteria->compare('phbid',$this->phbid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('price',$this->price);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
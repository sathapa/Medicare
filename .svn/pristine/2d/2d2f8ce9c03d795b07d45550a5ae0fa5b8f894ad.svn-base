<?php

/**
 * This is the model class for table "lab_bill_inventory".
 *
 * The followings are the available columns in table 'lab_bill_inventory':
 * @property integer $lbiid
 * @property integer $lid
 * @property integer $lbid
 * @property integer $pid
 * @property integer $eid
 * @property integer $datetime
 */
class LabBillInventory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LabBillInventory the static model class
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
		return 'lab_bill_inventory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lid, lbid, pid, eid, datetime', 'required'),
			array('lid, lbid, pid, eid, datetime', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lbiid, lid, lbid, pid, eid, datetime', 'safe', 'on'=>'search'),
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
			'lbiid' => 'Lbiid',
			'lid' => 'Lid',
			'lbid' => 'Lbid',
			'pid' => 'Pid',
			'eid' => 'Eid',
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

		$criteria->compare('lbiid',$this->lbiid);
		$criteria->compare('lid',$this->lid);
		$criteria->compare('lbid',$this->lbid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('datetime',$this->datetime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
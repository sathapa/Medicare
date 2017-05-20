<?php

/**
 * This is the model class for table "lab_bill".
 *
 * The followings are the available columns in table 'lab_bill':
 * @property integer $lbid
 * @property integer $pid
 * @property integer $eid
 * @property double $discount
 * @property double $vat
 * @property double $tax
 * @property double $total
 * @property integer $change
 * @property integer $remarks
 * @property string $datetime
 */
class LabBill extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LabBill the static model class
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
		return 'lab_bill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, eid, discount, vat, tax, total, change, remarks, datetime', 'required'),
			array('pid, eid, change, remarks', 'numerical', 'integerOnly'=>true),
			array('discount, vat, tax, total', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lbid, pid, eid, discount, vat, tax, total, change, remarks, datetime', 'safe', 'on'=>'search'),
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
			'lbid' => 'Lbid',
			'pid' => 'Pid',
			'eid' => 'Eid',
			'discount' => 'Discount',
			'vat' => 'Vat',
			'tax' => 'Tax',
			'total' => 'Total',
			'change' => 'Change',
			'remarks' => 'Remarks',
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

		$criteria->compare('lbid',$this->lbid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('total',$this->total);
		$criteria->compare('change',$this->change);
                
		$criteria->compare('remarks',$this->remarks);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
}
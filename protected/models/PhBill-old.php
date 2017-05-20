<?php

/**
 * This is the model class for table "ph_bill".
 *
 * The followings are the available columns in table 'ph_bill':
 * @property integer $phbid
 * @property integer $pid
 * @property integer $eid
 * @property double $discount
 * @property double $vat
 * @property double $tax
 * @property double $total
 * @property double $tender
 * @property string $change
 * @property string $date
 */
class PhBill extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhBill the static model class
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
		return 'ph_bill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, eid, total, tender, change, charge', 'required'),
			array('pid, eid', 'numerical', 'integerOnly'=>true),
			array('discount, vat, tax, total, tender', 'numerical'),
			array('date,time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phbid, pid, eid, discount, vat, tax, total, tender, change, date', 'safe', 'on'=>'search'),
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
			'phbid' => 'Phbid',
			'pid' => 'Pid',
			'eid' => 'Eid',
            'charge' => 'Charge',
			'discount' => 'Discount',
			'vat' => 'Vat',
			'tax' => 'Tax',
			'total' => 'Total',
			'tender' => 'Tender',
			'change' => 'Change',
			'date' => 'date',
            'time' => 'time',
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

		$criteria->compare('phbid',$this->phbid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
        $criteria->compare('charge',$this->charge);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('total',$this->total);
		$criteria->compare('tender',$this->tender);
		$criteria->compare('change',$this->change,true);
		$criteria->compare('date',$this->date,true);
        $criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
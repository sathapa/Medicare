<?php

/**
 * This is the model class for table "reg_bill".
 *
 * The followings are the available columns in table 'reg_bill':
 * @property integer $rbid
 * @property integer $pid
 * @property integer $dr_eid
 * @property integer $clerk
 * @property double $discount
 * @property double $vat
 * @property double $tax
 * @property double $total
 * @property double $tender
 * @property double $change
 * @property string $remarks
 * @property string $datetime
 */
class RegBill extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reg_bill';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, dr_eid, clerk, discount, vat, total, tender, change', 'required'),
            array('tax, remarks, datetime','safe'),
			array('pid, dr_eid, clerk', 'numerical', 'integerOnly'=>true),
			array('discount, vat, tax, total, tender, change', 'numerical'),
			array('remarks', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rbid, pid, dr_eid, clerk, discount, vat, tax, total, tender, change, remarks, datetime', 'safe', 'on'=>'search'),
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
			'rbid' => 'Rbid',
			'pid' => 'Pid',
			'dr_eid' => 'Dr Eid',
			'clerk' => 'Clerk',
			'discount' => 'Discount',
			'vat' => 'Vat',
			'tax' => 'Tax',
			'total' => 'Total',
			'tender' => 'Tender',
			'change' => 'Change',
			'remarks' => 'Remarks',
			'datetime' => 'Datetime',
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

		$criteria->compare('rbid',$this->rbid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('dr_eid',$this->dr_eid);
		$criteria->compare('clerk',$this->clerk);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('tax',$this->tax);
		$criteria->compare('total',$this->total);
		$criteria->compare('tender',$this->tender);
		$criteria->compare('change',$this->change);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegBill the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

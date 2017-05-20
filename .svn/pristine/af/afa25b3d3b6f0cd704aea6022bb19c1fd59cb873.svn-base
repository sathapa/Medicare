<?php

/**
 * This is the model class for table "ph_inventory".
 *
 * The followings are the available columns in table 'ph_inventory':
 * @property integer $phid
 * @property string $eid
 * @property string $name
 * @property integer $quantity
 * @property string $quantity_type
 * @property string $man_date
 * @property string $exp_date
 * @property double $price
 * @property string $datetime
 */
class PhInventory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhInventory the static model class
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
		return 'ph_inventory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('eid, name, quantity, quantity_type, man_date, exp_date, price, datetime', 'required'),
			array('quantity', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('eid, name', 'length', 'max'=>100),
			array('quantity_type', 'length', 'max'=>50),
			array('man_date, exp_date', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phid, eid, name, quantity, quantity_type, man_date, exp_date, price, datetime', 'safe', 'on'=>'search'),
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
			'phid' => 'Phid',
			'eid' => 'Eid',
			'name' => 'Name',
			'quantity' => 'Quantity',
			'quantity_type' => 'Quantity Type',
			'man_date' => 'Man Date',
			'exp_date' => 'Exp Date',
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

		$criteria->compare('phid',$this->phid);
		$criteria->compare('eid',$this->eid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('quantity_type',$this->quantity_type,true);
		$criteria->compare('man_date',$this->man_date,true);
		$criteria->compare('exp_date',$this->exp_date,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
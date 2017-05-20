<?php

/**
 * This is the model class for table "ph_dispose".
 *
 * The followings are the available columns in table 'ph_dispose':
 * @property integer $id
 * @property integer $stock_id
 * @property string $SKU
 * @property integer $quantity
 * @property string $remarks
 * @property integer $clerk
 * @property string $date
 */
class PhDispose extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhDispose the static model class
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
		return 'ph_dispose';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock_id, SKU, quantity, remarks, clerk', 'required'),
			array('stock_id, quantity, clerk', 'numerical', 'integerOnly'=>true),
			array('SKU', 'length', 'max'=>50),
			array('remarks', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, stock_id, SKU, quantity, remarks, clerk, date', 'safe', 'on'=>'search'),
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
			'stock_id' => 'Stock',
			'SKU' => 'Sku',
			'quantity' => 'Quantity',
			'remarks' => 'Remarks',
			'clerk' => 'Clerk',
			'date' => 'Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('stock_id',$this->stock_id);
		$criteria->compare('SKU',$this->SKU,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('clerk',$this->clerk);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
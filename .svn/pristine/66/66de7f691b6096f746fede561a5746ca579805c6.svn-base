<?php

/**
 * This is the model class for table "ph_drug".
 *
 * The followings are the available columns in table 'ph_drug':
 * @property integer $drug_id
 * @property integer $stock_id
 * @property string $SKU
 * @property string $drug_cat
 * @property string $drug_root
 * @property string $brand_name
 * @property string $generic_name
 * @property integer $unit_value
 * @property string $unit_measurement
 * @property double $unit_price
 * @property integer $stat
 */
class PhDrug extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhDrug the static model class
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
		return 'ph_drug';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SKU, drug_cat, drug_root, brand_name, generic_name, unit_value, unit_measurement, unit_price, stat', 'required'),
			array('stock_id, unit_value, stat', 'numerical', 'integerOnly'=>true),
			array('unit_price', 'numerical'),
			array('SKU, drug_cat, drug_root, brand_name, generic_name', 'length', 'max'=>50),
			array('unit_measurement', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('drug_id, stock_id, SKU, drug_cat, drug_root, brand_name, generic_name, unit_value, unit_measurement, unit_price, stat', 'safe', 'on'=>'search'),
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
            'drugPH' => array(self::BELONGS_TO, 'PhStock', 'stock_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'drug_id' => 'Drug ID',
			'stock_id' => 'Stock ID',
			'SKU' => 'SKU',
			'drug_cat' => 'Drug Category',
			'drug_root' => 'Drug Route',
			'brand_name' => 'Brand Name',
			'generic_name' => 'Generic Name',
			'unit_value' => 'Unit Value',
			'unit_measurement' => 'Unit Measurement',
			'unit_price' => 'Unit Price',
			'stat' => 'Stat',
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

		$criteria->compare('drug_id',$this->drug_id);
		$criteria->compare('stock_id',$this->stock_id);
		$criteria->compare('SKU',$this->SKU,true);
		$criteria->compare('drug_cat',$this->drug_cat,true);
		$criteria->compare('drug_root',$this->drug_root,true);
		$criteria->compare('brand_name',$this->brand_name,true);
		$criteria->compare('generic_name',$this->generic_name,true);
		$criteria->compare('unit_value',$this->unit_value);
		$criteria->compare('unit_measurement',$this->unit_measurement,true);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('stat',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
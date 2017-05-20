<?php

/**
 * This is the model class for table "ph_stock".
 *
 * The followings are the available columns in table 'ph_stock':
 * @property integer $stock_id
 * @property string $SKU
 * @property integer $dis_id
 * @property integer $min_quantity
 * @property integer $instore_quantity
 * @property string $mfd_data
 * @property string $exp_data
 * @property integer $stat
 * @property integer $clerk
 * @property string $create_date
 */
class PhStock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhStock the static model class
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
		return 'ph_stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SKU, dis_id, min_quantity, instore_quantity, mfd_data, exp_data, stat, clerk, create_date', 'required'),
			array('dis_id, min_quantity, instore_quantity, stat, clerk', 'numerical', 'integerOnly'=>true),
			array('SKU', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('stock_id, SKU, dis_id, min_quantity, instore_quantity, mfd_data, exp_data, stat, clerk, create_date', 'safe', 'on'=>'search'),
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
			'stock_id' => 'Stock ID',
			'SKU' => 'SKU',
			'dis_id' => 'Distributor',
			'min_quantity' => 'Min. Quantity',
			'instore_quantity' => 'Instore Quantity',
			'mfd_data' => 'Mfd. Date',
			'exp_data' => 'Exp. Date',
			'stat' => 'Stat',
			'clerk' => 'Clerk',
			'create_date' => 'Create Date',
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

		$criteria->compare('stock_id',$this->stock_id);
		$criteria->compare('SKU',$this->SKU,true);
		$criteria->compare('dis_id',$this->dis_id);
		$criteria->compare('min_quantity',$this->min_quantity);
		$criteria->compare('instore_quantity',$this->instore_quantity);
		$criteria->compare('mfd_data',$this->mfd_data,true);
		$criteria->compare('exp_data',$this->exp_data,true);
		$criteria->compare('stat',$this->stat);
		$criteria->compare('clerk',$this->clerk);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "ph_distributor".
 *
 * The followings are the available columns in table 'ph_distributor':
 * @property integer $dis_id
 * @property string $dis_name
 * @property string $dis_address
 * @property string $dis_contact
 * @property integer $supply_quantity
 * @property integer $add_clerk
 */
class PhDistributor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhDistributor the static model class
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
		return 'ph_distributor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dis_name, dis_address, dis_contact, supply_quantity, add_clerk', 'required'),
			array('supply_quantity, add_clerk', 'numerical', 'integerOnly'=>true),
			array('dis_name, dis_contact', 'length', 'max'=>50),
			array('dis_address', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dis_id, dis_name, dis_address, dis_contact, supply_quantity, add_clerk', 'safe', 'on'=>'search'),
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
			'dis_id' => 'ID',
			'dis_name' => 'Name',
			'dis_address' => 'Address',
			'dis_contact' => 'Contact',
			'supply_quantity' => 'Supply Quantity',
			'add_clerk' => 'Add Clerk',
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

		$criteria->compare('dis_id',$this->dis_id);
		$criteria->compare('dis_name',$this->dis_name,true);
		$criteria->compare('dis_address',$this->dis_address,true);
		$criteria->compare('dis_contact',$this->dis_contact,true);
		$criteria->compare('supply_quantity',$this->supply_quantity);
		$criteria->compare('add_clerk',$this->add_clerk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
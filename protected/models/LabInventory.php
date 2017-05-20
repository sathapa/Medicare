<?php

/**
 * This is the model class for table "lab_inventory".
 *
 * The followings are the available columns in table 'lab_inventory':
 * @property integer $liid
 * @property string $test_name
 * @property string $test_unit
 * @property string $min_range1
 * @property string $min_range2
 * @property string $max_range1
 * @property string $max_range2
 * @property string $comments
 * @property double $price
 */
class LabInventory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LabInventory the static model class
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
		return 'lab_inventory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('test_name, test_unit, comments, price', 'required'),
			array('price', 'numerical'),
			array('test_name, comments', 'length', 'max'=>100),
			array('test_unit', 'length', 'max'=>40),
			array('min_range1, min_range2, max_range1, max_range2', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('liid, test_name, test_unit, min_range1, min_range2, max_range1, max_range2, comments, price', 'safe', 'on'=>'search'),
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
			'liid' => 'Liid',
			'test_name' => 'Test Name',
			'test_unit' => 'Test Unit',
			'min_range1' => 'Min Range1',
			'min_range2' => 'Min Range2',
			'max_range1' => 'Max Range1',
			'max_range2' => 'Max Range2',
			'comments' => 'Comments',
			'price' => 'Price',
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

		$criteria->compare('liid',$this->liid);
		$criteria->compare('test_name',$this->test_name,true);
		$criteria->compare('test_unit',$this->test_unit,true);
		$criteria->compare('min_range1',$this->min_range1,true);
		$criteria->compare('min_range2',$this->min_range2,true);
		$criteria->compare('max_range1',$this->max_range1,true);
		$criteria->compare('max_range2',$this->max_range2,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
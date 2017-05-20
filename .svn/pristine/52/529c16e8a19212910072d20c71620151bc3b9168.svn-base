<?php

/**
 * This is the model class for table "data_employee".
 *
 * The followings are the available columns in table 'data_employee':
 * @property integer $id
 * @property string $title
 * @property string $fName
 * @property string $mName
 * @property string $lName
 * @property string $gender
 * @property string $dob
 * @property string $sStreet
 * @property string $sWardNo
 * @property string $sCity
 * @property string $sDistrict
 * @property string $sZone
 * @property string $pStreet
 * @property string $pWardNo
 * @property string $pCity
 * @property string $pDistrict
 * @property string $pZone
 * @property string $Country
 * @property string $eContact
 * @property string $ePhone
 * @property string $homePhone
 * @property string $mobilePhone
 * @property string $email
 * @property integer $stat
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, fName, lName, gender, dob, pStreet, pWardNo, pCity, pDistrict, pZone, Country, ePhone, homePhone, mobilePhone, stat', 'required'),
            array('mName, sStreet, sWardNo, sCity, sDistrict, sZone, eContact, email, ','safe'),
			array('stat', 'numerical', 'integerOnly'=>true),
			array('title, fName, mName, lName, gender, dob, sStreet, sWardNo, sCity, sDistrict, sZone, pStreet, pWardNo, pCity, pDistrict, pZone, Country, eContact, ePhone, homePhone, mobilePhone, email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, fName, mName, lName, gender, dob, sStreet, sWardNo, sCity, sDistrict, sZone, pStreet, pWardNo, pCity, pDistrict, pZone, Country, eContact, ePhone, homePhone, mobilePhone, email, stat', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'fName' => 'F Name',
			'mName' => 'M Name',
			'lName' => 'L Name',
			'gender' => 'Gender',
			'dob' => 'Dob',
			'sStreet' => 'S Street',
			'sWardNo' => 'S Ward No',
			'sCity' => 'S City',
			'sDistrict' => 'S District',
			'sZone' => 'S Zone',
			'pStreet' => 'P Street',
			'pWardNo' => 'P Ward No',
			'pCity' => 'P City',
			'pDistrict' => 'P District',
			'pZone' => 'P Zone',
			'Country' => 'Country',
			'eContact' => 'E Contact',
			'ePhone' => 'E Phone',
			'homePhone' => 'Home Phone',
			'mobilePhone' => 'Mobile Phone',
			'email' => 'Email',
			'stat' => 'Stat',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('fName',$this->fName,true);
		$criteria->compare('mName',$this->mName,true);
		$criteria->compare('lName',$this->lName,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('sStreet',$this->sStreet,true);
		$criteria->compare('sWardNo',$this->sWardNo,true);
		$criteria->compare('sCity',$this->sCity,true);
		$criteria->compare('sDistrict',$this->sDistrict,true);
		$criteria->compare('sZone',$this->sZone,true);
		$criteria->compare('pStreet',$this->pStreet,true);
		$criteria->compare('pWardNo',$this->pWardNo,true);
		$criteria->compare('pCity',$this->pCity,true);
		$criteria->compare('pDistrict',$this->pDistrict,true);
		$criteria->compare('pZone',$this->pZone,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('eContact',$this->eContact,true);
		$criteria->compare('ePhone',$this->ePhone,true);
		$criteria->compare('homePhone',$this->homePhone,true);
		$criteria->compare('mobilePhone',$this->mobilePhone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('stat',$this->stat);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

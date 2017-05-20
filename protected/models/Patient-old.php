<?php

/**
 * This is the model class for table "data_patient".
 *
 * The followings are the available columns in table 'data_patient':
 * @property integer $id
 * @property string $title
 * @property string $fName
 * @property string $mName
 * @property string $lName
 * @property string $dob
 * @property string $gender
 * @property string $marital_status
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
 * @property string $country
 * @property string $motherName
 * @property string $guardianName
 * @property string $relation
 * @property string $eContact
 * @property string $ePhone
 * @property string $homePhone
 * @property string $workPhone
 * @property string $mobilePhone
 * @property string $email
 * @property string $stat
 * @property string $dID
 * @property string $clerk
 * @property string $date
 * @property string $time
 * @property string $cardID
 */
class Patient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'data_patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, fName, lName, dob, gender, marital_status, sStreet, sWardNo, sCity, sDistrict, sZone, pStreet, pWardNo, pCity, pDistrict, pZone, country, motherName, guardianName, relation, mobilePhone, stat, clerk, date, time', 'required'),
            array('cardID','required','message'=>'Assign new card before processing!'),
            array('mName, dID, cardID, eContact, ePhone, homePhone, workPhone, email', 'safe'),
			array('title, fName, mName, lName, dob, gender, marital_status, sStreet, sWardNo, sCity, sDistrict, sZone, pStreet, pWardNo, pCity, pDistrict, pZone, country, motherName, guardianName, relation, eContact, ePhone, homePhone, workPhone, mobilePhone, email, stat, dID, clerk, date, time, cardID', 'length', 'max'=>100),
            array('cardID','unique','message'=>'Card Already in use'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, fName, mName, lName, dob, gender, marital_status, sStreet, sWardNo, sCity, sDistrict, sZone, pStreet, pWardNo, pCity, pDistrict, pZone, country, motherName, guardianName, relation, eContact, ePhone, homePhone, workPhone, mobilePhone, email, stat, dID, clerk, date, time, cardID', 'safe', 'on'=>'search'),
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
			'dob' => 'Dob',
			'gender' => 'Gender',
			'marital_status' => 'Marital Status',
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
			'country' => 'Country',
			'motherName' => 'Mother Name',
			'guardianName' => 'Guardian Name',
			'relation' => 'Relation',
			'eContact' => 'E Contact',
			'ePhone' => 'E Phone',
			'homePhone' => 'Home Phone',
			'workPhone' => 'Work Phone',
			'mobilePhone' => 'Mobile Phone',
			'email' => 'Email',
			'stat' => 'Stat',
			'dID' => 'D',
			'clerk' => 'Clerk',
			'date' => 'Date',
			'time' => 'Time',
			'cardID' => 'Swipe Card',
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
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('marital_status',$this->marital_status,true);
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
		$criteria->compare('country',$this->country,true);
		$criteria->compare('motherName',$this->motherName,true);
		$criteria->compare('guardianName',$this->guardianName,true);
		$criteria->compare('relation',$this->relation,true);
		$criteria->compare('eContact',$this->eContact,true);
		$criteria->compare('ePhone',$this->ePhone,true);
		$criteria->compare('homePhone',$this->homePhone,true);
		$criteria->compare('workPhone',$this->workPhone,true);
		$criteria->compare('mobilePhone',$this->mobilePhone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('stat',$this->stat,true);
		$criteria->compare('dID',$this->dID,true);
		$criteria->compare('clerk',$this->clerk,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('cardID',$this->cardID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

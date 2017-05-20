<?php

/**
 * This is the model class for table "doctortime".
 *
 * The followings are the available columns in table 'doctortime':
 * @property integer $dtid
 * @property integer $uid
 * @property integer $sunM
 * @property integer $sunD
 * @property integer $sunE
 * @property integer $sunN
 * @property integer $monM
 * @property integer $monD
 * @property integer $monE
 * @property integer $monN
 * @property integer $tueM
 * @property integer $tueD
 * @property integer $tueE
 * @property integer $tueN
 * @property integer $wedM
 * @property integer $wedD
 * @property integer $wedE
 * @property integer $wedN
 * @property integer $thrM
 * @property integer $thrD
 * @property integer $thrE
 * @property integer $thrN
 * @property integer $friM
 * @property integer $friD
 * @property integer $friE
 * @property integer $friN
 * @property integer $satM
 * @property integer $satD
 * @property integer $satE
 * @property integer $satN
 */
class Doctortime extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doctortime the static model class
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
		return 'doctortime';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('uid, sunM, sunD, sunE, sunN, monM, monD, monE, monN, tueM, tueD, tueE, tueN, wedM, wedD, wedE, wedN, thrM, thrD, thrE, thrN, friM, friD, friE, friN, satM, satD, satE, satN', 'required'),
			array('uid','unique'),
            array('uid, sunM, sunD, sunE, sunN, monM, monD, monE, monN, tueM, tueD, tueE, tueN, wedM, wedD, wedE, wedN, thrM, thrD, thrE, thrN, friM, friD, friE, friN, satM, satD, satE, satN', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dtid, uid, sunM, sunD, sunE, sunN, monM, monD, monE, monN, tueM, tueD, tueE, tueN, wedM, wedD, wedE, wedN, thrM, thrD, thrE, thrN, friM, friD, friE, friN, satM, satD, satE, satN', 'safe', 'on'=>'search'),
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
			'dtid' => 'Doctor Id',
			'uid' => 'User Id',
			'sunM' => 'Sunday Morning',
			'sunD' => 'Sunday Day',
			'sunE' => 'Sunday Evening',
			'sunN' => 'Sunday Night',
			'monM' => 'Monday Morning',
			'monD' => 'Monday Day',
			'monE' => 'Monday Evening',
			'monN' => 'Monday Night',
			'tueM' => 'Tuesday Morning',
			'tueD' => 'Tuesday Day',
			'tueE' => 'Tuesday Evening',
			'tueN' => 'Tuesday Night',
			'wedM' => 'Wednesday Morning',
			'wedD' => 'Wednesday Day',
			'wedE' => 'Wednesday Evening',
			'wedN' => 'Wednesday Night',
			'thrM' => 'Thursday Morning',
			'thrD' => 'Thursday Day',
			'thrE' => 'Thursday Evening',
			'thrN' => 'Thursday Night',
			'friM' => 'Friday Morning',
			'friD' => 'Friday Day',
			'friE' => 'Friday Evening',
			'friN' => 'Friday Night',
			'satM' => 'Saturday Morning',
			'satD' => 'Saturday Day',
			'satE' => 'Saturday Evening',
			'satN' => 'Saturday Night',
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

		$criteria->compare('dtid',$this->dtid);
		$criteria->compare('uid',$this->uid);
		$criteria->compare('sunM',$this->sunM);
		$criteria->compare('sunD',$this->sunD);
		$criteria->compare('sunE',$this->sunE);
		$criteria->compare('sunN',$this->sunN);
		$criteria->compare('monM',$this->monM);
		$criteria->compare('monD',$this->monD);
		$criteria->compare('monE',$this->monE);
		$criteria->compare('monN',$this->monN);
		$criteria->compare('tueM',$this->tueM);
		$criteria->compare('tueD',$this->tueD);
		$criteria->compare('tueE',$this->tueE);
		$criteria->compare('tueN',$this->tueN);
		$criteria->compare('wedM',$this->wedM);
		$criteria->compare('wedD',$this->wedD);
		$criteria->compare('wedE',$this->wedE);
		$criteria->compare('wedN',$this->wedN);
		$criteria->compare('thrM',$this->thrM);
		$criteria->compare('thrD',$this->thrD);
		$criteria->compare('thrE',$this->thrE);
		$criteria->compare('thrN',$this->thrN);
		$criteria->compare('friM',$this->friM);
		$criteria->compare('friD',$this->friD);
		$criteria->compare('friE',$this->friE);
		$criteria->compare('friN',$this->friN);
		$criteria->compare('satM',$this->satM);
		$criteria->compare('satD',$this->satD);
		$criteria->compare('satE',$this->satE);
		$criteria->compare('satN',$this->satN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
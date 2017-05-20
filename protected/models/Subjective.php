<?php

/**
 * This is the model class for table "subjective".
 *
 * The followings are the available columns in table 'subjective':
 * @property integer $suid
 * @property integer $pid
 * @property integer $clerk
 * @property double $blood_pressure
 * @property double $height
 * @property double $weight
 * @property double $temp
 * @property double $bmi_calc
 * @property string $eye_left
 * @property string $eye_right
 * @property string $audio_right
 * @property string $audio_left
 * @property string $complain
 * @property string $datetime
 */
class Subjective extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subjective the static model class
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
		return 'subjective';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sid, pid, clerk', 'required'),
			array('sid, pid, clerk', 'numerical', 'integerOnly'=>true),
			array('height, weight, temp, bmi_calc', 'numerical'),
			array('eye_left, eye_right, audio_right, audio_left', 'length', 'max'=>50),
            array('blood_pressure','length','max'=>100),
			array('complain,blood_pressure', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('suid, pid, clerk, blood_pressure, height, weight, temp, bmi_calc, eye_left, eye_right, audio_right, audio_left, complain, datetime', 'safe', 'on'=>'search'),
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
			'suid' => 'ID',
			'pid' => 'Patient ID',
            'sid' => 'Schedule ID',
			'clerk' => 'Clerk',
			'blood_pressure' => 'Blood Pressure',
			'height' => 'Height',
			'weight' => 'Weight',
			'temp' => 'Temp',
			'bmi_calc' => 'Bmi Calc',
			'eye_left' => 'Eye Left',
			'eye_right' => 'Eye Right',
			'audio_right' => 'Audio Right',
			'audio_left' => 'Audio Left',
			'complain' => 'Complain',
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

		$criteria->compare('suid',$this->suid);
        $criteria->compare('sid',$this->sid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('clerk',$this->clerk);
		$criteria->compare('blood_pressure',$this->blood_pressure);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('temp',$this->temp);
		$criteria->compare('bmi_calc',$this->bmi_calc);
		$criteria->compare('eye_left',$this->eye_left,true);
		$criteria->compare('eye_right',$this->eye_right,true);
		$criteria->compare('audio_right',$this->audio_right,true);
		$criteria->compare('audio_left',$this->audio_left,true);
		$criteria->compare('complain',$this->complain,true);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
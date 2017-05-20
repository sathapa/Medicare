<?php

/**
 * This is the model class for table "lab_result".
 *
 * The followings are the available columns in table 'lab_result':
 * @property integer $lrid
 * @property integer $pid
 * @property integer $eid
 * @property integer $loid
 * @property string $result
 * @property string $datetime
 * @property string $suggestion
 */
class LabResult extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LabResult the static model class
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
		return 'lab_result';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sid, pid, eid, loid, result, datetime, suggestion', 'required'),
			array('sid, pid, eid, loid', 'numerical', 'integerOnly'=>true),
			array('result', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('lrid, pid, eid, loid, result, datetime, suggestion', 'safe', 'on'=>'search'),
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
			'lrid' => 'Lrid',
            'sid' => 'Schedule ID',
			'pid' => 'Pid',
			'eid' => 'Eid',
			'loid' => 'Loid',
			'result' => 'Result',
			'datetime' => 'Datetime',
			'suggestion' => 'Suggestion',
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

		$criteria->compare('lrid',$this->lrid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('loid',$this->loid);
		$criteria->compare('result',$this->result,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('suggestion',$this->suggestion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
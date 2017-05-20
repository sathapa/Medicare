<?php

/**
 * This is the model class for table "documents_patient".
 *
 * The followings are the available columns in table 'documents_patient':
 * @property integer $doc_id
 * @property integer $pid
 * @property integer $did
 * @property integer $sid
 * @property string $department
 * @property string $title
 * @property string $file
 * @property string $source
 * @property string $datetime
 * @property string $user
 *
 * The followings are the available model relations:
 * @property DataPatient $p
 */
class DocumentsPatient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documents_patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, title, file, source, user', 'required'),
            array('file','file'),
			array('pid, did, sid', 'numerical', 'integerOnly'=>true),
			array('department, title, file, source, user', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('doc_id, pid, did, sid, department, title, file, source, datetime, user', 'safe', 'on'=>'search'),
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
			'p' => array(self::BELONGS_TO, 'DataPatient', 'pid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'doc_id' => 'Doc',
			'pid' => 'Pid',
			'did' => 'Did',
			'sid' => 'Sid',
			'department' => 'Department',
			'title' => 'Title',
			'file' => 'File',
			'source' => 'Source',
			'datetime' => 'Datetime',
			'user' => 'User',
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

		$criteria->compare('doc_id',$this->doc_id);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('did',$this->did);
		$criteria->compare('sid',$this->sid);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('user',$this->user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DocumentsPatient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

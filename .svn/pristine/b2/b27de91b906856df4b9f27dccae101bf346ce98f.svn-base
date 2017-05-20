<?php

/**
 * This is the model class for table "lab_order".
 *
 * The followings are the available columns in table 'lab_order':
 * @property integer $loid
 * @property integer $lid
 * @property integer $pid
 * @property integer $eid
 * @property string $datetime
 * @property string $status
 * @property integer $billstatus
 */
class LabOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LabOrder the static model class
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
		return 'lab_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lid, sid, pid, eid, datetime, status, billstatus', 'required'),
			array('lid, sid, pid, eid, billstatus', 'numerical', 'integerOnly'=>true),
			array('datetime', 'length', 'max'=>15),
			//array('status', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('loid, lid, pid, eid, datetime, status, billstatus', 'safe', 'on'=>'search'),
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
            'patientD' => array(self::BELONGS_TO, 'Patient', 'pid'),
            'labI' => array(self::BELONGS_TO, 'LabInventory', 'liid')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'loid' => 'Loid',
			'lid' => 'Lid',
            'sid' => 'Schedule ID',
			'pid' => 'Pid',
			'eid' => 'Eid',
			'datetime' => 'Datetime',
			'status' => 'Status',
			'billstatus' => 'Billstatus',
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
//        $criteria->distinct = true;
        $criteria->select = array('sid','pid','datetime','lid');
        $criteria->distinct = true;
		$criteria->compare('loid',$this->loid);
		$criteria->compare('lid',$this->lid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('status',1);
		$criteria->compare('billstatus',$this->billstatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort' => array(
                'defaultOrder'=>'datetime ASC'
            )
            ));
	}
    public function mlaborder()
    {
        $qry="select * from lab_inventory";
        return Yii::app()->db->createCommand($qry)->queryAll();
    }
    public function slaborder($qry)
    {

        return Yii::app()->db->createCommand($qry)->execute();
    }
}
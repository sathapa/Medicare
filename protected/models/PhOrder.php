<?php

/**
 * This is the model class for table "ph_order".
 *
 * The followings are the available columns in table 'ph_order':
 * @property integer $phoid
 * @property integer $pid
 * @property integer $did
 * @property string $date
 * @property integer $drug_id
 * @property string $sig
 * @property integer $days
 * @property integer $quantity
 * @property integer $refill
 * @property integer $status
 * @property integer $billstatus
 */
class PhOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PhOrder the static model class
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
		return 'ph_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sig', 'required'),
            array('pid, refill, status, billstatus,sid','safe'),
			array('pid, did, drug_id, days, quantity, refill, status, billstatus', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('phoid, pid, did, date, drug_id, sig, days, quantity, refill, status, billstatus', 'safe', 'on'=>'search'),
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
            'orderPH' => array(self::BELONGS_TO, 'PhDrug', 'drug_id'),
            'patientD' => array(self::BELONGS_TO, 'Patient', 'pid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'phoid' => 'Phoid',
            'sid'=>'Sid',
			'pid' => 'Pid',
			'did' => 'Did',
			'date' => 'Date',
			'drug_id' => 'Drug',
			'sig' => 'SIG',
			'days' => 'Days',
			'quantity' => 'Quantity',
			'refill' => 'Refill',
			'status' => 'Status',
			'billstatus' => 'Bill Status',
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
        //$criteria->distinct=true;
        //$criteria->addColumnCondition('pid','distinct');

		$criteria->compare('phoid',$this->phoid);
        $criteria->compare('sid',$this->sid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('did',$this->did);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('drug_id',$this->drug_id);
		$criteria->compare('sig',$this->sig,true);
		$criteria->compare('days',$this->days);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('refill',$this->refill);
		$criteria->compare('status',1);
		$criteria->compare('billstatus',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'sid ASC',
            ),
		));
	}

    public function getCssClass($data)
    {
        $drgid = $data->drug_id;

        $datas = PhDrug::model()->findByPk($drgid);
      
		$stkid = $datas->stock_id;

		$datass = PhStock::model()->findByPk($stkid);
	          
		
		$cssClass="";
	//	var_dump($cssClass);exit();          

        if($data->quantity > $datass->instore_quantity)
        {
            $cssClass='alert alert-error';
        }
        /*else if($data->quantity == "1")
        {
            $cssClass='alert alert-warning';
        }
        else if($data->quantity == "0")
        {
            $cssClass='alert alert-error';
        }*/

        return $cssClass;
    }
}
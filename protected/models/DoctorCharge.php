<?php


class DoctorCharge extends CActiveRecord
{
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        public function tableName()
	{
		return 'doctor_charge';
	}

	public function rules()
	{
		return array(
			array('eid, charge', 'required'),
			array('eid', 'numerical', 'integerOnly'=>true),
			array('charge', 'numerical'),
                        array('eid','unique','on'=>'create','message'=>'<strong>Charge already assigned</strong><br>Please Update Doctor Charge Instead</br>'),
                        array('dcid, eid, charge', 'safe', 'on'=>'search'),
                             );
	}

	public function relations()
	{
		return array(
                'user'=>array(self::BELONGS_TO, 'Employee', 'eid')
		);
	}

	public function attributeLabels()
	{
		return array(
			'dcid' => 'Dcid',
			'eid' => 'Eid',
			'charge' => 'Charge',
		);
	}

        public function search()
	{
		$criteria=new CDbCriteria;
		$criteria->compare('dcid',$this->dcid);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('charge',$this->charge);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
          public function doctorReport($a,$fromDate,$toDate){
              $a.='_calendar';
                         
            $qry = "SELECT count(subject) as total FROM $a where StartTime between '$fromDate' and '$toDate'" ;
            return Yii::app()->db->createCommand($qry)->queryAll();
        }
        public function selectEmployeeId(){
            
            $qry = "Select * from data_user where profession='doctor'";
            $connection = Yii::app()->db;
            $command=$connection->createCommand($qry);
            $dropdown = $command->queryAll();
            return Yii::app()->db->createCommand($qry)->queryAll();          

        }
               
      }
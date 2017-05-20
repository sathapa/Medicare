<?php

/**
 * This is the model class for table "discharge".
 *
 * The followings are the available columns in table 'discharge':
 * @property integer $dis_id
 * @property integer $pid
 * @property integer $lab_id
 * @property integer $drug_id
 * @property integer $stat
 */
class Discharge extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'discharge';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('pid, lab_id, suid, stat', 'required'),
            array('pid, lab_id, suid, stat', 'numerical', 'integerOnly'=>true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('dis_id, pid, lab_id, suid, stat, dir', 'safe', 'on'=>'search'),
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
            'pdata'=>array(
                self::BELONGS_TO,'Patient','pid'
            ),
            'ldata' => array(
                self::BELONGS_TO,'LabResult','lrid'
            ),
            'subj' => array(
                self::BELONGS_TO,'Subjective','suid'
            ),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'dis_id' => 'Dis',
            'pid' => 'Pid',
            'lab_id' => 'Lab',
            'suid' => 'Subjective',
            'stat' => 'Stat',
            'dir'=>'Directions',
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

        $criteria->compare('dis_id',$this->dis_id);
        $criteria->compare('pid',$this->pid);
        $criteria->compare('lab_id',$this->lab_id);
        $criteria->compare('suid',$this->suid);
        $criteria->compare('stat',$this->stat);
        $criteria->compare('dir', $this->dir);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Discharge the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}

<?php

/**
 * This is the model class for table "didrates".
 *
 * The followings are the available columns in table 'didrates':
 * @property string $id
 * @property string $start_time
 * @property string $end_time
 * @property double $rate
 * @property double $connection_fee
 * @property integer $increment_s
 * @property integer $min_time
 * @property integer $did_id
 * @property string $rate_type
 * @property string $daytype
 */
class Didrates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Didrates the static model class
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
		return 'didrates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('increment_s, min_time, did_id', 'numerical', 'integerOnly'=>true),
			array('rate, connection_fee', 'numerical'),
			array('rate_type', 'length', 'max'=>20),
			array('daytype', 'length', 'max'=>2),
			array('start_time, end_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, start_time, end_time, rate, connection_fee, increment_s, min_time, did_id, rate_type, daytype', 'safe', 'on'=>'search'),
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
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'rate' => 'Rate',
			'connection_fee' => 'Connection Fee',
			'increment_s' => 'Increment S',
			'min_time' => 'Min Time',
			'did_id' => 'Did',
			'rate_type' => 'Rate Type',
			'daytype' => 'Daytype',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('connection_fee',$this->connection_fee);
		$criteria->compare('increment_s',$this->increment_s);
		$criteria->compare('min_time',$this->min_time);
		$criteria->compare('did_id',$this->did_id);
		$criteria->compare('rate_type',$this->rate_type,true);
		$criteria->compare('daytype',$this->daytype,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
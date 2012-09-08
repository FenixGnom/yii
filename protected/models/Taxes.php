<?php

/**
 * This is the model class for table "taxes".
 *
 * The followings are the available columns in table 'taxes':
 * @property integer $id
 * @property integer $tax1_enabled
 * @property integer $tax2_enabled
 * @property integer $tax3_enabled
 * @property integer $tax4_enabled
 * @property string $tax1_name
 * @property string $tax2_name
 * @property string $tax3_name
 * @property string $tax4_name
 * @property string $total_tax_name
 * @property double $tax1_value
 * @property double $tax2_value
 * @property double $tax3_value
 * @property double $tax4_value
 * @property integer $compound_tax
 *
 * The followings are the available model relations:
 * @property Users[] $users
 */
class Taxes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Taxes the static model class
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
		return 'taxes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax1_enabled, tax2_enabled, tax3_enabled, tax4_enabled, compound_tax', 'numerical', 'integerOnly'=>true),
			array('tax1_value, tax2_value, tax3_value, tax4_value', 'numerical'),
			array('tax1_name, tax2_name, tax3_name, tax4_name, total_tax_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tax1_enabled, tax2_enabled, tax3_enabled, tax4_enabled, tax1_name, tax2_name, tax3_name, tax4_name, total_tax_name, tax1_value, tax2_value, tax3_value, tax4_value, compound_tax', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'Users', 'tax_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tax1_enabled' => 'Tax1 Enabled',
			'tax2_enabled' => 'Tax2 Enabled',
			'tax3_enabled' => 'Tax3 Enabled',
			'tax4_enabled' => 'Tax4 Enabled',
			'tax1_name' => 'Tax1 Name',
			'tax2_name' => 'Tax2 Name',
			'tax3_name' => 'Tax3 Name',
			'tax4_name' => 'Tax4 Name',
			'total_tax_name' => 'Total Tax Name',
			'tax1_value' => 'Tax1 Value',
			'tax2_value' => 'Tax2 Value',
			'tax3_value' => 'Tax3 Value',
			'tax4_value' => 'Tax4 Value',
			'compound_tax' => 'Compound Tax',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('tax1_enabled',$this->tax1_enabled);
		$criteria->compare('tax2_enabled',$this->tax2_enabled);
		$criteria->compare('tax3_enabled',$this->tax3_enabled);
		$criteria->compare('tax4_enabled',$this->tax4_enabled);
		$criteria->compare('tax1_name',$this->tax1_name,true);
		$criteria->compare('tax2_name',$this->tax2_name,true);
		$criteria->compare('tax3_name',$this->tax3_name,true);
		$criteria->compare('tax4_name',$this->tax4_name,true);
		$criteria->compare('total_tax_name',$this->total_tax_name,true);
		$criteria->compare('tax1_value',$this->tax1_value);
		$criteria->compare('tax2_value',$this->tax2_value);
		$criteria->compare('tax3_value',$this->tax3_value);
		$criteria->compare('tax4_value',$this->tax4_value);
		$criteria->compare('compound_tax',$this->compound_tax);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
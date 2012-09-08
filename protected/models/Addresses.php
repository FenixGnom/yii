<?php

/**
 * This is the model class for table "addresses".
 *
 * The followings are the available columns in table 'addresses':
 * @property integer $id
 * @property integer $direction_id
 * @property string $state
 * @property string $county
 * @property string $city
 * @property string $postcode
 * @property string $address
 * @property string $phone
 * @property string $mob_phone
 * @property string $fax
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Directions $direction
 * @property Users[] $users
 */
class Addresses extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Addresses the static model class
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
		return 'addresses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('direction_id', 'numerical', 'integerOnly'=>true),
			array('state, county, city, phone, mob_phone, fax', 'length', 'max'=>30),
			array('postcode', 'length', 'max'=>20),
			array('address', 'length', 'max'=>100),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, direction_id, state, county, city, postcode, address, phone, mob_phone, fax, email', 'safe', 'on'=>'search'),
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
			'direction' => array(self::BELONGS_TO, 'Directions', 'direction_id'),
			'users' => array(self::HAS_MANY, 'Users', 'address_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'direction_id' => 'Direction',
			'state' => 'State',
			'county' => 'County',
			'city' => 'City',
			'postcode' => 'Postcode',
			'address' => 'Address',
			'phone' => 'Phone',
			'mob_phone' => 'Mob Phone',
			'fax' => 'Fax',
			'email' => 'Email',
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
		$criteria->compare('direction_id',$this->direction_id);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('county',$this->county,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mob_phone',$this->mob_phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
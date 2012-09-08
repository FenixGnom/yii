<?php

/**
 * This is the model class for table "dids".
 *
 * The followings are the available columns in table 'dids':
 * @property integer $id
 * @property string $did
 * @property string $status
 * @property integer $user_id
 * @property integer $device_id
 * @property integer $subscription_id
 * @property integer $reseller_id
 * @property string $closed_till
 * @property integer $dialplan_id
 * @property string $language
 * @property integer $provider_id
 * @property string $comment
 * @property integer $call_limit
 * @property integer $sound_file_id
 * @property integer $grace_time
 * @property integer $t_digit
 * @property integer $t_response
 * @property string $reseller_comment
 * @property string $cid_name_prefix
 * @property string $tonezone
 * @property integer $call_count
 * @property string $cc_tariff_id
 *
 * The followings are the available model relations:
 * @property Devices[] $devices
 */
class Dids extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dids the static model class
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
		return 'dids';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('did', 'required'),
			array('user_id, device_id, subscription_id, reseller_id, dialplan_id, provider_id, call_limit, sound_file_id, grace_time, t_digit, t_response, call_count', 'numerical', 'integerOnly'=>true),
			array('did', 'length', 'max'=>50),
			array('status, comment, reseller_comment', 'length', 'max'=>255),
			array('language, cc_tariff_id', 'length', 'max'=>10),
			array('cid_name_prefix', 'length', 'max'=>30),
			array('tonezone', 'length', 'max'=>5),
			array('closed_till', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, did, status, user_id, device_id, subscription_id, reseller_id, closed_till, dialplan_id, language, provider_id, comment, call_limit, sound_file_id, grace_time, t_digit, t_response, reseller_comment, cid_name_prefix, tonezone, call_count, cc_tariff_id', 'safe', 'on'=>'search'),
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
			'devices' => array(self::HAS_MANY, 'Devices', 'primary_did_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'did' => 'Did',
			'status' => 'Status',
			'user_id' => 'User',
			'device_id' => 'Device',
			'subscription_id' => 'Subscription',
			'reseller_id' => 'Reseller',
			'closed_till' => 'Closed Till',
			'dialplan_id' => 'Dialplan',
			'language' => 'Language',
			'provider_id' => 'Provider',
			'comment' => 'Comment',
			'call_limit' => 'Call Limit',
			'sound_file_id' => 'Sound File',
			'grace_time' => 'Grace Time',
			't_digit' => 'T Digit',
			't_response' => 'T Response',
			'reseller_comment' => 'Reseller Comment',
			'cid_name_prefix' => 'Cid Name Prefix',
			'tonezone' => 'Tonezone',
			'call_count' => 'Call Count',
			'cc_tariff_id' => 'Cc Tariff',
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
		$criteria->compare('did',$this->did,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('device_id',$this->device_id);
		$criteria->compare('subscription_id',$this->subscription_id);
		$criteria->compare('reseller_id',$this->reseller_id);
		$criteria->compare('closed_till',$this->closed_till,true);
		$criteria->compare('dialplan_id',$this->dialplan_id);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('provider_id',$this->provider_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('call_limit',$this->call_limit);
		$criteria->compare('sound_file_id',$this->sound_file_id);
		$criteria->compare('grace_time',$this->grace_time);
		$criteria->compare('t_digit',$this->t_digit);
		$criteria->compare('t_response',$this->t_response);
		$criteria->compare('reseller_comment',$this->reseller_comment,true);
		$criteria->compare('cid_name_prefix',$this->cid_name_prefix,true);
		$criteria->compare('tonezone',$this->tonezone,true);
		$criteria->compare('call_count',$this->call_count);
		$criteria->compare('cc_tariff_id',$this->cc_tariff_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
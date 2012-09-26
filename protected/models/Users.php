<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $usertype
 * @property integer $logged
 * @property string $first_name
 * @property string $last_name
 * @property double $calltime_normative
 * @property integer $show_in_realtime_stats
 * @property double $balance
 * @property double $frozen_balance
 * @property string $lcr_id
 * @property integer $postpaid
 * @property integer $blocked
 * @property string $tariff_id
 * @property double $month_plan_perc
 * @property string $month_plan_updated
 * @property integer $sales_this_month
 * @property integer $sales_this_month_planned
 * @property integer $show_billing_info
 * @property integer $primary_device_id
 * @property double $credit
 * @property string $clientid
 * @property string $agreement_number
 * @property string $agreement_date
 * @property string $language
 * @property integer $taxation_country
 * @property string $vat_number
 * @property double $vat_percent
 * @property integer $address_id
 * @property string $accounting_number
 * @property integer $owner_id
 * @property integer $hidden
 * @property integer $allow_loss_calls
 * @property string $vouchers_disabled_till
 * @property string $uniquehash
 * @property integer $c2c_service_active
 * @property integer $temporary_id
 * @property integer $send_invoice_types
 * @property integer $call_limit
 * @property double $c2c_call_price
 * @property integer $sms_tariff_id
 * @property integer $sms_lcr_id
 * @property integer $sms_service_active
 * @property integer $cyberplat_active
 * @property integer $call_center_agent
 * @property integer $generate_invoice
 * @property double $tax_1
 * @property double $tax_2
 * @property double $tax_3
 * @property double $tax_4
 * @property string $block_at
 * @property integer $block_at_conditional
 * @property integer $block_conditional_use
 * @property integer $recording_enabled
 * @property integer $recording_forced_enabled
 * @property string $recordings_email
 * @property integer $recording_hdd_quota
 * @property integer $warning_email_active
 * @property double $warning_email_balance
 * @property integer $warning_email_sent
 * @property integer $tax_id
 * @property integer $invoice_zero_calls
 * @property integer $acc_group_id
 * @property integer $hide_destination_end
 * @property integer $warning_email_hour
 * @property integer $warning_balance_call
 * @property integer $warning_balance_sound_file_id
 * @property integer $own_providers
 * @property integer $ignore_global_monitorings
 * @property integer $currency_id
 * @property integer $quickforwards_rule_id
 * @property integer $spy_device_id
 * @property double $time_zone
 * @property integer $minimal_charge
 * @property string $minimal_charge_start_at
 * @property integer $webphone_allow_use
 * @property integer $webphone_device_id
 *
 * The followings are the available model relations:
 * @property Devicegroups[] $devicegroups
 * @property Devices[] $devices
 * @property Emails[] $emails
 * @property Lcrs[] $lcrs
 * @property Phonebooks[] $phonebooks
 * @property Usergroups[] $usergroups
 * @property Taxes $tax
 * @property AccGroups $accGroup
 * @property Addresses $address
 * @property Devices $primaryDevice
 * @property Lcrs $lcr
 * @property Roles $usertype0
 * @property SmsTariffs $smsTariff
 * @property Tariffs $tariff
 * @property Users $owner
 * @property Users[] $users
 * @property Vouchers[] $vouchers
 * @property UsersHash[] $usersHashes
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('logged, show_in_realtime_stats, postpaid, blocked, sales_this_month, sales_this_month_planned, show_billing_info, primary_device_id, taxation_country, address_id, owner_id, hidden, allow_loss_calls, c2c_service_active, temporary_id, send_invoice_types, call_limit, sms_tariff_id, sms_lcr_id, sms_service_active, cyberplat_active, call_center_agent, generate_invoice, block_at_conditional, block_conditional_use, recording_enabled, recording_forced_enabled, recording_hdd_quota, warning_email_active, warning_email_sent, tax_id, invoice_zero_calls, acc_group_id, hide_destination_end, warning_email_hour, warning_balance_call, warning_balance_sound_file_id, own_providers, ignore_global_monitorings, currency_id, quickforwards_rule_id, spy_device_id, minimal_charge, webphone_allow_use, webphone_device_id', 'numerical', 'integerOnly'=>true),
			array('calltime_normative, balance, frozen_balance, month_plan_perc, credit, vat_percent, c2c_call_price, tax_1, tax_2, tax_3, tax_4, warning_email_balance, time_zone', 'numerical'),
			array('username, clientid, vat_number, accounting_number', 'length', 'max'=>30),
			array('password', 'length', 'max'=>100),
			array('usertype, lcr_id, tariff_id, agreement_number', 'length', 'max'=>20),
			array('first_name, last_name, recordings_email', 'length', 'max'=>50),
			array('language, uniquehash', 'length', 'max'=>10),
			array('month_plan_updated, agreement_date, vouchers_disabled_till, block_at, minimal_charge_start_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password', 'safe', 'on'=>'search'),
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
			'devicegroups' => array(self::HAS_MANY, 'Devicegroups', 'user_id'),
			'devices' => array(self::HAS_MANY, 'Devices', 'user_id'),
			'emails' => array(self::HAS_MANY, 'Emails', 'owner_id'),
			'lcrs' => array(self::HAS_MANY, 'Lcrs', 'user_id'),
			'phonebooks' => array(self::HAS_MANY, 'Phonebooks', 'user_id'),
			'usergroups' => array(self::HAS_MANY, 'Usergroups', 'user_id'),
			'tax' => array(self::BELONGS_TO, 'Taxes', 'tax_id'),
			'accGroup' => array(self::BELONGS_TO, 'AccGroups', 'acc_group_id'),
			'address' => array(self::BELONGS_TO, 'Addresses', 'address_id'),
			'primaryDevice' => array(self::BELONGS_TO, 'Devices', 'primary_device_id'),
			'lcr' => array(self::BELONGS_TO, 'Lcrs', 'lcr_id'),
			'usertype0' => array(self::BELONGS_TO, 'Roles', 'usertype'),
			'smsTariff' => array(self::BELONGS_TO, 'SmsTariffs', 'sms_tariff_id'),
			'tariff' => array(self::BELONGS_TO, 'Tariffs', 'tariff_id'),
			'owner' => array(self::BELONGS_TO, 'Users', 'owner_id'),
			'users' => array(self::HAS_MANY, 'Users', 'owner_id'),
			'vouchers' => array(self::HAS_MANY, 'Vouchers', 'user_id'),
            'usersHashes' => array(self::HAS_MANY, 'UsersHash', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
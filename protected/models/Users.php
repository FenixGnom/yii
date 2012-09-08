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
			array('id, username, password, usertype, logged, first_name, last_name, calltime_normative, show_in_realtime_stats, balance, frozen_balance, lcr_id, postpaid, blocked, tariff_id, month_plan_perc, month_plan_updated, sales_this_month, sales_this_month_planned, show_billing_info, primary_device_id, credit, clientid, agreement_number, agreement_date, language, taxation_country, vat_number, vat_percent, address_id, accounting_number, owner_id, hidden, allow_loss_calls, vouchers_disabled_till, uniquehash, c2c_service_active, temporary_id, send_invoice_types, call_limit, c2c_call_price, sms_tariff_id, sms_lcr_id, sms_service_active, cyberplat_active, call_center_agent, generate_invoice, tax_1, tax_2, tax_3, tax_4, block_at, block_at_conditional, block_conditional_use, recording_enabled, recording_forced_enabled, recordings_email, recording_hdd_quota, warning_email_active, warning_email_balance, warning_email_sent, tax_id, invoice_zero_calls, acc_group_id, hide_destination_end, warning_email_hour, warning_balance_call, warning_balance_sound_file_id, own_providers, ignore_global_monitorings, currency_id, quickforwards_rule_id, spy_device_id, time_zone, minimal_charge, minimal_charge_start_at, webphone_allow_use, webphone_device_id', 'safe', 'on'=>'search'),
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
			'usertype' => 'Usertype',
			'logged' => 'Logged',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'calltime_normative' => 'Calltime Normative',
			'show_in_realtime_stats' => 'Show In Realtime Stats',
			'balance' => 'Balance',
			'frozen_balance' => 'Frozen Balance',
			'lcr_id' => 'Lcr',
			'postpaid' => 'Postpaid',
			'blocked' => 'Blocked',
			'tariff_id' => 'Tariff',
			'month_plan_perc' => 'Month Plan Perc',
			'month_plan_updated' => 'Month Plan Updated',
			'sales_this_month' => 'Sales This Month',
			'sales_this_month_planned' => 'Sales This Month Planned',
			'show_billing_info' => 'Show Billing Info',
			'primary_device_id' => 'Primary Device',
			'credit' => 'Credit',
			'clientid' => 'Clientid',
			'agreement_number' => 'Agreement Number',
			'agreement_date' => 'Agreement Date',
			'language' => 'Language',
			'taxation_country' => 'Taxation Country',
			'vat_number' => 'Vat Number',
			'vat_percent' => 'Vat Percent',
			'address_id' => 'Address',
			'accounting_number' => 'Accounting Number',
			'owner_id' => 'Owner',
			'hidden' => 'Hidden',
			'allow_loss_calls' => 'Allow Loss Calls',
			'vouchers_disabled_till' => 'Vouchers Disabled Till',
			'uniquehash' => 'Uniquehash',
			'c2c_service_active' => 'C2c Service Active',
			'temporary_id' => 'Temporary',
			'send_invoice_types' => 'Send Invoice Types',
			'call_limit' => 'Call Limit',
			'c2c_call_price' => 'C2c Call Price',
			'sms_tariff_id' => 'Sms Tariff',
			'sms_lcr_id' => 'Sms Lcr',
			'sms_service_active' => 'Sms Service Active',
			'cyberplat_active' => 'Cyberplat Active',
			'call_center_agent' => 'Call Center Agent',
			'generate_invoice' => 'Generate Invoice',
			'tax_1' => 'Tax 1',
			'tax_2' => 'Tax 2',
			'tax_3' => 'Tax 3',
			'tax_4' => 'Tax 4',
			'block_at' => 'Block At',
			'block_at_conditional' => 'Block At Conditional',
			'block_conditional_use' => 'Block Conditional Use',
			'recording_enabled' => 'Recording Enabled',
			'recording_forced_enabled' => 'Recording Forced Enabled',
			'recordings_email' => 'Recordings Email',
			'recording_hdd_quota' => 'Recording Hdd Quota',
			'warning_email_active' => 'Warning Email Active',
			'warning_email_balance' => 'Warning Email Balance',
			'warning_email_sent' => 'Warning Email Sent',
			'tax_id' => 'Tax',
			'invoice_zero_calls' => 'Invoice Zero Calls',
			'acc_group_id' => 'Acc Group',
			'hide_destination_end' => 'Hide Destination End',
			'warning_email_hour' => 'Warning Email Hour',
			'warning_balance_call' => 'Warning Balance Call',
			'warning_balance_sound_file_id' => 'Warning Balance Sound File',
			'own_providers' => 'Own Providers',
			'ignore_global_monitorings' => 'Ignore Global Monitorings',
			'currency_id' => 'Currency',
			'quickforwards_rule_id' => 'Quickforwards Rule',
			'spy_device_id' => 'Spy Device',
			'time_zone' => 'Time Zone',
			'minimal_charge' => 'Minimal Charge',
			'minimal_charge_start_at' => 'Minimal Charge Start At',
			'webphone_allow_use' => 'Webphone Allow Use',
			'webphone_device_id' => 'Webphone Device',
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
		$criteria->compare('usertype',$this->usertype,true);
		$criteria->compare('logged',$this->logged);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('calltime_normative',$this->calltime_normative);
		$criteria->compare('show_in_realtime_stats',$this->show_in_realtime_stats);
		$criteria->compare('balance',$this->balance);
		$criteria->compare('frozen_balance',$this->frozen_balance);
		$criteria->compare('lcr_id',$this->lcr_id,true);
		$criteria->compare('postpaid',$this->postpaid);
		$criteria->compare('blocked',$this->blocked);
		$criteria->compare('tariff_id',$this->tariff_id,true);
		$criteria->compare('month_plan_perc',$this->month_plan_perc);
		$criteria->compare('month_plan_updated',$this->month_plan_updated,true);
		$criteria->compare('sales_this_month',$this->sales_this_month);
		$criteria->compare('sales_this_month_planned',$this->sales_this_month_planned);
		$criteria->compare('show_billing_info',$this->show_billing_info);
		$criteria->compare('primary_device_id',$this->primary_device_id);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('clientid',$this->clientid,true);
		$criteria->compare('agreement_number',$this->agreement_number,true);
		$criteria->compare('agreement_date',$this->agreement_date,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('taxation_country',$this->taxation_country);
		$criteria->compare('vat_number',$this->vat_number,true);
		$criteria->compare('vat_percent',$this->vat_percent);
		$criteria->compare('address_id',$this->address_id);
		$criteria->compare('accounting_number',$this->accounting_number,true);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('hidden',$this->hidden);
		$criteria->compare('allow_loss_calls',$this->allow_loss_calls);
		$criteria->compare('vouchers_disabled_till',$this->vouchers_disabled_till,true);
		$criteria->compare('uniquehash',$this->uniquehash,true);
		$criteria->compare('c2c_service_active',$this->c2c_service_active);
		$criteria->compare('temporary_id',$this->temporary_id);
		$criteria->compare('send_invoice_types',$this->send_invoice_types);
		$criteria->compare('call_limit',$this->call_limit);
		$criteria->compare('c2c_call_price',$this->c2c_call_price);
		$criteria->compare('sms_tariff_id',$this->sms_tariff_id);
		$criteria->compare('sms_lcr_id',$this->sms_lcr_id);
		$criteria->compare('sms_service_active',$this->sms_service_active);
		$criteria->compare('cyberplat_active',$this->cyberplat_active);
		$criteria->compare('call_center_agent',$this->call_center_agent);
		$criteria->compare('generate_invoice',$this->generate_invoice);
		$criteria->compare('tax_1',$this->tax_1);
		$criteria->compare('tax_2',$this->tax_2);
		$criteria->compare('tax_3',$this->tax_3);
		$criteria->compare('tax_4',$this->tax_4);
		$criteria->compare('block_at',$this->block_at,true);
		$criteria->compare('block_at_conditional',$this->block_at_conditional);
		$criteria->compare('block_conditional_use',$this->block_conditional_use);
		$criteria->compare('recording_enabled',$this->recording_enabled);
		$criteria->compare('recording_forced_enabled',$this->recording_forced_enabled);
		$criteria->compare('recordings_email',$this->recordings_email,true);
		$criteria->compare('recording_hdd_quota',$this->recording_hdd_quota);
		$criteria->compare('warning_email_active',$this->warning_email_active);
		$criteria->compare('warning_email_balance',$this->warning_email_balance);
		$criteria->compare('warning_email_sent',$this->warning_email_sent);
		$criteria->compare('tax_id',$this->tax_id);
		$criteria->compare('invoice_zero_calls',$this->invoice_zero_calls);
		$criteria->compare('acc_group_id',$this->acc_group_id);
		$criteria->compare('hide_destination_end',$this->hide_destination_end);
		$criteria->compare('warning_email_hour',$this->warning_email_hour);
		$criteria->compare('warning_balance_call',$this->warning_balance_call);
		$criteria->compare('warning_balance_sound_file_id',$this->warning_balance_sound_file_id);
		$criteria->compare('own_providers',$this->own_providers);
		$criteria->compare('ignore_global_monitorings',$this->ignore_global_monitorings);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('quickforwards_rule_id',$this->quickforwards_rule_id);
		$criteria->compare('spy_device_id',$this->spy_device_id);
		$criteria->compare('time_zone',$this->time_zone);
		$criteria->compare('minimal_charge',$this->minimal_charge);
		$criteria->compare('minimal_charge_start_at',$this->minimal_charge_start_at,true);
		$criteria->compare('webphone_allow_use',$this->webphone_allow_use);
		$criteria->compare('webphone_device_id',$this->webphone_device_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
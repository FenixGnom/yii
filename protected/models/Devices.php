<?php

/**
 * This is the model class for table "devices".
 *
 * The followings are the available columns in table 'devices':
 * @property integer $id
 * @property string $name
 * @property string $host
 * @property string $secret
 * @property string $context
 * @property string $ipaddr
 * @property integer $port
 * @property integer $regseconds
 * @property integer $accountcode
 * @property string $callerid
 * @property string $extension
 * @property integer $voicemail_active
 * @property string $username
 * @property string $device_type
 * @property integer $user_id
 * @property integer $primary_did_id
 * @property integer $works_not_logged
 * @property integer $forward_to
 * @property integer $record
 * @property string $transfer
 * @property string $disallow
 * @property string $allow
 * @property string $deny
 * @property string $permit
 * @property string $nat
 * @property string $qualify
 * @property string $fullcontact
 * @property string $canreinvite
 * @property integer $devicegroup_id
 * @property string $dtmfmode
 * @property integer $callgroup
 * @property integer $pickupgroup
 * @property string $fromuser
 * @property string $fromdomain
 * @property string $trustrpid
 * @property string $sendrpid
 * @property string $insecure
 * @property string $progressinband
 * @property string $videosupport
 * @property integer $location_id
 * @property string $description
 * @property integer $istrunk
 * @property integer $cid_from_dids
 * @property string $pin
 * @property integer $tell_balance
 * @property integer $tell_time
 * @property integer $tell_rtime_when_left
 * @property integer $repeat_rtime_every
 * @property string $t38pt_udptl
 * @property string $regserver
 * @property integer $ani
 * @property string $promiscredir
 * @property integer $timeout
 * @property integer $process_sipchaninfo
 * @property integer $temporary_id
 * @property integer $allow_duplicate_calls
 * @property integer $call_limit
 * @property integer $lastms
 * @property string $faststart
 * @property string $h245tunneling
 * @property double $latency
 * @property integer $grace_time
 * @property integer $recording_to_email
 * @property integer $recording_keep
 * @property string $recording_email
 * @property integer $record_forced
 * @property integer $fake_ring
 * @property integer $save_call_log
 * @property string $mailbox
 * @property integer $server_id
 * @property integer $enable_mwi
 * @property string $authuser
 * @property string $requirecalltoken
 * @property string $language
 * @property integer $use_ani_for_cli
 * @property string $calleridpres
 * @property integer $change_failed_code_to
 * @property string $reg_status
 * @property integer $max_timeout
 * @property integer $forward_did_id
 * @property integer $anti_resale_auto_answer
 * @property integer $qf_tell_balance
 * @property integer $qf_tell_time
 * @property integer $time_limit_per_day
 * @property integer $control_callerid_by_cids
 * @property integer $callerid_advanced_control
 * @property string $transport
 * @property string $subscribemwi
 * @property string $encryption
 * @property integer $block_callerid
 * @property string $defaultuser
 * @property string $useragent
 * @property string $type
 * @property string $md5secret
 * @property string $remotesecret
 * @property string $directmedia
 * @property string $useclientcode
 * @property string $setvar
 * @property string $amaflags
 * @property string $callcounter
 * @property integer $busylevel
 * @property string $allowoverlap
 * @property string $allowsubscribe
 * @property integer $maxcallbitrate
 * @property string $rfc2833compensate
 * @property string $session_timers
 * @property integer $session_expires
 * @property integer $session_minse
 * @property string $session_refresher
 * @property string $t38pt_usertpsource
 * @property string $regexten
 * @property string $defaultip
 * @property integer $rtptimeout
 * @property integer $rtpholdtimeout
 * @property string $outboundproxy
 * @property string $callbackextension
 * @property integer $timert1
 * @property integer $timerb
 * @property integer $qualifyfreq
 * @property string $constantssrc
 * @property string $contactpermit
 * @property string $contactdeny
 * @property string $usereqphone
 * @property string $textsupport
 * @property string $faxdetect
 * @property string $buggymwi
 * @property string $auth
 * @property string $fullname
 * @property string $trunkname
 * @property string $cid_number
 * @property string $callingpres
 * @property string $mohinterpret
 * @property string $mohsuggest
 * @property string $parkinglot
 * @property string $hasvoicemail
 * @property string $vmexten
 * @property string $autoframing
 * @property integer $rtpkeepalive
 * @property integer $call_limit1
 * @property string $g726nonstandard
 * @property string $ignoresdpversion
 * @property string $allowtransfer
 * @property string $dynamic
 *
 * The followings are the available model relations:
 * @property Callerids[] $callerids
 * @property Callflows[] $callflows
 * @property Devicecodecs[] $devicecodecs
 * @property Devicegroups $devicegroup
 * @property Devicetypes $deviceType
 * @property Dids $primaryDid
 * @property Locations $location
 * @property Users $user
 * @property Extlines[] $extlines
 * @property Pdffaxemails[] $pdffaxemails
 * @property Pdffaxes[] $pdffaxes
 * @property Users[] $users
 * @property VoicemailBoxes[] $voicemailBoxes
 */
class Devices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Devices the static model class
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
		return 'devices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, secret, context, extension, username', 'required'),
			array('port, regseconds, accountcode, voicemail_active, user_id, primary_did_id, works_not_logged, forward_to, record, devicegroup_id, callgroup, pickupgroup, location_id, istrunk, cid_from_dids, tell_balance, tell_time, tell_rtime_when_left, repeat_rtime_every, ani, timeout, process_sipchaninfo, temporary_id, allow_duplicate_calls, call_limit, lastms, grace_time, recording_to_email, recording_keep, record_forced, fake_ring, save_call_log, server_id, enable_mwi, use_ani_for_cli, change_failed_code_to, max_timeout, forward_did_id, anti_resale_auto_answer, qf_tell_balance, qf_tell_time, time_limit_per_day, control_callerid_by_cids, callerid_advanced_control, block_callerid, busylevel, maxcallbitrate, session_expires, session_minse, rtptimeout, rtpholdtimeout, timert1, timerb, qualifyfreq, rtpkeepalive, call_limit1', 'numerical', 'integerOnly'=>true),
			array('latency', 'numerical'),
			array('name, host, context, callerid, authuser', 'length', 'max'=>100),
			array('secret, extension, recording_email, reg_status', 'length', 'max'=>50),
			array('ipaddr, md5secret, remotesecret, setvar, amaflags, t38pt_usertpsource, regexten, defaultip, outboundproxy, callbackextension, contactpermit, contactdeny, auth, fullname, trunkname, cid_number, mohinterpret, mohsuggest, parkinglot, vmexten', 'length', 'max'=>40),
			array('username', 'length', 'max'=>60),
			array('device_type, useragent', 'length', 'max'=>20),
			array('transfer, disallow, allow, deny, permit, canreinvite, dtmfmode, fromuser, fromdomain, trustrpid, sendrpid, insecure, progressinband, videosupport, description, pin, t38pt_udptl, regserver, mailbox', 'length', 'max'=>255),
			array('nat', 'length', 'max'=>11),
			array('qualify, requirecalltoken, language, defaultuser', 'length', 'max'=>10),
			array('fullcontact', 'length', 'max'=>80),
			array('promiscredir, faststart, h245tunneling, transport, subscribemwi, encryption, useclientcode, callcounter, allowoverlap, allowsubscribe, rfc2833compensate, session_refresher, constantssrc, usereqphone, textsupport, faxdetect, buggymwi, hasvoicemail, autoframing, g726nonstandard, ignoresdpversion, allowtransfer, dynamic', 'length', 'max'=>3),
			array('calleridpres, callingpres', 'length', 'max'=>21),
			array('type, directmedia', 'length', 'max'=>6),
			array('session_timers', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, host, secret, context, ipaddr, port, regseconds, accountcode, callerid, extension, voicemail_active, username, device_type, user_id, primary_did_id, works_not_logged, forward_to, record, transfer, disallow, allow, deny, permit, nat, qualify, fullcontact, canreinvite, devicegroup_id, dtmfmode, callgroup, pickupgroup, fromuser, fromdomain, trustrpid, sendrpid, insecure, progressinband, videosupport, location_id, description, istrunk, cid_from_dids, pin, tell_balance, tell_time, tell_rtime_when_left, repeat_rtime_every, t38pt_udptl, regserver, ani, promiscredir, timeout, process_sipchaninfo, temporary_id, allow_duplicate_calls, call_limit, lastms, faststart, h245tunneling, latency, grace_time, recording_to_email, recording_keep, recording_email, record_forced, fake_ring, save_call_log, mailbox, server_id, enable_mwi, authuser, requirecalltoken, language, use_ani_for_cli, calleridpres, change_failed_code_to, reg_status, max_timeout, forward_did_id, anti_resale_auto_answer, qf_tell_balance, qf_tell_time, time_limit_per_day, control_callerid_by_cids, callerid_advanced_control, transport, subscribemwi, encryption, block_callerid, defaultuser, useragent, type, md5secret, remotesecret, directmedia, useclientcode, setvar, amaflags, callcounter, busylevel, allowoverlap, allowsubscribe, maxcallbitrate, rfc2833compensate, session_timers, session_expires, session_minse, session_refresher, t38pt_usertpsource, regexten, defaultip, rtptimeout, rtpholdtimeout, outboundproxy, callbackextension, timert1, timerb, qualifyfreq, constantssrc, contactpermit, contactdeny, usereqphone, textsupport, faxdetect, buggymwi, auth, fullname, trunkname, cid_number, callingpres, mohinterpret, mohsuggest, parkinglot, hasvoicemail, vmexten, autoframing, rtpkeepalive, call_limit1, g726nonstandard, ignoresdpversion, allowtransfer, dynamic', 'safe', 'on'=>'search'),
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
			'callerids' => array(self::HAS_MANY, 'Callerids', 'device_id'),
			'callflows' => array(self::HAS_MANY, 'Callflows', 'device_id'),
			'devicecodecs' => array(self::HAS_MANY, 'Devicecodecs', 'device_id'),
			'devicegroup' => array(self::BELONGS_TO, 'Devicegroups', 'devicegroup_id'),
			'deviceType' => array(self::BELONGS_TO, 'Devicetypes', 'device_type'),
			'primaryDid' => array(self::BELONGS_TO, 'Dids', 'primary_did_id'),
			'location' => array(self::BELONGS_TO, 'Locations', 'location_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'extlines' => array(self::HAS_MANY, 'Extlines', 'device_id'),
			'pdffaxemails' => array(self::HAS_MANY, 'Pdffaxemails', 'device_id'),
			'pdffaxes' => array(self::HAS_MANY, 'Pdffaxes', 'device_id'),
			'users' => array(self::HAS_MANY, 'Users', 'primary_device_id'),
			'voicemailBoxes' => array(self::HAS_MANY, 'VoicemailBoxes', 'device_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'host' => 'Host',
			'secret' => 'Secret',
			'context' => 'Context',
			'ipaddr' => 'Ipaddr',
			'port' => 'Port',
			'regseconds' => 'Regseconds',
			'accountcode' => 'Accountcode',
			'callerid' => 'Callerid',
			'extension' => 'Extension',
			'voicemail_active' => 'Voicemail Active',
			'username' => 'Username',
			'device_type' => 'Device Type',
			'user_id' => 'User',
			'primary_did_id' => 'Primary Did',
			'works_not_logged' => 'Works Not Logged',
			'forward_to' => 'Forward To',
			'record' => 'Record',
			'transfer' => 'Transfer',
			'disallow' => 'Disallow',
			'allow' => 'Allow',
			'deny' => 'Deny',
			'permit' => 'Permit',
			'nat' => 'Nat',
			'qualify' => 'Qualify',
			'fullcontact' => 'Fullcontact',
			'canreinvite' => 'Canreinvite',
			'devicegroup_id' => 'Devicegroup',
			'dtmfmode' => 'Dtmfmode',
			'callgroup' => 'Callgroup',
			'pickupgroup' => 'Pickupgroup',
			'fromuser' => 'Fromuser',
			'fromdomain' => 'Fromdomain',
			'trustrpid' => 'Trustrpid',
			'sendrpid' => 'Sendrpid',
			'insecure' => 'Insecure',
			'progressinband' => 'Progressinband',
			'videosupport' => 'Videosupport',
			'location_id' => 'Location',
			'description' => 'Description',
			'istrunk' => 'Istrunk',
			'cid_from_dids' => 'Cid From Dids',
			'pin' => 'Pin',
			'tell_balance' => 'Tell Balance',
			'tell_time' => 'Tell Time',
			'tell_rtime_when_left' => 'Tell Rtime When Left',
			'repeat_rtime_every' => 'Repeat Rtime Every',
			't38pt_udptl' => 'T38pt Udptl',
			'regserver' => 'Regserver',
			'ani' => 'Ani',
			'promiscredir' => 'Promiscredir',
			'timeout' => 'Timeout',
			'process_sipchaninfo' => 'Process Sipchaninfo',
			'temporary_id' => 'Temporary',
			'allow_duplicate_calls' => 'Allow Duplicate Calls',
			'call_limit' => 'Call Limit',
			'lastms' => 'Lastms',
			'faststart' => 'Faststart',
			'h245tunneling' => 'H245tunneling',
			'latency' => 'Latency',
			'grace_time' => 'Grace Time',
			'recording_to_email' => 'Recording To Email',
			'recording_keep' => 'Recording Keep',
			'recording_email' => 'Recording Email',
			'record_forced' => 'Record Forced',
			'fake_ring' => 'Fake Ring',
			'save_call_log' => 'Save Call Log',
			'mailbox' => 'Mailbox',
			'server_id' => 'Server',
			'enable_mwi' => 'Enable Mwi',
			'authuser' => 'Authuser',
			'requirecalltoken' => 'Requirecalltoken',
			'language' => 'Language',
			'use_ani_for_cli' => 'Use Ani For Cli',
			'calleridpres' => 'Calleridpres',
			'change_failed_code_to' => 'Change Failed Code To',
			'reg_status' => 'Reg Status',
			'max_timeout' => 'Max Timeout',
			'forward_did_id' => 'Forward Did',
			'anti_resale_auto_answer' => 'Anti Resale Auto Answer',
			'qf_tell_balance' => 'Qf Tell Balance',
			'qf_tell_time' => 'Qf Tell Time',
			'time_limit_per_day' => 'Time Limit Per Day',
			'control_callerid_by_cids' => 'Control Callerid By Cids',
			'callerid_advanced_control' => 'Callerid Advanced Control',
			'transport' => 'Transport',
			'subscribemwi' => 'Subscribemwi',
			'encryption' => 'Encryption',
			'block_callerid' => 'Block Callerid',
			'defaultuser' => 'Defaultuser',
			'useragent' => 'Useragent',
			'type' => 'Type',
			'md5secret' => 'Md5secret',
			'remotesecret' => 'Remotesecret',
			'directmedia' => 'Directmedia',
			'useclientcode' => 'Useclientcode',
			'setvar' => 'Setvar',
			'amaflags' => 'Amaflags',
			'callcounter' => 'Callcounter',
			'busylevel' => 'Busylevel',
			'allowoverlap' => 'Allowoverlap',
			'allowsubscribe' => 'Allowsubscribe',
			'maxcallbitrate' => 'Maxcallbitrate',
			'rfc2833compensate' => 'Rfc2833compensate',
			'session_timers' => 'Session Timers',
			'session_expires' => 'Session Expires',
			'session_minse' => 'Session Minse',
			'session_refresher' => 'Session Refresher',
			't38pt_usertpsource' => 'T38pt Usertpsource',
			'regexten' => 'Regexten',
			'defaultip' => 'Defaultip',
			'rtptimeout' => 'Rtptimeout',
			'rtpholdtimeout' => 'Rtpholdtimeout',
			'outboundproxy' => 'Outboundproxy',
			'callbackextension' => 'Callbackextension',
			'timert1' => 'Timert1',
			'timerb' => 'Timerb',
			'qualifyfreq' => 'Qualifyfreq',
			'constantssrc' => 'Constantssrc',
			'contactpermit' => 'Contactpermit',
			'contactdeny' => 'Contactdeny',
			'usereqphone' => 'Usereqphone',
			'textsupport' => 'Textsupport',
			'faxdetect' => 'Faxdetect',
			'buggymwi' => 'Buggymwi',
			'auth' => 'Auth',
			'fullname' => 'Fullname',
			'trunkname' => 'Trunkname',
			'cid_number' => 'Cid Number',
			'callingpres' => 'Callingpres',
			'mohinterpret' => 'Mohinterpret',
			'mohsuggest' => 'Mohsuggest',
			'parkinglot' => 'Parkinglot',
			'hasvoicemail' => 'Hasvoicemail',
			'vmexten' => 'Vmexten',
			'autoframing' => 'Autoframing',
			'rtpkeepalive' => 'Rtpkeepalive',
			'call_limit1' => 'Call Limit1',
			'g726nonstandard' => 'G726nonstandard',
			'ignoresdpversion' => 'Ignoresdpversion',
			'allowtransfer' => 'Allowtransfer',
			'dynamic' => 'Dynamic',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('host',$this->host,true);
		$criteria->compare('secret',$this->secret,true);
		$criteria->compare('context',$this->context,true);
		$criteria->compare('ipaddr',$this->ipaddr,true);
		$criteria->compare('port',$this->port);
		$criteria->compare('regseconds',$this->regseconds);
		$criteria->compare('accountcode',$this->accountcode);
		$criteria->compare('callerid',$this->callerid,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('voicemail_active',$this->voicemail_active);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('device_type',$this->device_type,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('primary_did_id',$this->primary_did_id);
		$criteria->compare('works_not_logged',$this->works_not_logged);
		$criteria->compare('forward_to',$this->forward_to);
		$criteria->compare('record',$this->record);
		$criteria->compare('transfer',$this->transfer,true);
		$criteria->compare('disallow',$this->disallow,true);
		$criteria->compare('allow',$this->allow,true);
		$criteria->compare('deny',$this->deny,true);
		$criteria->compare('permit',$this->permit,true);
		$criteria->compare('nat',$this->nat,true);
		$criteria->compare('qualify',$this->qualify,true);
		$criteria->compare('fullcontact',$this->fullcontact,true);
		$criteria->compare('canreinvite',$this->canreinvite,true);
		$criteria->compare('devicegroup_id',$this->devicegroup_id);
		$criteria->compare('dtmfmode',$this->dtmfmode,true);
		$criteria->compare('callgroup',$this->callgroup);
		$criteria->compare('pickupgroup',$this->pickupgroup);
		$criteria->compare('fromuser',$this->fromuser,true);
		$criteria->compare('fromdomain',$this->fromdomain,true);
		$criteria->compare('trustrpid',$this->trustrpid,true);
		$criteria->compare('sendrpid',$this->sendrpid,true);
		$criteria->compare('insecure',$this->insecure,true);
		$criteria->compare('progressinband',$this->progressinband,true);
		$criteria->compare('videosupport',$this->videosupport,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('istrunk',$this->istrunk);
		$criteria->compare('cid_from_dids',$this->cid_from_dids);
		$criteria->compare('pin',$this->pin,true);
		$criteria->compare('tell_balance',$this->tell_balance);
		$criteria->compare('tell_time',$this->tell_time);
		$criteria->compare('tell_rtime_when_left',$this->tell_rtime_when_left);
		$criteria->compare('repeat_rtime_every',$this->repeat_rtime_every);
		$criteria->compare('t38pt_udptl',$this->t38pt_udptl,true);
		$criteria->compare('regserver',$this->regserver,true);
		$criteria->compare('ani',$this->ani);
		$criteria->compare('promiscredir',$this->promiscredir,true);
		$criteria->compare('timeout',$this->timeout);
		$criteria->compare('process_sipchaninfo',$this->process_sipchaninfo);
		$criteria->compare('temporary_id',$this->temporary_id);
		$criteria->compare('allow_duplicate_calls',$this->allow_duplicate_calls);
		$criteria->compare('call_limit',$this->call_limit);
		$criteria->compare('lastms',$this->lastms);
		$criteria->compare('faststart',$this->faststart,true);
		$criteria->compare('h245tunneling',$this->h245tunneling,true);
		$criteria->compare('latency',$this->latency);
		$criteria->compare('grace_time',$this->grace_time);
		$criteria->compare('recording_to_email',$this->recording_to_email);
		$criteria->compare('recording_keep',$this->recording_keep);
		$criteria->compare('recording_email',$this->recording_email,true);
		$criteria->compare('record_forced',$this->record_forced);
		$criteria->compare('fake_ring',$this->fake_ring);
		$criteria->compare('save_call_log',$this->save_call_log);
		$criteria->compare('mailbox',$this->mailbox,true);
		$criteria->compare('server_id',$this->server_id);
		$criteria->compare('enable_mwi',$this->enable_mwi);
		$criteria->compare('authuser',$this->authuser,true);
		$criteria->compare('requirecalltoken',$this->requirecalltoken,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('use_ani_for_cli',$this->use_ani_for_cli);
		$criteria->compare('calleridpres',$this->calleridpres,true);
		$criteria->compare('change_failed_code_to',$this->change_failed_code_to);
		$criteria->compare('reg_status',$this->reg_status,true);
		$criteria->compare('max_timeout',$this->max_timeout);
		$criteria->compare('forward_did_id',$this->forward_did_id);
		$criteria->compare('anti_resale_auto_answer',$this->anti_resale_auto_answer);
		$criteria->compare('qf_tell_balance',$this->qf_tell_balance);
		$criteria->compare('qf_tell_time',$this->qf_tell_time);
		$criteria->compare('time_limit_per_day',$this->time_limit_per_day);
		$criteria->compare('control_callerid_by_cids',$this->control_callerid_by_cids);
		$criteria->compare('callerid_advanced_control',$this->callerid_advanced_control);
		$criteria->compare('transport',$this->transport,true);
		$criteria->compare('subscribemwi',$this->subscribemwi,true);
		$criteria->compare('encryption',$this->encryption,true);
		$criteria->compare('block_callerid',$this->block_callerid);
		$criteria->compare('defaultuser',$this->defaultuser,true);
		$criteria->compare('useragent',$this->useragent,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('md5secret',$this->md5secret,true);
		$criteria->compare('remotesecret',$this->remotesecret,true);
		$criteria->compare('directmedia',$this->directmedia,true);
		$criteria->compare('useclientcode',$this->useclientcode,true);
		$criteria->compare('setvar',$this->setvar,true);
		$criteria->compare('amaflags',$this->amaflags,true);
		$criteria->compare('callcounter',$this->callcounter,true);
		$criteria->compare('busylevel',$this->busylevel);
		$criteria->compare('allowoverlap',$this->allowoverlap,true);
		$criteria->compare('allowsubscribe',$this->allowsubscribe,true);
		$criteria->compare('maxcallbitrate',$this->maxcallbitrate);
		$criteria->compare('rfc2833compensate',$this->rfc2833compensate,true);
		$criteria->compare('session_timers',$this->session_timers,true);
		$criteria->compare('session_expires',$this->session_expires);
		$criteria->compare('session_minse',$this->session_minse);
		$criteria->compare('session_refresher',$this->session_refresher,true);
		$criteria->compare('t38pt_usertpsource',$this->t38pt_usertpsource,true);
		$criteria->compare('regexten',$this->regexten,true);
		$criteria->compare('defaultip',$this->defaultip,true);
		$criteria->compare('rtptimeout',$this->rtptimeout);
		$criteria->compare('rtpholdtimeout',$this->rtpholdtimeout);
		$criteria->compare('outboundproxy',$this->outboundproxy,true);
		$criteria->compare('callbackextension',$this->callbackextension,true);
		$criteria->compare('timert1',$this->timert1);
		$criteria->compare('timerb',$this->timerb);
		$criteria->compare('qualifyfreq',$this->qualifyfreq);
		$criteria->compare('constantssrc',$this->constantssrc,true);
		$criteria->compare('contactpermit',$this->contactpermit,true);
		$criteria->compare('contactdeny',$this->contactdeny,true);
		$criteria->compare('usereqphone',$this->usereqphone,true);
		$criteria->compare('textsupport',$this->textsupport,true);
		$criteria->compare('faxdetect',$this->faxdetect,true);
		$criteria->compare('buggymwi',$this->buggymwi,true);
		$criteria->compare('auth',$this->auth,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('trunkname',$this->trunkname,true);
		$criteria->compare('cid_number',$this->cid_number,true);
		$criteria->compare('callingpres',$this->callingpres,true);
		$criteria->compare('mohinterpret',$this->mohinterpret,true);
		$criteria->compare('mohsuggest',$this->mohsuggest,true);
		$criteria->compare('parkinglot',$this->parkinglot,true);
		$criteria->compare('hasvoicemail',$this->hasvoicemail,true);
		$criteria->compare('vmexten',$this->vmexten,true);
		$criteria->compare('autoframing',$this->autoframing,true);
		$criteria->compare('rtpkeepalive',$this->rtpkeepalive);
		$criteria->compare('call_limit1',$this->call_limit1);
		$criteria->compare('g726nonstandard',$this->g726nonstandard,true);
		$criteria->compare('ignoresdpversion',$this->ignoresdpversion,true);
		$criteria->compare('allowtransfer',$this->allowtransfer,true);
		$criteria->compare('dynamic',$this->dynamic,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
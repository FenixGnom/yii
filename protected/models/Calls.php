<?php

/**
 * This is the model class for table "calls".
 *
 * The followings are the available columns in table 'calls':
 * @property integer $id
 * @property string $calldate
 * @property string $clid
 * @property string $src
 * @property string $dst
 * @property string $dcontext
 * @property string $channel
 * @property string $dstchannel
 * @property string $lastapp
 * @property string $lastdata
 * @property integer $duration
 * @property integer $billsec
 * @property string $disposition
 * @property integer $amaflags
 * @property string $accountcode
 * @property string $uniqueid
 * @property string $userfield
 * @property integer $src_device_id
 * @property integer $dst_device_id
 * @property integer $processed
 * @property double $did_price
 * @property integer $card_id
 * @property integer $provider_id
 * @property double $provider_rate
 * @property integer $provider_billsec
 * @property double $provider_price
 * @property integer $user_id
 * @property double $user_rate
 * @property integer $user_billsec
 * @property double $user_price
 * @property integer $reseller_id
 * @property double $reseller_rate
 * @property integer $reseller_billsec
 * @property double $reseller_price
 * @property integer $partner_id
 * @property double $partner_rate
 * @property integer $partner_billsec
 * @property double $partner_price
 * @property string $prefix
 * @property integer $server_id
 * @property integer $hangupcause
 * @property string $callertype
 * @property string $peerip
 * @property string $recvip
 * @property string $sipfrom
 * @property string $uri
 * @property string $useragent
 * @property string $peername
 * @property integer $t38passthrough
 * @property double $did_inc_price
 * @property double $did_prov_price
 * @property string $localized_dst
 * @property integer $did_provider_id
 * @property integer $did_id
 * @property string $originator_ip
 * @property string $terminator_ip
 * @property double $real_duration
 * @property double $real_billsec
 * @property integer $did_billsec
 * @property integer $dst_user_id
 *
 * The followings are the available model relations:
 * @property Dids $did
 * @property Devices $srcDevice
 * @property Devices $dstDevice
 * @property Users $user
 * @property Users $reseller
 * @property Users $partner
 */
class Calls extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Calls the static model class
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
		return 'calls';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clid, src, dst, dcontext, channel, dstchannel, lastapp, lastdata, disposition, accountcode, uniqueid, userfield', 'required'),
			array('duration, billsec, amaflags, src_device_id, dst_device_id, processed, card_id, provider_id, provider_billsec, user_id, user_billsec, reseller_id, reseller_billsec, partner_id, partner_billsec, server_id, hangupcause, t38passthrough, did_provider_id, did_id, did_billsec, dst_user_id', 'numerical', 'integerOnly'=>true),
			array('did_price, provider_rate, provider_price, user_rate, user_price, reseller_rate, reseller_price, partner_rate, partner_price, did_inc_price, did_prov_price, real_duration, real_billsec', 'numerical'),
			array('clid, src, dst, dcontext, channel, dstchannel, lastapp, lastdata', 'length', 'max'=>80),
			array('disposition', 'length', 'max'=>45),
			array('accountcode, originator_ip, terminator_ip', 'length', 'max'=>20),
			array('uniqueid', 'length', 'max'=>32),
			array('userfield, peerip, recvip, sipfrom, uri, useragent, peername', 'length', 'max'=>255),
			array('prefix, localized_dst', 'length', 'max'=>50),
			array('callertype', 'length', 'max'=>7),
			array('calldate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, calldate, clid, src, dst, dcontext, channel, dstchannel, lastapp, lastdata, duration, billsec, disposition, amaflags, accountcode, uniqueid, userfield, src_device_id, dst_device_id, processed, did_price, card_id, provider_id, provider_rate, provider_billsec, provider_price, user_id, user_rate, user_billsec, user_price, reseller_id, reseller_rate, reseller_billsec, reseller_price, partner_id, partner_rate, partner_billsec, partner_price, prefix, server_id, hangupcause, callertype, peerip, recvip, sipfrom, uri, useragent, peername, t38passthrough, did_inc_price, did_prov_price, localized_dst, did_provider_id, did_id, originator_ip, terminator_ip, real_duration, real_billsec, did_billsec, dst_user_id', 'safe', 'on'=>'search'),
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
			'did' => array(self::BELONGS_TO, 'Dids', 'did_id'),
			'srcDevice' => array(self::BELONGS_TO, 'Devices', 'src_device_id'),
			'dstDevice' => array(self::BELONGS_TO, 'Devices', 'dst_device_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'reseller' => array(self::BELONGS_TO, 'Users', 'reseller_id'),
			'partner' => array(self::BELONGS_TO, 'Users', 'partner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'calldate' => 'Calldate',
			'clid' => 'Clid',
			'src' => 'Src',
			'dst' => 'Dst',
			'dcontext' => 'Dcontext',
			'channel' => 'Channel',
			'dstchannel' => 'Dstchannel',
			'lastapp' => 'Lastapp',
			'lastdata' => 'Lastdata',
			'duration' => 'Duration',
			'billsec' => 'Billsec',
			'disposition' => 'Disposition',
			'amaflags' => 'Amaflags',
			'accountcode' => 'Accountcode',
			'uniqueid' => 'Uniqueid',
			'userfield' => 'Userfield',
			'src_device_id' => 'Src Device',
			'dst_device_id' => 'Dst Device',
			'processed' => 'Processed',
			'did_price' => 'Did Price',
			'card_id' => 'Card',
			'provider_id' => 'Provider',
			'provider_rate' => 'Provider Rate',
			'provider_billsec' => 'Provider Billsec',
			'provider_price' => 'Provider Price',
			'user_id' => 'User',
			'user_rate' => 'User Rate',
			'user_billsec' => 'User Billsec',
			'user_price' => 'User Price',
			'reseller_id' => 'Reseller',
			'reseller_rate' => 'Reseller Rate',
			'reseller_billsec' => 'Reseller Billsec',
			'reseller_price' => 'Reseller Price',
			'partner_id' => 'Partner',
			'partner_rate' => 'Partner Rate',
			'partner_billsec' => 'Partner Billsec',
			'partner_price' => 'Partner Price',
			'prefix' => 'Prefix',
			'server_id' => 'Server',
			'hangupcause' => 'Hangupcause',
			'callertype' => 'Callertype',
			'peerip' => 'Peerip',
			'recvip' => 'Recvip',
			'sipfrom' => 'Sipfrom',
			'uri' => 'Uri',
			'useragent' => 'Useragent',
			'peername' => 'Peername',
			't38passthrough' => 'T38passthrough',
			'did_inc_price' => 'Did Inc Price',
			'did_prov_price' => 'Did Prov Price',
			'localized_dst' => 'Localized Dst',
			'did_provider_id' => 'Did Provider',
			'did_id' => 'Did',
			'originator_ip' => 'Originator Ip',
			'terminator_ip' => 'Terminator Ip',
			'real_duration' => 'Real Duration',
			'real_billsec' => 'Real Billsec',
			'did_billsec' => 'Did Billsec',
			'dst_user_id' => 'Dst User',
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
		$criteria->compare('calldate',$this->calldate,true);
		$criteria->compare('clid',$this->clid,true);
		$criteria->compare('src',$this->src,true);
		$criteria->compare('dst',$this->dst,true);
		$criteria->compare('dcontext',$this->dcontext,true);
		$criteria->compare('channel',$this->channel,true);
		$criteria->compare('dstchannel',$this->dstchannel,true);
		$criteria->compare('lastapp',$this->lastapp,true);
		$criteria->compare('lastdata',$this->lastdata,true);
		$criteria->compare('duration',$this->duration);
		$criteria->compare('billsec',$this->billsec);
		$criteria->compare('disposition',$this->disposition,true);
		$criteria->compare('amaflags',$this->amaflags);
		$criteria->compare('accountcode',$this->accountcode,true);
		$criteria->compare('uniqueid',$this->uniqueid,true);
		$criteria->compare('userfield',$this->userfield,true);
		$criteria->compare('src_device_id',$this->src_device_id);
		$criteria->compare('dst_device_id',$this->dst_device_id);
		$criteria->compare('processed',$this->processed);
		$criteria->compare('did_price',$this->did_price);
		$criteria->compare('card_id',$this->card_id);
		$criteria->compare('provider_id',$this->provider_id);
		$criteria->compare('provider_rate',$this->provider_rate);
		$criteria->compare('provider_billsec',$this->provider_billsec);
		$criteria->compare('provider_price',$this->provider_price);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_rate',$this->user_rate);
		$criteria->compare('user_billsec',$this->user_billsec);
		$criteria->compare('user_price',$this->user_price);
		$criteria->compare('reseller_id',$this->reseller_id);
		$criteria->compare('reseller_rate',$this->reseller_rate);
		$criteria->compare('reseller_billsec',$this->reseller_billsec);
		$criteria->compare('reseller_price',$this->reseller_price);
		$criteria->compare('partner_id',$this->partner_id);
		$criteria->compare('partner_rate',$this->partner_rate);
		$criteria->compare('partner_billsec',$this->partner_billsec);
		$criteria->compare('partner_price',$this->partner_price);
		$criteria->compare('prefix',$this->prefix,true);
		$criteria->compare('server_id',$this->server_id);
		$criteria->compare('hangupcause',$this->hangupcause);
		$criteria->compare('callertype',$this->callertype,true);
		$criteria->compare('peerip',$this->peerip,true);
		$criteria->compare('recvip',$this->recvip,true);
		$criteria->compare('sipfrom',$this->sipfrom,true);
		$criteria->compare('uri',$this->uri,true);
		$criteria->compare('useragent',$this->useragent,true);
		$criteria->compare('peername',$this->peername,true);
		$criteria->compare('t38passthrough',$this->t38passthrough);
		$criteria->compare('did_inc_price',$this->did_inc_price);
		$criteria->compare('did_prov_price',$this->did_prov_price);
		$criteria->compare('localized_dst',$this->localized_dst,true);
		$criteria->compare('did_provider_id',$this->did_provider_id);
		$criteria->compare('did_id',$this->did_id);
		$criteria->compare('originator_ip',$this->originator_ip,true);
		$criteria->compare('terminator_ip',$this->terminator_ip,true);
		$criteria->compare('real_duration',$this->real_duration);
		$criteria->compare('real_billsec',$this->real_billsec);
		$criteria->compare('did_billsec',$this->did_billsec);
		$criteria->compare('dst_user_id',$this->dst_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
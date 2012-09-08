<?php
/* @var $this DevicesController */
/* @var $model Devices */

$this->breadcrumbs=array(
	'Devices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Devices', 'url'=>array('index')),
	array('label'=>'Create Devices', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('devices-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Devices</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'devices-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'host',
		'secret',
		'context',
		'ipaddr',
		/*
		'port',
		'regseconds',
		'accountcode',
		'callerid',
		'extension',
		'voicemail_active',
		'username',
		'device_type',
		'user_id',
		'primary_did_id',
		'works_not_logged',
		'forward_to',
		'record',
		'transfer',
		'disallow',
		'allow',
		'deny',
		'permit',
		'nat',
		'qualify',
		'fullcontact',
		'canreinvite',
		'devicegroup_id',
		'dtmfmode',
		'callgroup',
		'pickupgroup',
		'fromuser',
		'fromdomain',
		'trustrpid',
		'sendrpid',
		'insecure',
		'progressinband',
		'videosupport',
		'location_id',
		'description',
		'istrunk',
		'cid_from_dids',
		'pin',
		'tell_balance',
		'tell_time',
		'tell_rtime_when_left',
		'repeat_rtime_every',
		't38pt_udptl',
		'regserver',
		'ani',
		'promiscredir',
		'timeout',
		'process_sipchaninfo',
		'temporary_id',
		'allow_duplicate_calls',
		'call_limit',
		'lastms',
		'faststart',
		'h245tunneling',
		'latency',
		'grace_time',
		'recording_to_email',
		'recording_keep',
		'recording_email',
		'record_forced',
		'fake_ring',
		'save_call_log',
		'mailbox',
		'server_id',
		'enable_mwi',
		'authuser',
		'requirecalltoken',
		'language',
		'use_ani_for_cli',
		'calleridpres',
		'change_failed_code_to',
		'reg_status',
		'max_timeout',
		'forward_did_id',
		'anti_resale_auto_answer',
		'qf_tell_balance',
		'qf_tell_time',
		'time_limit_per_day',
		'control_callerid_by_cids',
		'callerid_advanced_control',
		'transport',
		'subscribemwi',
		'encryption',
		'block_callerid',
		'defaultuser',
		'useragent',
		'type',
		'md5secret',
		'remotesecret',
		'directmedia',
		'useclientcode',
		'setvar',
		'amaflags',
		'callcounter',
		'busylevel',
		'allowoverlap',
		'allowsubscribe',
		'maxcallbitrate',
		'rfc2833compensate',
		'session_timers',
		'session_expires',
		'session_minse',
		'session_refresher',
		't38pt_usertpsource',
		'regexten',
		'defaultip',
		'rtptimeout',
		'rtpholdtimeout',
		'outboundproxy',
		'callbackextension',
		'timert1',
		'timerb',
		'qualifyfreq',
		'constantssrc',
		'contactpermit',
		'contactdeny',
		'usereqphone',
		'textsupport',
		'faxdetect',
		'buggymwi',
		'auth',
		'fullname',
		'trunkname',
		'cid_number',
		'callingpres',
		'mohinterpret',
		'mohsuggest',
		'parkinglot',
		'hasvoicemail',
		'vmexten',
		'autoframing',
		'rtpkeepalive',
		'call_limit1',
		'g726nonstandard',
		'ignoresdpversion',
		'allowtransfer',
		'dynamic',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

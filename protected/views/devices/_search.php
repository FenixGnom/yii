<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'host'); ?>
		<?php echo $form->textField($model,'host',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secret'); ?>
		<?php echo $form->textField($model,'secret',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'context'); ?>
		<?php echo $form->textField($model,'context',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipaddr'); ?>
		<?php echo $form->textField($model,'ipaddr',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'port'); ?>
		<?php echo $form->textField($model,'port'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regseconds'); ?>
		<?php echo $form->textField($model,'regseconds'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountcode'); ?>
		<?php echo $form->textField($model,'accountcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callerid'); ?>
		<?php echo $form->textField($model,'callerid',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extension'); ?>
		<?php echo $form->textField($model,'extension',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voicemail_active'); ?>
		<?php echo $form->textField($model,'voicemail_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'device_type'); ?>
		<?php echo $form->textField($model,'device_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primary_did_id'); ?>
		<?php echo $form->textField($model,'primary_did_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'works_not_logged'); ?>
		<?php echo $form->textField($model,'works_not_logged'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forward_to'); ?>
		<?php echo $form->textField($model,'forward_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'record'); ?>
		<?php echo $form->textField($model,'record'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transfer'); ?>
		<?php echo $form->textField($model,'transfer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disallow'); ?>
		<?php echo $form->textField($model,'disallow',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allow'); ?>
		<?php echo $form->textField($model,'allow',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deny'); ?>
		<?php echo $form->textField($model,'deny',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permit'); ?>
		<?php echo $form->textField($model,'permit',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nat'); ?>
		<?php echo $form->textField($model,'nat',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualify'); ?>
		<?php echo $form->textField($model,'qualify',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullcontact'); ?>
		<?php echo $form->textField($model,'fullcontact',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'canreinvite'); ?>
		<?php echo $form->textField($model,'canreinvite',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'devicegroup_id'); ?>
		<?php echo $form->textField($model,'devicegroup_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dtmfmode'); ?>
		<?php echo $form->textField($model,'dtmfmode',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callgroup'); ?>
		<?php echo $form->textField($model,'callgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pickupgroup'); ?>
		<?php echo $form->textField($model,'pickupgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fromuser'); ?>
		<?php echo $form->textField($model,'fromuser',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fromdomain'); ?>
		<?php echo $form->textField($model,'fromdomain',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trustrpid'); ?>
		<?php echo $form->textField($model,'trustrpid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sendrpid'); ?>
		<?php echo $form->textField($model,'sendrpid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insecure'); ?>
		<?php echo $form->textField($model,'insecure',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'progressinband'); ?>
		<?php echo $form->textField($model,'progressinband',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'videosupport'); ?>
		<?php echo $form->textField($model,'videosupport',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location_id'); ?>
		<?php echo $form->textField($model,'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'istrunk'); ?>
		<?php echo $form->textField($model,'istrunk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid_from_dids'); ?>
		<?php echo $form->textField($model,'cid_from_dids'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pin'); ?>
		<?php echo $form->textField($model,'pin',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tell_balance'); ?>
		<?php echo $form->textField($model,'tell_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tell_time'); ?>
		<?php echo $form->textField($model,'tell_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tell_rtime_when_left'); ?>
		<?php echo $form->textField($model,'tell_rtime_when_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'repeat_rtime_every'); ?>
		<?php echo $form->textField($model,'repeat_rtime_every'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t38pt_udptl'); ?>
		<?php echo $form->textField($model,'t38pt_udptl',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regserver'); ?>
		<?php echo $form->textField($model,'regserver',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ani'); ?>
		<?php echo $form->textField($model,'ani'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promiscredir'); ?>
		<?php echo $form->textField($model,'promiscredir',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeout'); ?>
		<?php echo $form->textField($model,'timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'process_sipchaninfo'); ?>
		<?php echo $form->textField($model,'process_sipchaninfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temporary_id'); ?>
		<?php echo $form->textField($model,'temporary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allow_duplicate_calls'); ?>
		<?php echo $form->textField($model,'allow_duplicate_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_limit'); ?>
		<?php echo $form->textField($model,'call_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastms'); ?>
		<?php echo $form->textField($model,'lastms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faststart'); ?>
		<?php echo $form->textField($model,'faststart',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'h245tunneling'); ?>
		<?php echo $form->textField($model,'h245tunneling',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latency'); ?>
		<?php echo $form->textField($model,'latency'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grace_time'); ?>
		<?php echo $form->textField($model,'grace_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_to_email'); ?>
		<?php echo $form->textField($model,'recording_to_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_keep'); ?>
		<?php echo $form->textField($model,'recording_keep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_email'); ?>
		<?php echo $form->textField($model,'recording_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'record_forced'); ?>
		<?php echo $form->textField($model,'record_forced'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fake_ring'); ?>
		<?php echo $form->textField($model,'fake_ring'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'save_call_log'); ?>
		<?php echo $form->textField($model,'save_call_log'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mailbox'); ?>
		<?php echo $form->textField($model,'mailbox',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'server_id'); ?>
		<?php echo $form->textField($model,'server_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enable_mwi'); ?>
		<?php echo $form->textField($model,'enable_mwi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'authuser'); ?>
		<?php echo $form->textField($model,'authuser',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requirecalltoken'); ?>
		<?php echo $form->textField($model,'requirecalltoken',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'use_ani_for_cli'); ?>
		<?php echo $form->textField($model,'use_ani_for_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calleridpres'); ?>
		<?php echo $form->textField($model,'calleridpres',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'change_failed_code_to'); ?>
		<?php echo $form->textField($model,'change_failed_code_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_status'); ?>
		<?php echo $form->textField($model,'reg_status',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_timeout'); ?>
		<?php echo $form->textField($model,'max_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forward_did_id'); ?>
		<?php echo $form->textField($model,'forward_did_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anti_resale_auto_answer'); ?>
		<?php echo $form->textField($model,'anti_resale_auto_answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qf_tell_balance'); ?>
		<?php echo $form->textField($model,'qf_tell_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qf_tell_time'); ?>
		<?php echo $form->textField($model,'qf_tell_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_limit_per_day'); ?>
		<?php echo $form->textField($model,'time_limit_per_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'control_callerid_by_cids'); ?>
		<?php echo $form->textField($model,'control_callerid_by_cids'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callerid_advanced_control'); ?>
		<?php echo $form->textField($model,'callerid_advanced_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transport'); ?>
		<?php echo $form->textField($model,'transport',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subscribemwi'); ?>
		<?php echo $form->textField($model,'subscribemwi',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'encryption'); ?>
		<?php echo $form->textField($model,'encryption',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block_callerid'); ?>
		<?php echo $form->textField($model,'block_callerid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'defaultuser'); ?>
		<?php echo $form->textField($model,'defaultuser',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'useragent'); ?>
		<?php echo $form->textField($model,'useragent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'md5secret'); ?>
		<?php echo $form->textField($model,'md5secret',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remotesecret'); ?>
		<?php echo $form->textField($model,'remotesecret',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'directmedia'); ?>
		<?php echo $form->textField($model,'directmedia',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'useclientcode'); ?>
		<?php echo $form->textField($model,'useclientcode',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'setvar'); ?>
		<?php echo $form->textField($model,'setvar',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amaflags'); ?>
		<?php echo $form->textField($model,'amaflags',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callcounter'); ?>
		<?php echo $form->textField($model,'callcounter',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busylevel'); ?>
		<?php echo $form->textField($model,'busylevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allowoverlap'); ?>
		<?php echo $form->textField($model,'allowoverlap',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allowsubscribe'); ?>
		<?php echo $form->textField($model,'allowsubscribe',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maxcallbitrate'); ?>
		<?php echo $form->textField($model,'maxcallbitrate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rfc2833compensate'); ?>
		<?php echo $form->textField($model,'rfc2833compensate',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_timers'); ?>
		<?php echo $form->textField($model,'session_timers',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_expires'); ?>
		<?php echo $form->textField($model,'session_expires'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_minse'); ?>
		<?php echo $form->textField($model,'session_minse'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_refresher'); ?>
		<?php echo $form->textField($model,'session_refresher',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t38pt_usertpsource'); ?>
		<?php echo $form->textField($model,'t38pt_usertpsource',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regexten'); ?>
		<?php echo $form->textField($model,'regexten',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'defaultip'); ?>
		<?php echo $form->textField($model,'defaultip',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rtptimeout'); ?>
		<?php echo $form->textField($model,'rtptimeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rtpholdtimeout'); ?>
		<?php echo $form->textField($model,'rtpholdtimeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outboundproxy'); ?>
		<?php echo $form->textField($model,'outboundproxy',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callbackextension'); ?>
		<?php echo $form->textField($model,'callbackextension',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timert1'); ?>
		<?php echo $form->textField($model,'timert1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timerb'); ?>
		<?php echo $form->textField($model,'timerb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualifyfreq'); ?>
		<?php echo $form->textField($model,'qualifyfreq'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'constantssrc'); ?>
		<?php echo $form->textField($model,'constantssrc',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactpermit'); ?>
		<?php echo $form->textField($model,'contactpermit',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactdeny'); ?>
		<?php echo $form->textField($model,'contactdeny',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usereqphone'); ?>
		<?php echo $form->textField($model,'usereqphone',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'textsupport'); ?>
		<?php echo $form->textField($model,'textsupport',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faxdetect'); ?>
		<?php echo $form->textField($model,'faxdetect',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buggymwi'); ?>
		<?php echo $form->textField($model,'buggymwi',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auth'); ?>
		<?php echo $form->textField($model,'auth',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trunkname'); ?>
		<?php echo $form->textField($model,'trunkname',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cid_number'); ?>
		<?php echo $form->textField($model,'cid_number',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'callingpres'); ?>
		<?php echo $form->textField($model,'callingpres',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mohinterpret'); ?>
		<?php echo $form->textField($model,'mohinterpret',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mohsuggest'); ?>
		<?php echo $form->textField($model,'mohsuggest',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parkinglot'); ?>
		<?php echo $form->textField($model,'parkinglot',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasvoicemail'); ?>
		<?php echo $form->textField($model,'hasvoicemail',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vmexten'); ?>
		<?php echo $form->textField($model,'vmexten',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autoframing'); ?>
		<?php echo $form->textField($model,'autoframing',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rtpkeepalive'); ?>
		<?php echo $form->textField($model,'rtpkeepalive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_limit1'); ?>
		<?php echo $form->textField($model,'call_limit1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g726nonstandard'); ?>
		<?php echo $form->textField($model,'g726nonstandard',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ignoresdpversion'); ?>
		<?php echo $form->textField($model,'ignoresdpversion',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allowtransfer'); ?>
		<?php echo $form->textField($model,'allowtransfer',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dynamic'); ?>
		<?php echo $form->textField($model,'dynamic',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
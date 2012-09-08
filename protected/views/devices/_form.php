<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'devices-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'host'); ?>
		<?php echo $form->textField($model,'host',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'host'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secret'); ?>
		<?php echo $form->textField($model,'secret',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'secret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'context'); ?>
		<?php echo $form->textField($model,'context',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'context'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipaddr'); ?>
		<?php echo $form->textField($model,'ipaddr',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ipaddr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'port'); ?>
		<?php echo $form->textField($model,'port'); ?>
		<?php echo $form->error($model,'port'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regseconds'); ?>
		<?php echo $form->textField($model,'regseconds'); ?>
		<?php echo $form->error($model,'regseconds'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountcode'); ?>
		<?php echo $form->textField($model,'accountcode'); ?>
		<?php echo $form->error($model,'accountcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callerid'); ?>
		<?php echo $form->textField($model,'callerid',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'callerid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'voicemail_active'); ?>
		<?php echo $form->textField($model,'voicemail_active'); ?>
		<?php echo $form->error($model,'voicemail_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'device_type'); ?>
		<?php echo $form->textField($model,'device_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'device_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primary_did_id'); ?>
		<?php echo $form->textField($model,'primary_did_id'); ?>
		<?php echo $form->error($model,'primary_did_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'works_not_logged'); ?>
		<?php echo $form->textField($model,'works_not_logged'); ?>
		<?php echo $form->error($model,'works_not_logged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forward_to'); ?>
		<?php echo $form->textField($model,'forward_to'); ?>
		<?php echo $form->error($model,'forward_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record'); ?>
		<?php echo $form->textField($model,'record'); ?>
		<?php echo $form->error($model,'record'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transfer'); ?>
		<?php echo $form->textField($model,'transfer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disallow'); ?>
		<?php echo $form->textField($model,'disallow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'disallow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow'); ?>
		<?php echo $form->textField($model,'allow',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'allow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deny'); ?>
		<?php echo $form->textField($model,'deny',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'deny'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permit'); ?>
		<?php echo $form->textField($model,'permit',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'permit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nat'); ?>
		<?php echo $form->textField($model,'nat',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'nat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualify'); ?>
		<?php echo $form->textField($model,'qualify',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'qualify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullcontact'); ?>
		<?php echo $form->textField($model,'fullcontact',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'fullcontact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'canreinvite'); ?>
		<?php echo $form->textField($model,'canreinvite',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'canreinvite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'devicegroup_id'); ?>
		<?php echo $form->textField($model,'devicegroup_id'); ?>
		<?php echo $form->error($model,'devicegroup_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dtmfmode'); ?>
		<?php echo $form->textField($model,'dtmfmode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dtmfmode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callgroup'); ?>
		<?php echo $form->textField($model,'callgroup'); ?>
		<?php echo $form->error($model,'callgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pickupgroup'); ?>
		<?php echo $form->textField($model,'pickupgroup'); ?>
		<?php echo $form->error($model,'pickupgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromuser'); ?>
		<?php echo $form->textField($model,'fromuser',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fromuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fromdomain'); ?>
		<?php echo $form->textField($model,'fromdomain',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fromdomain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trustrpid'); ?>
		<?php echo $form->textField($model,'trustrpid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'trustrpid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sendrpid'); ?>
		<?php echo $form->textField($model,'sendrpid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sendrpid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insecure'); ?>
		<?php echo $form->textField($model,'insecure',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'insecure'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'progressinband'); ?>
		<?php echo $form->textField($model,'progressinband',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'progressinband'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'videosupport'); ?>
		<?php echo $form->textField($model,'videosupport',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'videosupport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->textField($model,'location_id'); ?>
		<?php echo $form->error($model,'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'istrunk'); ?>
		<?php echo $form->textField($model,'istrunk'); ?>
		<?php echo $form->error($model,'istrunk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cid_from_dids'); ?>
		<?php echo $form->textField($model,'cid_from_dids'); ?>
		<?php echo $form->error($model,'cid_from_dids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pin'); ?>
		<?php echo $form->textField($model,'pin',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tell_balance'); ?>
		<?php echo $form->textField($model,'tell_balance'); ?>
		<?php echo $form->error($model,'tell_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tell_time'); ?>
		<?php echo $form->textField($model,'tell_time'); ?>
		<?php echo $form->error($model,'tell_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tell_rtime_when_left'); ?>
		<?php echo $form->textField($model,'tell_rtime_when_left'); ?>
		<?php echo $form->error($model,'tell_rtime_when_left'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repeat_rtime_every'); ?>
		<?php echo $form->textField($model,'repeat_rtime_every'); ?>
		<?php echo $form->error($model,'repeat_rtime_every'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t38pt_udptl'); ?>
		<?php echo $form->textField($model,'t38pt_udptl',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t38pt_udptl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regserver'); ?>
		<?php echo $form->textField($model,'regserver',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'regserver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ani'); ?>
		<?php echo $form->textField($model,'ani'); ?>
		<?php echo $form->error($model,'ani'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promiscredir'); ?>
		<?php echo $form->textField($model,'promiscredir',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'promiscredir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeout'); ?>
		<?php echo $form->textField($model,'timeout'); ?>
		<?php echo $form->error($model,'timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'process_sipchaninfo'); ?>
		<?php echo $form->textField($model,'process_sipchaninfo'); ?>
		<?php echo $form->error($model,'process_sipchaninfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temporary_id'); ?>
		<?php echo $form->textField($model,'temporary_id'); ?>
		<?php echo $form->error($model,'temporary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_duplicate_calls'); ?>
		<?php echo $form->textField($model,'allow_duplicate_calls'); ?>
		<?php echo $form->error($model,'allow_duplicate_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'call_limit'); ?>
		<?php echo $form->textField($model,'call_limit'); ?>
		<?php echo $form->error($model,'call_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastms'); ?>
		<?php echo $form->textField($model,'lastms'); ?>
		<?php echo $form->error($model,'lastms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faststart'); ?>
		<?php echo $form->textField($model,'faststart',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'faststart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h245tunneling'); ?>
		<?php echo $form->textField($model,'h245tunneling',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'h245tunneling'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latency'); ?>
		<?php echo $form->textField($model,'latency'); ?>
		<?php echo $form->error($model,'latency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grace_time'); ?>
		<?php echo $form->textField($model,'grace_time'); ?>
		<?php echo $form->error($model,'grace_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_to_email'); ?>
		<?php echo $form->textField($model,'recording_to_email'); ?>
		<?php echo $form->error($model,'recording_to_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_keep'); ?>
		<?php echo $form->textField($model,'recording_keep'); ?>
		<?php echo $form->error($model,'recording_keep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_email'); ?>
		<?php echo $form->textField($model,'recording_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'recording_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'record_forced'); ?>
		<?php echo $form->textField($model,'record_forced'); ?>
		<?php echo $form->error($model,'record_forced'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fake_ring'); ?>
		<?php echo $form->textField($model,'fake_ring'); ?>
		<?php echo $form->error($model,'fake_ring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'save_call_log'); ?>
		<?php echo $form->textField($model,'save_call_log'); ?>
		<?php echo $form->error($model,'save_call_log'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailbox'); ?>
		<?php echo $form->textField($model,'mailbox',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mailbox'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'server_id'); ?>
		<?php echo $form->textField($model,'server_id'); ?>
		<?php echo $form->error($model,'server_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enable_mwi'); ?>
		<?php echo $form->textField($model,'enable_mwi'); ?>
		<?php echo $form->error($model,'enable_mwi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'authuser'); ?>
		<?php echo $form->textField($model,'authuser',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'authuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requirecalltoken'); ?>
		<?php echo $form->textField($model,'requirecalltoken',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'requirecalltoken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'use_ani_for_cli'); ?>
		<?php echo $form->textField($model,'use_ani_for_cli'); ?>
		<?php echo $form->error($model,'use_ani_for_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calleridpres'); ?>
		<?php echo $form->textField($model,'calleridpres',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'calleridpres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'change_failed_code_to'); ?>
		<?php echo $form->textField($model,'change_failed_code_to'); ?>
		<?php echo $form->error($model,'change_failed_code_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_status'); ?>
		<?php echo $form->textField($model,'reg_status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'reg_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_timeout'); ?>
		<?php echo $form->textField($model,'max_timeout'); ?>
		<?php echo $form->error($model,'max_timeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forward_did_id'); ?>
		<?php echo $form->textField($model,'forward_did_id'); ?>
		<?php echo $form->error($model,'forward_did_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anti_resale_auto_answer'); ?>
		<?php echo $form->textField($model,'anti_resale_auto_answer'); ?>
		<?php echo $form->error($model,'anti_resale_auto_answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qf_tell_balance'); ?>
		<?php echo $form->textField($model,'qf_tell_balance'); ?>
		<?php echo $form->error($model,'qf_tell_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qf_tell_time'); ?>
		<?php echo $form->textField($model,'qf_tell_time'); ?>
		<?php echo $form->error($model,'qf_tell_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_limit_per_day'); ?>
		<?php echo $form->textField($model,'time_limit_per_day'); ?>
		<?php echo $form->error($model,'time_limit_per_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'control_callerid_by_cids'); ?>
		<?php echo $form->textField($model,'control_callerid_by_cids'); ?>
		<?php echo $form->error($model,'control_callerid_by_cids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callerid_advanced_control'); ?>
		<?php echo $form->textField($model,'callerid_advanced_control'); ?>
		<?php echo $form->error($model,'callerid_advanced_control'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transport'); ?>
		<?php echo $form->textField($model,'transport',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'transport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subscribemwi'); ?>
		<?php echo $form->textField($model,'subscribemwi',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'subscribemwi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'encryption'); ?>
		<?php echo $form->textField($model,'encryption',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'encryption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'block_callerid'); ?>
		<?php echo $form->textField($model,'block_callerid'); ?>
		<?php echo $form->error($model,'block_callerid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultuser'); ?>
		<?php echo $form->textField($model,'defaultuser',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'defaultuser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'useragent'); ?>
		<?php echo $form->textField($model,'useragent',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'useragent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'md5secret'); ?>
		<?php echo $form->textField($model,'md5secret',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'md5secret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remotesecret'); ?>
		<?php echo $form->textField($model,'remotesecret',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'remotesecret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'directmedia'); ?>
		<?php echo $form->textField($model,'directmedia',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'directmedia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'useclientcode'); ?>
		<?php echo $form->textField($model,'useclientcode',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'useclientcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'setvar'); ?>
		<?php echo $form->textField($model,'setvar',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'setvar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amaflags'); ?>
		<?php echo $form->textField($model,'amaflags',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'amaflags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callcounter'); ?>
		<?php echo $form->textField($model,'callcounter',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'callcounter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'busylevel'); ?>
		<?php echo $form->textField($model,'busylevel'); ?>
		<?php echo $form->error($model,'busylevel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allowoverlap'); ?>
		<?php echo $form->textField($model,'allowoverlap',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'allowoverlap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allowsubscribe'); ?>
		<?php echo $form->textField($model,'allowsubscribe',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'allowsubscribe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maxcallbitrate'); ?>
		<?php echo $form->textField($model,'maxcallbitrate'); ?>
		<?php echo $form->error($model,'maxcallbitrate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc2833compensate'); ?>
		<?php echo $form->textField($model,'rfc2833compensate',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'rfc2833compensate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_timers'); ?>
		<?php echo $form->textField($model,'session_timers',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'session_timers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_expires'); ?>
		<?php echo $form->textField($model,'session_expires'); ?>
		<?php echo $form->error($model,'session_expires'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_minse'); ?>
		<?php echo $form->textField($model,'session_minse'); ?>
		<?php echo $form->error($model,'session_minse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_refresher'); ?>
		<?php echo $form->textField($model,'session_refresher',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'session_refresher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t38pt_usertpsource'); ?>
		<?php echo $form->textField($model,'t38pt_usertpsource',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'t38pt_usertpsource'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regexten'); ?>
		<?php echo $form->textField($model,'regexten',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'regexten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultip'); ?>
		<?php echo $form->textField($model,'defaultip',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'defaultip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rtptimeout'); ?>
		<?php echo $form->textField($model,'rtptimeout'); ?>
		<?php echo $form->error($model,'rtptimeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rtpholdtimeout'); ?>
		<?php echo $form->textField($model,'rtpholdtimeout'); ?>
		<?php echo $form->error($model,'rtpholdtimeout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outboundproxy'); ?>
		<?php echo $form->textField($model,'outboundproxy',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'outboundproxy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callbackextension'); ?>
		<?php echo $form->textField($model,'callbackextension',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'callbackextension'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timert1'); ?>
		<?php echo $form->textField($model,'timert1'); ?>
		<?php echo $form->error($model,'timert1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timerb'); ?>
		<?php echo $form->textField($model,'timerb'); ?>
		<?php echo $form->error($model,'timerb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualifyfreq'); ?>
		<?php echo $form->textField($model,'qualifyfreq'); ?>
		<?php echo $form->error($model,'qualifyfreq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'constantssrc'); ?>
		<?php echo $form->textField($model,'constantssrc',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'constantssrc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactpermit'); ?>
		<?php echo $form->textField($model,'contactpermit',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'contactpermit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactdeny'); ?>
		<?php echo $form->textField($model,'contactdeny',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'contactdeny'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usereqphone'); ?>
		<?php echo $form->textField($model,'usereqphone',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'usereqphone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'textsupport'); ?>
		<?php echo $form->textField($model,'textsupport',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'textsupport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faxdetect'); ?>
		<?php echo $form->textField($model,'faxdetect',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'faxdetect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buggymwi'); ?>
		<?php echo $form->textField($model,'buggymwi',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'buggymwi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auth'); ?>
		<?php echo $form->textField($model,'auth',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'auth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trunkname'); ?>
		<?php echo $form->textField($model,'trunkname',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'trunkname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cid_number'); ?>
		<?php echo $form->textField($model,'cid_number',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'cid_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'callingpres'); ?>
		<?php echo $form->textField($model,'callingpres',array('size'=>21,'maxlength'=>21)); ?>
		<?php echo $form->error($model,'callingpres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mohinterpret'); ?>
		<?php echo $form->textField($model,'mohinterpret',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'mohinterpret'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mohsuggest'); ?>
		<?php echo $form->textField($model,'mohsuggest',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'mohsuggest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parkinglot'); ?>
		<?php echo $form->textField($model,'parkinglot',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'parkinglot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasvoicemail'); ?>
		<?php echo $form->textField($model,'hasvoicemail',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'hasvoicemail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vmexten'); ?>
		<?php echo $form->textField($model,'vmexten',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'vmexten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autoframing'); ?>
		<?php echo $form->textField($model,'autoframing',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'autoframing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rtpkeepalive'); ?>
		<?php echo $form->textField($model,'rtpkeepalive'); ?>
		<?php echo $form->error($model,'rtpkeepalive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'call_limit1'); ?>
		<?php echo $form->textField($model,'call_limit1'); ?>
		<?php echo $form->error($model,'call_limit1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g726nonstandard'); ?>
		<?php echo $form->textField($model,'g726nonstandard',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'g726nonstandard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ignoresdpversion'); ?>
		<?php echo $form->textField($model,'ignoresdpversion',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ignoresdpversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allowtransfer'); ?>
		<?php echo $form->textField($model,'allowtransfer',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'allowtransfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dynamic'); ?>
		<?php echo $form->textField($model,'dynamic',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'dynamic'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
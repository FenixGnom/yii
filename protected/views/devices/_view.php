<?php
/* @var $this DevicesController */
/* @var $data Devices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('host')); ?>:</b>
	<?php echo CHtml::encode($data->host); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secret')); ?>:</b>
	<?php echo CHtml::encode($data->secret); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('context')); ?>:</b>
	<?php echo CHtml::encode($data->context); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipaddr')); ?>:</b>
	<?php echo CHtml::encode($data->ipaddr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('port')); ?>:</b>
	<?php echo CHtml::encode($data->port); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('regseconds')); ?>:</b>
	<?php echo CHtml::encode($data->regseconds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountcode')); ?>:</b>
	<?php echo CHtml::encode($data->accountcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callerid')); ?>:</b>
	<?php echo CHtml::encode($data->callerid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extension')); ?>:</b>
	<?php echo CHtml::encode($data->extension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voicemail_active')); ?>:</b>
	<?php echo CHtml::encode($data->voicemail_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('device_type')); ?>:</b>
	<?php echo CHtml::encode($data->device_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primary_did_id')); ?>:</b>
	<?php echo CHtml::encode($data->primary_did_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('works_not_logged')); ?>:</b>
	<?php echo CHtml::encode($data->works_not_logged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forward_to')); ?>:</b>
	<?php echo CHtml::encode($data->forward_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record')); ?>:</b>
	<?php echo CHtml::encode($data->record); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transfer')); ?>:</b>
	<?php echo CHtml::encode($data->transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disallow')); ?>:</b>
	<?php echo CHtml::encode($data->disallow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allow')); ?>:</b>
	<?php echo CHtml::encode($data->allow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deny')); ?>:</b>
	<?php echo CHtml::encode($data->deny); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permit')); ?>:</b>
	<?php echo CHtml::encode($data->permit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nat')); ?>:</b>
	<?php echo CHtml::encode($data->nat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualify')); ?>:</b>
	<?php echo CHtml::encode($data->qualify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullcontact')); ?>:</b>
	<?php echo CHtml::encode($data->fullcontact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('canreinvite')); ?>:</b>
	<?php echo CHtml::encode($data->canreinvite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('devicegroup_id')); ?>:</b>
	<?php echo CHtml::encode($data->devicegroup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtmfmode')); ?>:</b>
	<?php echo CHtml::encode($data->dtmfmode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callgroup')); ?>:</b>
	<?php echo CHtml::encode($data->callgroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pickupgroup')); ?>:</b>
	<?php echo CHtml::encode($data->pickupgroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromuser')); ?>:</b>
	<?php echo CHtml::encode($data->fromuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromdomain')); ?>:</b>
	<?php echo CHtml::encode($data->fromdomain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trustrpid')); ?>:</b>
	<?php echo CHtml::encode($data->trustrpid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sendrpid')); ?>:</b>
	<?php echo CHtml::encode($data->sendrpid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insecure')); ?>:</b>
	<?php echo CHtml::encode($data->insecure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('progressinband')); ?>:</b>
	<?php echo CHtml::encode($data->progressinband); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('videosupport')); ?>:</b>
	<?php echo CHtml::encode($data->videosupport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</b>
	<?php echo CHtml::encode($data->location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('istrunk')); ?>:</b>
	<?php echo CHtml::encode($data->istrunk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid_from_dids')); ?>:</b>
	<?php echo CHtml::encode($data->cid_from_dids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pin')); ?>:</b>
	<?php echo CHtml::encode($data->pin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tell_balance')); ?>:</b>
	<?php echo CHtml::encode($data->tell_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tell_time')); ?>:</b>
	<?php echo CHtml::encode($data->tell_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tell_rtime_when_left')); ?>:</b>
	<?php echo CHtml::encode($data->tell_rtime_when_left); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repeat_rtime_every')); ?>:</b>
	<?php echo CHtml::encode($data->repeat_rtime_every); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t38pt_udptl')); ?>:</b>
	<?php echo CHtml::encode($data->t38pt_udptl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regserver')); ?>:</b>
	<?php echo CHtml::encode($data->regserver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ani')); ?>:</b>
	<?php echo CHtml::encode($data->ani); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promiscredir')); ?>:</b>
	<?php echo CHtml::encode($data->promiscredir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeout')); ?>:</b>
	<?php echo CHtml::encode($data->timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('process_sipchaninfo')); ?>:</b>
	<?php echo CHtml::encode($data->process_sipchaninfo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temporary_id')); ?>:</b>
	<?php echo CHtml::encode($data->temporary_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allow_duplicate_calls')); ?>:</b>
	<?php echo CHtml::encode($data->allow_duplicate_calls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_limit')); ?>:</b>
	<?php echo CHtml::encode($data->call_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastms')); ?>:</b>
	<?php echo CHtml::encode($data->lastms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faststart')); ?>:</b>
	<?php echo CHtml::encode($data->faststart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h245tunneling')); ?>:</b>
	<?php echo CHtml::encode($data->h245tunneling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latency')); ?>:</b>
	<?php echo CHtml::encode($data->latency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grace_time')); ?>:</b>
	<?php echo CHtml::encode($data->grace_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_to_email')); ?>:</b>
	<?php echo CHtml::encode($data->recording_to_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_keep')); ?>:</b>
	<?php echo CHtml::encode($data->recording_keep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_email')); ?>:</b>
	<?php echo CHtml::encode($data->recording_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_forced')); ?>:</b>
	<?php echo CHtml::encode($data->record_forced); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fake_ring')); ?>:</b>
	<?php echo CHtml::encode($data->fake_ring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('save_call_log')); ?>:</b>
	<?php echo CHtml::encode($data->save_call_log); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailbox')); ?>:</b>
	<?php echo CHtml::encode($data->mailbox); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('server_id')); ?>:</b>
	<?php echo CHtml::encode($data->server_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enable_mwi')); ?>:</b>
	<?php echo CHtml::encode($data->enable_mwi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authuser')); ?>:</b>
	<?php echo CHtml::encode($data->authuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requirecalltoken')); ?>:</b>
	<?php echo CHtml::encode($data->requirecalltoken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('use_ani_for_cli')); ?>:</b>
	<?php echo CHtml::encode($data->use_ani_for_cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calleridpres')); ?>:</b>
	<?php echo CHtml::encode($data->calleridpres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_failed_code_to')); ?>:</b>
	<?php echo CHtml::encode($data->change_failed_code_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_status')); ?>:</b>
	<?php echo CHtml::encode($data->reg_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_timeout')); ?>:</b>
	<?php echo CHtml::encode($data->max_timeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forward_did_id')); ?>:</b>
	<?php echo CHtml::encode($data->forward_did_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anti_resale_auto_answer')); ?>:</b>
	<?php echo CHtml::encode($data->anti_resale_auto_answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qf_tell_balance')); ?>:</b>
	<?php echo CHtml::encode($data->qf_tell_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qf_tell_time')); ?>:</b>
	<?php echo CHtml::encode($data->qf_tell_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_limit_per_day')); ?>:</b>
	<?php echo CHtml::encode($data->time_limit_per_day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('control_callerid_by_cids')); ?>:</b>
	<?php echo CHtml::encode($data->control_callerid_by_cids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callerid_advanced_control')); ?>:</b>
	<?php echo CHtml::encode($data->callerid_advanced_control); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transport')); ?>:</b>
	<?php echo CHtml::encode($data->transport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subscribemwi')); ?>:</b>
	<?php echo CHtml::encode($data->subscribemwi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encryption')); ?>:</b>
	<?php echo CHtml::encode($data->encryption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block_callerid')); ?>:</b>
	<?php echo CHtml::encode($data->block_callerid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('defaultuser')); ?>:</b>
	<?php echo CHtml::encode($data->defaultuser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('useragent')); ?>:</b>
	<?php echo CHtml::encode($data->useragent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('md5secret')); ?>:</b>
	<?php echo CHtml::encode($data->md5secret); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remotesecret')); ?>:</b>
	<?php echo CHtml::encode($data->remotesecret); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('directmedia')); ?>:</b>
	<?php echo CHtml::encode($data->directmedia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('useclientcode')); ?>:</b>
	<?php echo CHtml::encode($data->useclientcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('setvar')); ?>:</b>
	<?php echo CHtml::encode($data->setvar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amaflags')); ?>:</b>
	<?php echo CHtml::encode($data->amaflags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callcounter')); ?>:</b>
	<?php echo CHtml::encode($data->callcounter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busylevel')); ?>:</b>
	<?php echo CHtml::encode($data->busylevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowoverlap')); ?>:</b>
	<?php echo CHtml::encode($data->allowoverlap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowsubscribe')); ?>:</b>
	<?php echo CHtml::encode($data->allowsubscribe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxcallbitrate')); ?>:</b>
	<?php echo CHtml::encode($data->maxcallbitrate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rfc2833compensate')); ?>:</b>
	<?php echo CHtml::encode($data->rfc2833compensate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_timers')); ?>:</b>
	<?php echo CHtml::encode($data->session_timers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_expires')); ?>:</b>
	<?php echo CHtml::encode($data->session_expires); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_minse')); ?>:</b>
	<?php echo CHtml::encode($data->session_minse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_refresher')); ?>:</b>
	<?php echo CHtml::encode($data->session_refresher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t38pt_usertpsource')); ?>:</b>
	<?php echo CHtml::encode($data->t38pt_usertpsource); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regexten')); ?>:</b>
	<?php echo CHtml::encode($data->regexten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('defaultip')); ?>:</b>
	<?php echo CHtml::encode($data->defaultip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rtptimeout')); ?>:</b>
	<?php echo CHtml::encode($data->rtptimeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rtpholdtimeout')); ?>:</b>
	<?php echo CHtml::encode($data->rtpholdtimeout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outboundproxy')); ?>:</b>
	<?php echo CHtml::encode($data->outboundproxy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callbackextension')); ?>:</b>
	<?php echo CHtml::encode($data->callbackextension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timert1')); ?>:</b>
	<?php echo CHtml::encode($data->timert1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timerb')); ?>:</b>
	<?php echo CHtml::encode($data->timerb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifyfreq')); ?>:</b>
	<?php echo CHtml::encode($data->qualifyfreq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('constantssrc')); ?>:</b>
	<?php echo CHtml::encode($data->constantssrc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactpermit')); ?>:</b>
	<?php echo CHtml::encode($data->contactpermit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactdeny')); ?>:</b>
	<?php echo CHtml::encode($data->contactdeny); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usereqphone')); ?>:</b>
	<?php echo CHtml::encode($data->usereqphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('textsupport')); ?>:</b>
	<?php echo CHtml::encode($data->textsupport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faxdetect')); ?>:</b>
	<?php echo CHtml::encode($data->faxdetect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buggymwi')); ?>:</b>
	<?php echo CHtml::encode($data->buggymwi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auth')); ?>:</b>
	<?php echo CHtml::encode($data->auth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trunkname')); ?>:</b>
	<?php echo CHtml::encode($data->trunkname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid_number')); ?>:</b>
	<?php echo CHtml::encode($data->cid_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('callingpres')); ?>:</b>
	<?php echo CHtml::encode($data->callingpres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mohinterpret')); ?>:</b>
	<?php echo CHtml::encode($data->mohinterpret); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mohsuggest')); ?>:</b>
	<?php echo CHtml::encode($data->mohsuggest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parkinglot')); ?>:</b>
	<?php echo CHtml::encode($data->parkinglot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasvoicemail')); ?>:</b>
	<?php echo CHtml::encode($data->hasvoicemail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vmexten')); ?>:</b>
	<?php echo CHtml::encode($data->vmexten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autoframing')); ?>:</b>
	<?php echo CHtml::encode($data->autoframing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rtpkeepalive')); ?>:</b>
	<?php echo CHtml::encode($data->rtpkeepalive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_limit1')); ?>:</b>
	<?php echo CHtml::encode($data->call_limit1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('g726nonstandard')); ?>:</b>
	<?php echo CHtml::encode($data->g726nonstandard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ignoresdpversion')); ?>:</b>
	<?php echo CHtml::encode($data->ignoresdpversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowtransfer')); ?>:</b>
	<?php echo CHtml::encode($data->allowtransfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dynamic')); ?>:</b>
	<?php echo CHtml::encode($data->dynamic); ?>
	<br />

	*/ ?>

</div>
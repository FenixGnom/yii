<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usertype')); ?>:</b>
	<?php echo CHtml::encode($data->usertype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logged')); ?>:</b>
	<?php echo CHtml::encode($data->logged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('calltime_normative')); ?>:</b>
	<?php echo CHtml::encode($data->calltime_normative); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_in_realtime_stats')); ?>:</b>
	<?php echo CHtml::encode($data->show_in_realtime_stats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balance')); ?>:</b>
	<?php echo CHtml::encode($data->balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frozen_balance')); ?>:</b>
	<?php echo CHtml::encode($data->frozen_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lcr_id')); ?>:</b>
	<?php echo CHtml::encode($data->lcr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postpaid')); ?>:</b>
	<?php echo CHtml::encode($data->postpaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blocked')); ?>:</b>
	<?php echo CHtml::encode($data->blocked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tariff_id')); ?>:</b>
	<?php echo CHtml::encode($data->tariff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month_plan_perc')); ?>:</b>
	<?php echo CHtml::encode($data->month_plan_perc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month_plan_updated')); ?>:</b>
	<?php echo CHtml::encode($data->month_plan_updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_this_month')); ?>:</b>
	<?php echo CHtml::encode($data->sales_this_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_this_month_planned')); ?>:</b>
	<?php echo CHtml::encode($data->sales_this_month_planned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_billing_info')); ?>:</b>
	<?php echo CHtml::encode($data->show_billing_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primary_device_id')); ?>:</b>
	<?php echo CHtml::encode($data->primary_device_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit')); ?>:</b>
	<?php echo CHtml::encode($data->credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientid')); ?>:</b>
	<?php echo CHtml::encode($data->clientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agreement_number')); ?>:</b>
	<?php echo CHtml::encode($data->agreement_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agreement_date')); ?>:</b>
	<?php echo CHtml::encode($data->agreement_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxation_country')); ?>:</b>
	<?php echo CHtml::encode($data->taxation_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat_number')); ?>:</b>
	<?php echo CHtml::encode($data->vat_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat_percent')); ?>:</b>
	<?php echo CHtml::encode($data->vat_percent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_id')); ?>:</b>
	<?php echo CHtml::encode($data->address_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accounting_number')); ?>:</b>
	<?php echo CHtml::encode($data->accounting_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_id')); ?>:</b>
	<?php echo CHtml::encode($data->owner_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hidden')); ?>:</b>
	<?php echo CHtml::encode($data->hidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allow_loss_calls')); ?>:</b>
	<?php echo CHtml::encode($data->allow_loss_calls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vouchers_disabled_till')); ?>:</b>
	<?php echo CHtml::encode($data->vouchers_disabled_till); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniquehash')); ?>:</b>
	<?php echo CHtml::encode($data->uniquehash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c2c_service_active')); ?>:</b>
	<?php echo CHtml::encode($data->c2c_service_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temporary_id')); ?>:</b>
	<?php echo CHtml::encode($data->temporary_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_invoice_types')); ?>:</b>
	<?php echo CHtml::encode($data->send_invoice_types); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_limit')); ?>:</b>
	<?php echo CHtml::encode($data->call_limit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c2c_call_price')); ?>:</b>
	<?php echo CHtml::encode($data->c2c_call_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_tariff_id')); ?>:</b>
	<?php echo CHtml::encode($data->sms_tariff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_lcr_id')); ?>:</b>
	<?php echo CHtml::encode($data->sms_lcr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms_service_active')); ?>:</b>
	<?php echo CHtml::encode($data->sms_service_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cyberplat_active')); ?>:</b>
	<?php echo CHtml::encode($data->cyberplat_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_center_agent')); ?>:</b>
	<?php echo CHtml::encode($data->call_center_agent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('generate_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->generate_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_1')); ?>:</b>
	<?php echo CHtml::encode($data->tax_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_2')); ?>:</b>
	<?php echo CHtml::encode($data->tax_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_3')); ?>:</b>
	<?php echo CHtml::encode($data->tax_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_4')); ?>:</b>
	<?php echo CHtml::encode($data->tax_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block_at')); ?>:</b>
	<?php echo CHtml::encode($data->block_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block_at_conditional')); ?>:</b>
	<?php echo CHtml::encode($data->block_at_conditional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('block_conditional_use')); ?>:</b>
	<?php echo CHtml::encode($data->block_conditional_use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_enabled')); ?>:</b>
	<?php echo CHtml::encode($data->recording_enabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_forced_enabled')); ?>:</b>
	<?php echo CHtml::encode($data->recording_forced_enabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recordings_email')); ?>:</b>
	<?php echo CHtml::encode($data->recordings_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recording_hdd_quota')); ?>:</b>
	<?php echo CHtml::encode($data->recording_hdd_quota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_email_active')); ?>:</b>
	<?php echo CHtml::encode($data->warning_email_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_email_balance')); ?>:</b>
	<?php echo CHtml::encode($data->warning_email_balance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_email_sent')); ?>:</b>
	<?php echo CHtml::encode($data->warning_email_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_id')); ?>:</b>
	<?php echo CHtml::encode($data->tax_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_zero_calls')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_zero_calls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acc_group_id')); ?>:</b>
	<?php echo CHtml::encode($data->acc_group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hide_destination_end')); ?>:</b>
	<?php echo CHtml::encode($data->hide_destination_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_email_hour')); ?>:</b>
	<?php echo CHtml::encode($data->warning_email_hour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_balance_call')); ?>:</b>
	<?php echo CHtml::encode($data->warning_balance_call); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warning_balance_sound_file_id')); ?>:</b>
	<?php echo CHtml::encode($data->warning_balance_sound_file_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('own_providers')); ?>:</b>
	<?php echo CHtml::encode($data->own_providers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ignore_global_monitorings')); ?>:</b>
	<?php echo CHtml::encode($data->ignore_global_monitorings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::encode($data->currency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quickforwards_rule_id')); ?>:</b>
	<?php echo CHtml::encode($data->quickforwards_rule_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spy_device_id')); ?>:</b>
	<?php echo CHtml::encode($data->spy_device_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_zone')); ?>:</b>
	<?php echo CHtml::encode($data->time_zone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimal_charge')); ?>:</b>
	<?php echo CHtml::encode($data->minimal_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimal_charge_start_at')); ?>:</b>
	<?php echo CHtml::encode($data->minimal_charge_start_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webphone_allow_use')); ?>:</b>
	<?php echo CHtml::encode($data->webphone_allow_use); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webphone_device_id')); ?>:</b>
	<?php echo CHtml::encode($data->webphone_device_id); ?>
	<br />

	*/ ?>

</div>
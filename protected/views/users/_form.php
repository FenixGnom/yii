<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usertype'); ?>
		<?php echo $form->textField($model,'usertype',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usertype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logged'); ?>
		<?php echo $form->textField($model,'logged'); ?>
		<?php echo $form->error($model,'logged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calltime_normative'); ?>
		<?php echo $form->textField($model,'calltime_normative'); ?>
		<?php echo $form->error($model,'calltime_normative'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_in_realtime_stats'); ?>
		<?php echo $form->textField($model,'show_in_realtime_stats'); ?>
		<?php echo $form->error($model,'show_in_realtime_stats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balance'); ?>
		<?php echo $form->textField($model,'balance'); ?>
		<?php echo $form->error($model,'balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frozen_balance'); ?>
		<?php echo $form->textField($model,'frozen_balance'); ?>
		<?php echo $form->error($model,'frozen_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lcr_id'); ?>
		<?php echo $form->textField($model,'lcr_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lcr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postpaid'); ?>
		<?php echo $form->textField($model,'postpaid'); ?>
		<?php echo $form->error($model,'postpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blocked'); ?>
		<?php echo $form->textField($model,'blocked'); ?>
		<?php echo $form->error($model,'blocked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tariff_id'); ?>
		<?php echo $form->textField($model,'tariff_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tariff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month_plan_perc'); ?>
		<?php echo $form->textField($model,'month_plan_perc'); ?>
		<?php echo $form->error($model,'month_plan_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month_plan_updated'); ?>
		<?php echo $form->textField($model,'month_plan_updated'); ?>
		<?php echo $form->error($model,'month_plan_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_this_month'); ?>
		<?php echo $form->textField($model,'sales_this_month'); ?>
		<?php echo $form->error($model,'sales_this_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_this_month_planned'); ?>
		<?php echo $form->textField($model,'sales_this_month_planned'); ?>
		<?php echo $form->error($model,'sales_this_month_planned'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_billing_info'); ?>
		<?php echo $form->textField($model,'show_billing_info'); ?>
		<?php echo $form->error($model,'show_billing_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primary_device_id'); ?>
		<?php echo $form->textField($model,'primary_device_id'); ?>
		<?php echo $form->error($model,'primary_device_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'clientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agreement_number'); ?>
		<?php echo $form->textField($model,'agreement_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'agreement_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agreement_date'); ?>
		<?php echo $form->textField($model,'agreement_date'); ?>
		<?php echo $form->error($model,'agreement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taxation_country'); ?>
		<?php echo $form->textField($model,'taxation_country'); ?>
		<?php echo $form->error($model,'taxation_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat_number'); ?>
		<?php echo $form->textField($model,'vat_number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'vat_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat_percent'); ?>
		<?php echo $form->textField($model,'vat_percent'); ?>
		<?php echo $form->error($model,'vat_percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address_id'); ?>
		<?php echo $form->textField($model,'address_id'); ?>
		<?php echo $form->error($model,'address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accounting_number'); ?>
		<?php echo $form->textField($model,'accounting_number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'accounting_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_id'); ?>
		<?php echo $form->textField($model,'owner_id'); ?>
		<?php echo $form->error($model,'owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hidden'); ?>
		<?php echo $form->textField($model,'hidden'); ?>
		<?php echo $form->error($model,'hidden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_loss_calls'); ?>
		<?php echo $form->textField($model,'allow_loss_calls'); ?>
		<?php echo $form->error($model,'allow_loss_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vouchers_disabled_till'); ?>
		<?php echo $form->textField($model,'vouchers_disabled_till'); ?>
		<?php echo $form->error($model,'vouchers_disabled_till'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uniquehash'); ?>
		<?php echo $form->textField($model,'uniquehash',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'uniquehash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c2c_service_active'); ?>
		<?php echo $form->textField($model,'c2c_service_active'); ?>
		<?php echo $form->error($model,'c2c_service_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temporary_id'); ?>
		<?php echo $form->textField($model,'temporary_id'); ?>
		<?php echo $form->error($model,'temporary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_invoice_types'); ?>
		<?php echo $form->textField($model,'send_invoice_types'); ?>
		<?php echo $form->error($model,'send_invoice_types'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'call_limit'); ?>
		<?php echo $form->textField($model,'call_limit'); ?>
		<?php echo $form->error($model,'call_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c2c_call_price'); ?>
		<?php echo $form->textField($model,'c2c_call_price'); ?>
		<?php echo $form->error($model,'c2c_call_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_tariff_id'); ?>
		<?php echo $form->textField($model,'sms_tariff_id'); ?>
		<?php echo $form->error($model,'sms_tariff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_lcr_id'); ?>
		<?php echo $form->textField($model,'sms_lcr_id'); ?>
		<?php echo $form->error($model,'sms_lcr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms_service_active'); ?>
		<?php echo $form->textField($model,'sms_service_active'); ?>
		<?php echo $form->error($model,'sms_service_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cyberplat_active'); ?>
		<?php echo $form->textField($model,'cyberplat_active'); ?>
		<?php echo $form->error($model,'cyberplat_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'call_center_agent'); ?>
		<?php echo $form->textField($model,'call_center_agent'); ?>
		<?php echo $form->error($model,'call_center_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'generate_invoice'); ?>
		<?php echo $form->textField($model,'generate_invoice'); ?>
		<?php echo $form->error($model,'generate_invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_1'); ?>
		<?php echo $form->textField($model,'tax_1'); ?>
		<?php echo $form->error($model,'tax_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_2'); ?>
		<?php echo $form->textField($model,'tax_2'); ?>
		<?php echo $form->error($model,'tax_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_3'); ?>
		<?php echo $form->textField($model,'tax_3'); ?>
		<?php echo $form->error($model,'tax_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_4'); ?>
		<?php echo $form->textField($model,'tax_4'); ?>
		<?php echo $form->error($model,'tax_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'block_at'); ?>
		<?php echo $form->textField($model,'block_at'); ?>
		<?php echo $form->error($model,'block_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'block_at_conditional'); ?>
		<?php echo $form->textField($model,'block_at_conditional'); ?>
		<?php echo $form->error($model,'block_at_conditional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'block_conditional_use'); ?>
		<?php echo $form->textField($model,'block_conditional_use'); ?>
		<?php echo $form->error($model,'block_conditional_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_enabled'); ?>
		<?php echo $form->textField($model,'recording_enabled'); ?>
		<?php echo $form->error($model,'recording_enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_forced_enabled'); ?>
		<?php echo $form->textField($model,'recording_forced_enabled'); ?>
		<?php echo $form->error($model,'recording_forced_enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recordings_email'); ?>
		<?php echo $form->textField($model,'recordings_email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'recordings_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recording_hdd_quota'); ?>
		<?php echo $form->textField($model,'recording_hdd_quota'); ?>
		<?php echo $form->error($model,'recording_hdd_quota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_email_active'); ?>
		<?php echo $form->textField($model,'warning_email_active'); ?>
		<?php echo $form->error($model,'warning_email_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_email_balance'); ?>
		<?php echo $form->textField($model,'warning_email_balance'); ?>
		<?php echo $form->error($model,'warning_email_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_email_sent'); ?>
		<?php echo $form->textField($model,'warning_email_sent'); ?>
		<?php echo $form->error($model,'warning_email_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tax_id'); ?>
		<?php echo $form->textField($model,'tax_id'); ?>
		<?php echo $form->error($model,'tax_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_zero_calls'); ?>
		<?php echo $form->textField($model,'invoice_zero_calls'); ?>
		<?php echo $form->error($model,'invoice_zero_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acc_group_id'); ?>
		<?php echo $form->textField($model,'acc_group_id'); ?>
		<?php echo $form->error($model,'acc_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hide_destination_end'); ?>
		<?php echo $form->textField($model,'hide_destination_end'); ?>
		<?php echo $form->error($model,'hide_destination_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_email_hour'); ?>
		<?php echo $form->textField($model,'warning_email_hour'); ?>
		<?php echo $form->error($model,'warning_email_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_balance_call'); ?>
		<?php echo $form->textField($model,'warning_balance_call'); ?>
		<?php echo $form->error($model,'warning_balance_call'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warning_balance_sound_file_id'); ?>
		<?php echo $form->textField($model,'warning_balance_sound_file_id'); ?>
		<?php echo $form->error($model,'warning_balance_sound_file_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'own_providers'); ?>
		<?php echo $form->textField($model,'own_providers'); ?>
		<?php echo $form->error($model,'own_providers'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ignore_global_monitorings'); ?>
		<?php echo $form->textField($model,'ignore_global_monitorings'); ?>
		<?php echo $form->error($model,'ignore_global_monitorings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quickforwards_rule_id'); ?>
		<?php echo $form->textField($model,'quickforwards_rule_id'); ?>
		<?php echo $form->error($model,'quickforwards_rule_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spy_device_id'); ?>
		<?php echo $form->textField($model,'spy_device_id'); ?>
		<?php echo $form->error($model,'spy_device_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_zone'); ?>
		<?php echo $form->textField($model,'time_zone'); ?>
		<?php echo $form->error($model,'time_zone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimal_charge'); ?>
		<?php echo $form->textField($model,'minimal_charge'); ?>
		<?php echo $form->error($model,'minimal_charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimal_charge_start_at'); ?>
		<?php echo $form->textField($model,'minimal_charge_start_at'); ?>
		<?php echo $form->error($model,'minimal_charge_start_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webphone_allow_use'); ?>
		<?php echo $form->textField($model,'webphone_allow_use'); ?>
		<?php echo $form->error($model,'webphone_allow_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webphone_device_id'); ?>
		<?php echo $form->textField($model,'webphone_device_id'); ?>
		<?php echo $form->error($model,'webphone_device_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
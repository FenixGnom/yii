<?php
/* @var $this UsersController */
/* @var $model Users */
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
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usertype'); ?>
		<?php echo $form->textField($model,'usertype',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logged'); ?>
		<?php echo $form->textField($model,'logged'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calltime_normative'); ?>
		<?php echo $form->textField($model,'calltime_normative'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'show_in_realtime_stats'); ?>
		<?php echo $form->textField($model,'show_in_realtime_stats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balance'); ?>
		<?php echo $form->textField($model,'balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frozen_balance'); ?>
		<?php echo $form->textField($model,'frozen_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lcr_id'); ?>
		<?php echo $form->textField($model,'lcr_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postpaid'); ?>
		<?php echo $form->textField($model,'postpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blocked'); ?>
		<?php echo $form->textField($model,'blocked'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tariff_id'); ?>
		<?php echo $form->textField($model,'tariff_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month_plan_perc'); ?>
		<?php echo $form->textField($model,'month_plan_perc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month_plan_updated'); ?>
		<?php echo $form->textField($model,'month_plan_updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_this_month'); ?>
		<?php echo $form->textField($model,'sales_this_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sales_this_month_planned'); ?>
		<?php echo $form->textField($model,'sales_this_month_planned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'show_billing_info'); ?>
		<?php echo $form->textField($model,'show_billing_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'primary_device_id'); ?>
		<?php echo $form->textField($model,'primary_device_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agreement_number'); ?>
		<?php echo $form->textField($model,'agreement_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agreement_date'); ?>
		<?php echo $form->textField($model,'agreement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taxation_country'); ?>
		<?php echo $form->textField($model,'taxation_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vat_number'); ?>
		<?php echo $form->textField($model,'vat_number',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vat_percent'); ?>
		<?php echo $form->textField($model,'vat_percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address_id'); ?>
		<?php echo $form->textField($model,'address_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accounting_number'); ?>
		<?php echo $form->textField($model,'accounting_number',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_id'); ?>
		<?php echo $form->textField($model,'owner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hidden'); ?>
		<?php echo $form->textField($model,'hidden'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allow_loss_calls'); ?>
		<?php echo $form->textField($model,'allow_loss_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vouchers_disabled_till'); ?>
		<?php echo $form->textField($model,'vouchers_disabled_till'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uniquehash'); ?>
		<?php echo $form->textField($model,'uniquehash',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c2c_service_active'); ?>
		<?php echo $form->textField($model,'c2c_service_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temporary_id'); ?>
		<?php echo $form->textField($model,'temporary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_invoice_types'); ?>
		<?php echo $form->textField($model,'send_invoice_types'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_limit'); ?>
		<?php echo $form->textField($model,'call_limit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c2c_call_price'); ?>
		<?php echo $form->textField($model,'c2c_call_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sms_tariff_id'); ?>
		<?php echo $form->textField($model,'sms_tariff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sms_lcr_id'); ?>
		<?php echo $form->textField($model,'sms_lcr_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sms_service_active'); ?>
		<?php echo $form->textField($model,'sms_service_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cyberplat_active'); ?>
		<?php echo $form->textField($model,'cyberplat_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'call_center_agent'); ?>
		<?php echo $form->textField($model,'call_center_agent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'generate_invoice'); ?>
		<?php echo $form->textField($model,'generate_invoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_1'); ?>
		<?php echo $form->textField($model,'tax_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_2'); ?>
		<?php echo $form->textField($model,'tax_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_3'); ?>
		<?php echo $form->textField($model,'tax_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_4'); ?>
		<?php echo $form->textField($model,'tax_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block_at'); ?>
		<?php echo $form->textField($model,'block_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block_at_conditional'); ?>
		<?php echo $form->textField($model,'block_at_conditional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'block_conditional_use'); ?>
		<?php echo $form->textField($model,'block_conditional_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_enabled'); ?>
		<?php echo $form->textField($model,'recording_enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_forced_enabled'); ?>
		<?php echo $form->textField($model,'recording_forced_enabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recordings_email'); ?>
		<?php echo $form->textField($model,'recordings_email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recording_hdd_quota'); ?>
		<?php echo $form->textField($model,'recording_hdd_quota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_email_active'); ?>
		<?php echo $form->textField($model,'warning_email_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_email_balance'); ?>
		<?php echo $form->textField($model,'warning_email_balance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_email_sent'); ?>
		<?php echo $form->textField($model,'warning_email_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_id'); ?>
		<?php echo $form->textField($model,'tax_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoice_zero_calls'); ?>
		<?php echo $form->textField($model,'invoice_zero_calls'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acc_group_id'); ?>
		<?php echo $form->textField($model,'acc_group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hide_destination_end'); ?>
		<?php echo $form->textField($model,'hide_destination_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_email_hour'); ?>
		<?php echo $form->textField($model,'warning_email_hour'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_balance_call'); ?>
		<?php echo $form->textField($model,'warning_balance_call'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warning_balance_sound_file_id'); ?>
		<?php echo $form->textField($model,'warning_balance_sound_file_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'own_providers'); ?>
		<?php echo $form->textField($model,'own_providers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ignore_global_monitorings'); ?>
		<?php echo $form->textField($model,'ignore_global_monitorings'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency_id'); ?>
		<?php echo $form->textField($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quickforwards_rule_id'); ?>
		<?php echo $form->textField($model,'quickforwards_rule_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spy_device_id'); ?>
		<?php echo $form->textField($model,'spy_device_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_zone'); ?>
		<?php echo $form->textField($model,'time_zone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimal_charge'); ?>
		<?php echo $form->textField($model,'minimal_charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimal_charge_start_at'); ?>
		<?php echo $form->textField($model,'minimal_charge_start_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webphone_allow_use'); ?>
		<?php echo $form->textField($model,'webphone_allow_use'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webphone_device_id'); ?>
		<?php echo $form->textField($model,'webphone_device_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
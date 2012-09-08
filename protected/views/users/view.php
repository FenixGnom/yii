<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'usertype',
		'logged',
		'first_name',
		'last_name',
		'calltime_normative',
		'show_in_realtime_stats',
		'balance',
		'frozen_balance',
		'lcr_id',
		'postpaid',
		'blocked',
		'tariff_id',
		'month_plan_perc',
		'month_plan_updated',
		'sales_this_month',
		'sales_this_month_planned',
		'show_billing_info',
		'primary_device_id',
		'credit',
		'clientid',
		'agreement_number',
		'agreement_date',
		'language',
		'taxation_country',
		'vat_number',
		'vat_percent',
		'address_id',
		'accounting_number',
		'owner_id',
		'hidden',
		'allow_loss_calls',
		'vouchers_disabled_till',
		'uniquehash',
		'c2c_service_active',
		'temporary_id',
		'send_invoice_types',
		'call_limit',
		'c2c_call_price',
		'sms_tariff_id',
		'sms_lcr_id',
		'sms_service_active',
		'cyberplat_active',
		'call_center_agent',
		'generate_invoice',
		'tax_1',
		'tax_2',
		'tax_3',
		'tax_4',
		'block_at',
		'block_at_conditional',
		'block_conditional_use',
		'recording_enabled',
		'recording_forced_enabled',
		'recordings_email',
		'recording_hdd_quota',
		'warning_email_active',
		'warning_email_balance',
		'warning_email_sent',
		'tax_id',
		'invoice_zero_calls',
		'acc_group_id',
		'hide_destination_end',
		'warning_email_hour',
		'warning_balance_call',
		'warning_balance_sound_file_id',
		'own_providers',
		'ignore_global_monitorings',
		'currency_id',
		'quickforwards_rule_id',
		'spy_device_id',
		'time_zone',
		'minimal_charge',
		'minimal_charge_start_at',
		'webphone_allow_use',
		'webphone_device_id',
	),
)); ?>
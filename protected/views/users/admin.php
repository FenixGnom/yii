<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

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
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'usertype',
		'logged',
		'first_name',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

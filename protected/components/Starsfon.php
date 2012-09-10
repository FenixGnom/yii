<?php

class Starsfon {
    
    protected $error = array();
    
    protected static $instance = null;
    
    private static $access_method = array(
        'getProfile' => array(
            'auth' => TRUE
        ),
        'createUser' => array(
            'auth' => FALSE
        ),
        'userExists' => array(
            'auth' => FALSE
        ),
    );
    
    public $isAuth = null;
    
    public static function instance($method)
    {
        if(is_null(self::$instance))
        {
            self::$instance = new Starsfon($method);
        }
        return self::$instance;
    }

    private function __construct($method) {
        if(array_key_exists($method, self::$access_method))
        {
            $this->isAuth = self::$access_method[$method]['auth'];
        }
    }

    public  function userExists($params = array())
    {
        if(array_key_exists('login', $params))
        {
            $user = Users::model()->findByAttributes(array('username' => $params['login']));
            if($user === null)
            {
                $result = array(
                        'response' => 0
                    );
            }else{
                $result = array(
                        'response' => 1
                    );
            }
        }else{
            $result = array(
                'error' => 'Params not exists'
            );
        }
        
        return json_encode($result);
    }

    public  function createUser($params = array())
    {
        if(empty($params['password']) || empty($params['login']))
        {
            $this->error[] = array(
                'error' => 'No Params'
            );
        }else{
            // Добавляем адрес
            $adress = new Addresses;
            $adress->direction_id = '177';
            if(!$adress->save())
            {
                $this->error['Addresses'][] = $adress->getErrors();
            }
            $adress_id = Yii::app()->db->getLastInsertID();

            // Добвляем такс
            $tax = new Taxes;
            $tax->tax1_name = 'Tax';
            $tax->total_tax_name = 'Tax';
            $tax->compound_tax = '1';
            if(!$tax->save())
            {
                $this->error['Taxes'][] = $tax->getErrors();
            }
            $tax_id = Yii::app()->db->getLastInsertID();

            $user = new Users;
            $user->username = $params['login'];
            $user->password = sha1($params['password']);
            $user->usertype = 'user';
            $user->calltime_normative = (double)3;
            $user->show_in_realtime_stats = 0;
            $user->balance = (double)0;
            $user->frozen_balance = (double)0;
            $user->lcr_id = '3';
            $user->postpaid = 0;
            $user->blocked = 0;
            $user->tariff_id = '6';
            $user->month_plan_perc = (double)0;
            $user->sales_this_month = 0;
            $user->sales_this_month_planned = 0;
            $user->show_billing_info = 1;
            $user->primary_device_id = 0;
            $user->credit = (double)-1;
            $user->agreement_number = '';
            $user->agreement_date = date("Y-m-d");
            $user->taxation_country = 177;
            $user->vat_percent = (double)0;
            $user->address_id = $adress_id;
            $user->owner_id = 0;
            $user->hidden = 0;
            $user->allow_loss_calls = 0;
            $user->vouchers_disabled_till = '2000-01-01 00:00:00';
            $user->c2c_service_active = 0;
            $user->send_invoice_types = 0;
            $user->call_limit = 0;
            $user->sms_service_active = 0;
            $user->cyberplat_active = 0;
            $user->call_center_agent = 0;
            $user->generate_invoice = 1;
            $user->tax_1 = (double)0;
            $user->tax_2 = (double)0;
            $user->tax_3 = (double)0;
            $user->tax_4 = (double)0;
            $user->block_at = '2009-01-01';
            $user->block_at_conditional = 15;
            $user->block_conditional_use = 0;
            $user->recording_enabled = 0;
            $user->recording_forced_enabled = 0;
            $user->recording_hdd_quota = 0;
            $user->warning_email_active = 0;
            $user->warning_email_balance = (double)0;
            $user->warning_email_sent = 0;
            $user->tax_id = $tax_id;
            $user->invoice_zero_calls = 1;
            $user->acc_group_id = 0;
            $user->hide_destination_end = 7;
            $user->warning_email_hour = '-1';
            $user->warning_balance_call = 0;
            $user->warning_balance_sound_file_id = 0;
            $user->own_providers = 0;
            $user->ignore_global_monitorings = 0;
            $user->currency_id = 1;
            $user->quickforwards_rule_id = 0;
            if(!$user->save())
            {
                $this->error['Users'][] = $user->getErrors();
            }
            $user_id = Yii::app()->db->getLastInsertID();
            
            $dg = new Devicegroups;
            $dg->user_id = $user_id;
            $dg->address_id = $adress_id;
            $dg->name = 'primary';
            $dg->added = date("Y-m-d H:i:s");
            $dg->primary = 1;
            if(!$dg->save())
            {
                $this->error['DeviceGroups'][] = $dg->getErrors();
            }
            $dg_id = Yii::app()->db->getLastInsertID();
            
            $query_devi = "SELECT 
                    IF(MAX(`name`) < 1000 OR MAX(`name`) = 0 ,1000,MAX(`name`) + 1) as `name_max`, 
                    MAX(`accountcode`) + 1 as `accountcode_max` 
                FROM `devices` WHERE `context` = 'mor_local';";

            $max = Yii::app()->db->createCommand($query_devi)->execute();

            $dv = new Devices;
            $dv->name = $max->name_max;
            $dv->host = 'dynamic';
            $dv->secret = $params['password'];
            $dv->context = 'mor_local';
            $dv->port = '5060';
            $dv->accountcode = $max->accountcode_max;
            $dv->regseconds = 0;
            $dv->callerid = '<'. $max->name_max .'>';
            $dv->extension = $max->name_max;
            $dv->voicemail_active = 0;
            $dv->username = $max->name_max;
            $dv->device_type = 'SIP';
            $dv->user_id = $user_id;
            $dv->works_not_logged = 1;
            $dv->forward_to = 0;
            $dv->record = 0;
            $dv->transfer = 'no';
            $dv->disallow = 'all';
            $dv->allow = 'alaw;ulaw;g729';
            $dv->deny = '0.0.0.0/0.0.0.0';
            $dv->permit = '0.0.0.0/0.0.0.0';
            $dv->nat = 'yes';
            $dv->qualify = 1000;
            $dv->canreinvite = 'no';
            $dv->devicegroup_id = $dg_id;
            $dv->dtmfmode = 'rfc2833';
            $dv->trustrpid = 'no';
            $dv->sendrpid = 'no';
            $dv->progressinband = 'no';
            $dv->videosupport = 'no';
            $dv->location_id = 1;
            $dv->description = $params['login'];
            $dv->istrunk = 0;
            $dv->cid_from_dids = 0;
            $dv->pin = mt_rand(100000, 999999);
            $dv->tell_balance = 0;
            $dv->tell_time = 0;
            $dv->tell_rtime_when_left = 60;
            $dv->repeat_rtime_every = 60;
            $dv->t38pt_udptl = 'no';
            $dv->ani = 0;
            $dv->promiscredir = 'no';
            $dv->timeout = 60;
            $dv->process_sipchaninfo = 0;
            $dv->allow_duplicate_calls = 0;
            $dv->call_limit = 0;
            $dv->lastms = 0;
            $dv->faststart = 'yes';
            $dv->h245tunneling = 'yes';
            $dv->server_id = 1;
            $dv->requirecalltoken = 'no';
            $dv->language = 'en';
            $dv->primary_did_id = 1;
            $dv->save();
            if(!$dv->save())
            {
                $this->error['Devices'][] = $dv->getErrors();
            }

            $dv_id = Yii::app()->db->getLastInsertID();

            $new_did = round(10000000 + $new_devi);

            $did = new Dids;
            $did->did = $new_did;
            $did->status = 'active';
            $did->user_id = $user_id;
            $did->device_id = $dv_id;
            $did->subscription_id = 0;
            $did->reseller_id = 0;
            $did->closed_till = '2006-01-01 00:00:00';
            $did->dialplan_id = 0;
            $did->provider_id = 5;
            $did->call_limit = 0;
            $did->sound_file_id = 0;
            $did->grace_time = 0;
            $did->t_digit = 10;
            $did->t_response = 20;
            $did->save();
            if(!$did->save())
            {
                $this->error['Dids'][] = $did->getErrors();
            }

            $did_id = Yii::app()->db->getLastInsertID();

            $dv->primary_did_id = $did_id;
            $dv->save();
            if(!$dv->save())
            {
                $this->error['Devices 2'][] = $dv->getErrors();
            }

            $didr = new Didrates;
            $didr->start_time = '00:00:00';
            $didr->end_time = '23:59:59';
            $didr->rate = 0;
            $didr->connection_fee = 0;
            $didr->increment_s = 1;
            $didr->min_time = 0;
            $didr->did_id = $did_id;
            $didr->rate_type = 'provider';
            $didr->save();
            if(!$didr->save())
            {
                $this->error['Didrates'][] = $didr->getErrors();
            }
            unset($didr);
            $didr = new Didrates;
            $didr->start_time = '00:00:00';
            $didr->end_time = '23:59:59';
            $didr->rate = 0;
            $didr->connection_fee = 0;
            $didr->increment_s = 1;
            $didr->min_time = 0;
            $didr->did_id = $did_id;
            $didr->rate_type = 'owner';
            $didr->save();
            if(!$didr->save())
            {
                $this->error['Didrates2'][]  = $didr->getErrors();
            }
            unset($didr);
            $didr = new Didrates;
            $didr->start_time = '00:00:00';
            $didr->end_time = '23:59:59';
            $didr->rate = 0;
            $didr->connection_fee = 0;
            $didr->increment_s = 1;
            $didr->min_time = 0;
            $didr->did_id = $did_id;
            $didr->rate_type = 'incoming';
            $didr->save();
            if(!$didr->save())
            {
                $this->error['Didrates3'][]  = $didr->getErrors();
            }
            unset($didr);

            $devcod = new Devicecodecs;
            $devcod->device_id = $dv_id;
            $devcod->codec_id = 1;
            $devcod->priority = 0;
            $devcod->save();
            if(!$devcod->save())
            {
                $this->error['Devicecodecs'][]  = $devcod->getErrors();
            }
            unset($devcod);
            $devcod = new Devicecodecs;
            $devcod->device_id = $dv_id;
            $devcod->codec_id = 2;
            $devcod->priority = 2;
            $devcod->save();
            if(!$devcod->save())
            {
                $this->error['Devicecodecs2'][] = $devcod->getErrors();
            }
            unset($devcod);
            $devcod = new Devicecodecs;
            $devcod->device_id = $dv_id;
            $devcod->codec_id = 5;
            $devcod->priority = 0;
            $devcod->save();
            if(!$devcod->save())
            {
                $this->error['Devicecodecs3'][] = $devcod->getErrors();
            }
            unset($devcod);
            
            if(empty($this->error))
            {
                
                return $this->getProfile($params);
            }else{
                return json_encode($this->error);
            }
        }
    }
    
    public function getProfile($params = array())
    {
        $user = Users::model()->findByAttributes(array('username' => $params['login']));
        if($user === null)
        {
            $result = array('error' => 'Пользователь с таким логином ненайден');
        }else{
            //$user = new Users;
            $result = array(
                'user_id' => $user->id,
                'login' => $user->username,
                'balanc' => $user->balance,
                'number' => $user->primaryDevice->primaryDid->did,
            );
        }
        
        return json_encode($result);
    }
    
}
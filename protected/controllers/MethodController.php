<?php

class MethodController extends Controller
{
    


    public function actionIndex()
    {
        $method = $_POST['method'];
        parse_str($_POST['params'],$params);
        $hash = $_POST['hash'];
        if(!empty($method))
        {
            $sf = Starsfon::instance($method);
            if($sf->isAuth === TRUE && Yii::app()->user->isGuest === FALSE)
            {
                echo $sf->$method($params);
            }elseif($sf->isAuth  === TRUE && Yii::app()->user->isGuest === TRUE)
            {
                echo json_encode(array(
                    'error' => 'Not auth'
                ));
            }elseif($sf->isAuth  === FALSE && Yii::app()->user->isGuest === FALSE){
                echo json_encode(array(
                    'error' => 'Already authorized'
                ));
            }elseif($sf->isAuth  === FALSE && Yii::app()->user->isGuest === TRUE)
            {
                echo $sf->$method($params);
            }
        }else{
            echo json_encode(array(
                'error' => 'NULL PARAMS'
            ));
        }
    }
    
    public function actionTest()
    {
        $query_devi = "SELECT 
                    IF(MAX(`name`) < 1000 OR MAX(`name`) = 0 ,1000,MAX(`name`) + 1) as `name_max`, 
                    MAX(`accountcode`) + 1 as `accountcode_max` 
                FROM `devices` WHERE `context` = 'mor_local';";

            $max = Yii::app()->db->createCommand($query_devi)->execute();
            
            echo $max->name_max;
    }

    // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
<?php

class MethodController extends Controller
{
    private static $access_method = array(
        'getProfile' => array(
            'auth' => TRUE,
            'method' => 'getProfile'
        ),
        'createUser' => array(
            'auth' => FALSE,
            'method' => 'createUser'
        ),
        'userExists' => array(
            'auth' => FALSE,
            'method' => 'userExists'
        ),
    );


    public function actionIndex()
    {
        $method = $_POST['method'];
        parse_str($_POST['params'],$params);
        $hash = $_POST['hash'];
        if(!empty($method) && array_key_exists($method, self::$access_method))
        {
            $method_meta = self::$access_method[$method];
            if($method_meta['auth'] === TRUE && Yii::app()->user->isGuest === FALSE)
            {
                echo Starsfon :: $method_meta['method'];
            }elseif($method_meta['auth'] === TRUE && Yii::app()->user->isGuest === TRUE)
            {
                echo json_encode(array(
                    'error' => 'Not auth'
                ));
            }elseif($method_meta['auth'] === FALSE && Yii::app()->user->isGuest === FALSE){
                echo json_encode(array(
                    'error' => 'Already authorized'
                ));
            }elseif($method_meta['auth'] === FALSE && Yii::app()->user->isGuest === TRUE)
            {
                echo Starsfon :: $method_meta['method'];
            }
        }
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
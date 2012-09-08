<?php

class AuthorizeController extends Controller
{
    public function actionLogin()
    {        
        $login = $_POST['login'];
        $password = $_POST['password'];
        $identity = new UserIdentity($login,$password);
        if($identity->authenticate())
        {
            Yii::app()->user->login($identity);
            echo json_encode(array('on'=>'test'));
        }else{
            echo $identity->errorMessage;
            echo json_encode(array('on'=>$identity->errorMessage));
        }
    }
    public function actionTest()
    {
        $req = Yii::app()->user->isGuest === TRUE ? 'GUEST' : 'USER';
        echo $req;
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
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
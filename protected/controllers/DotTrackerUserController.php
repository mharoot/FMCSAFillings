<?php

class DotTrackerUserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','updateAjax'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	    $model=$this->loadModel($id);
        $criteria=new CDbCriteria();
        $criteria->compare('user_id',$model->username);
        $modelHistory=DotTrackerLogin::model()->findAll($criteria);
		$this->render('view',array(
			'model'=>$model,
            'modelHistory'=>$modelHistory
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new DotTrackerUser;


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerUser']))
		{
			$model->attributes=$_POST['DotTrackerUser'];
			$model->creationdatetime=new CDbExpression('NOW()');
			if($model->save()){
                $this->redirect(array('view','id'=>$model->id));
            }


		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DotTrackerUser']))
		{
			$model->attributes=$_POST['DotTrackerUser'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

    public function actionUpdateAjax()
    {
        $success=false;
        $id=Yii::app()->request->getParam('id',0);

        $msg='Error in saving Data';

        if(isset($id) && !empty($id))
        {
            $model=$this->loadModel($id);
        }

        if(empty($model))
        {
            die;
        }


        if(isset($_POST['DotTrackerUser']))
        { $oldPwd=$model->password;
            $model->attributes=$_POST['DotTrackerUser'];
            if($model->password=='')
            {
                $model->password=$oldPwd;
                $model->s_password=$model->password;
                $model->last_updated=date('Y-m-d h:i:s');

            }
            if($model->save())
            {
                $success=true;
                $msg='User has been saved sucessfully';
            }
            else{
                $success=false;
                $msg=$model->getErrors();
            }
        }

      echo json_encode(array('success'=>$success,'message'=>$msg));
       // return false;
    }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->actionAdmin();
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DotTrackerUser('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DotTrackerUser']))
			$model->attributes=$_GET['DotTrackerUser'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DotTrackerUser the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DotTrackerUser::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param DotTrackerUser $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dot-tracker-user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

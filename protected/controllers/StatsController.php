<?php

class StatsController extends Controller
{

	
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($codice)
	{
		 $model=Stats::model()->findByAttributes(array('dsanagrafica_codice'=>$codice));
                 if(isset($model)) 
                     echo '<i class="icon-fire icons"></i> '.$model->views;
                 else
                     echo '<i class="icon-water icons"></i> 0';
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Stats;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Stats']))
		{
			$model->attributes=$_POST['Stats'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idstats));
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
		$this->performAjaxValidation($model);

		if(isset($_POST['Stats']))
		{
			$model->attributes=$_POST['Stats'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idstats));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionRating()
	{		
		
		if(isset($_POST['codice']))
		{
                        $model=Stats::model()->findByAttributes(array('dsanagrafica_codice'=>$_POST['codice']));
			$model->rating = $model->rating + $_POST['star_rating'];
                        $model->voters++;
			if($model->save())
				echo 'Grazie per aver votato questo dataset.';
		
		}else{
                    echo 0;
                }
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
		$dataProvider=new CActiveDataProvider('Stats');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Stats('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Stats']))
			$model->attributes=$_GET['Stats'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Stats the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Stats::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Stats $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='stats-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

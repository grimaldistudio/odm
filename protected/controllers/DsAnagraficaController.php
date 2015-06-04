<?php

class DsAnagraficaController extends Controller
{


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
            $dataProvider=new CActiveDataProvider('DsAnagrafica');
                
                $widget=$this->createWidget('ext.EDataTables.EDataTables', array(
                    'id'            => 'DsAnagrafica',
                    'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                    'dataProvider'  => $dataProvider,
                    'options' => array('sdom'=>'<"toolbar">frtip'),
                    'itemsCssClass'=>'compact',
                    'ajaxUrl'       => $this->createUrl('/dsanagrafica/view',array('id'=>$id)),
                    'columns'       => array('CODICE','AREA'),
                   ));
                   if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
                     $this->render('view', array('widget' => $widget,'model'=>$this->loadModel($id)));
                     return;
                   } else {
                     echo json_encode($widget->getFormattedData(intval($_REQUEST['sEcho'])));
                     Yii::app()->end();
                   }
            
		
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DsAnagrafica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DsAnagrafica::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DsAnagrafica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ds-anagrafica-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

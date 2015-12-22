<?php

class DsAnagraficaController extends Controller
{


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $embed = null)
	{
             if ($embed == 1) $this->layout = 'embed';
           
           $model = $this->loadModel($id);
           $criteria = new CDbCriteria;
           
           if (isset($_REQUEST['sSearch']) && isset($_REQUEST['sSearch']{0})) {
               
               $sql='SHOW COLUMNS FROM '.$model->TAB;
               $columns = Yii::app()->db
                     ->createCommand($sql)
                     ->queryAll();
               foreach($columns as $val) 
                $criteria->addSearchCondition($val['Field'], $_REQUEST['sSearch'], true, 'OR', 'LIKE');               
            }

            $sort = new EDTSort($model, array());
            $sort->defaultOrder = 'CODICE';
            /*$pagination = new EDTPagination();*/
                                 
            $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM '.$model->TAB)->queryScalar();            
                   
            $sql = Yii::app()->db->createCommand()
                ->select('*')
                ->from($model->TAB) 
                ->where($criteria->condition,  $criteria->params);                  
            
            
          
            $dataProvider=new CSqlDataProvider($sql, array(
                'totalItemCount'=>$count,
                'keyField' => 'CODICE',
                'sort'=>$sort,
                'pagination'=>false,
            ));
            
              

               
                $widget=$this->createWidget('ext.EDataTables.EDataTables', array(
                    'id'            => 'DsAnagrafica',
                    'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                    'dataProvider'  => $dataProvider,
                    'options' => array('sdom'=>'<"toolbar">frtip', "bProcessing" => true, "scrollCollapse"=>true,  "bPaginate"=> false),
                    'itemsCssClass'=>'compact',
                    'ajaxUrl'       => $this->createUrl('/dsanagrafica/view',array('id'=>$id)),
                    
                   ));
                   if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
                       if ($embed == 1) :
                        $this->render('view_embed', array('widget' => $widget,'model'=>$model, 'dataProvider'=>$dataProvider ));
                       else:
                           $this->render('view', array('widget' => $widget,'model'=>$model, 'dataProvider'=>$dataProvider ));
                       endif;
                     return;
                   } else {
                     echo json_encode($widget->getFormattedData(intval($_REQUEST['sEcho'])));
                     Yii::app()->end();
                   }
            
                   if ($embed == 1) :
                       $this->render('view_embed', array('model'=>$model,'dataProvider'=>$dataProvider));
                       else:
                       $this->render('view', array('model'=>$model,'dataProvider'=>$dataProvider));
                   endif;
                                   
		
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

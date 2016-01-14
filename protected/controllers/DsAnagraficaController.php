<?php

class DsAnagraficaController extends Controller
{

        public function filters()
        {
                return array(                 
                    array(
                        'RestfullYii.filters.ERestFilter + 
                        REST.GET, REST.PUT, REST.POST, REST.DELETE, REST.OPTIONS'
                    ),
                );
        }

        public function actions()
        {
                return array(
                    'REST.'=>'RestfullYii.actions.ERestActionProvider',
                );
        }   

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id, $embed = null)
	{ 
            $data = array();
            
            //stats init
            $model_stats = new Stats();
            if(!($model_stats_load = Stats::model()->findByAttributes(array('dsanagrafica_codice' => $id) ) )) {
                    $model_stats->dsanagrafica_codice = $id;                    
                    $model_stats->save ();
                    $data['modelstats'] = $model_stats;
            }else{
                if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
                    $model_stats_load->views++;
                    $model_stats_load->save();
                    $data['modelstats'] = $model_stats_load;
                }                    
            }
            //stats end
            
            $data['id'] = $id;            
                    
            $sortableColumnNamesArray = Array();
            
             if ($embed == 1) $this->layout = 'embed';
           
           $model = $this->loadModel($id);
           $criteria = new CDbCriteria;
           
            $sql='SHOW COLUMNS FROM '.$model->TAB;
               $columns = Yii::app()->db
                     ->createCommand($sql)
                     ->queryAll();
           
           foreach($columns as $val)    
               array_push ($sortableColumnNamesArray,$val['Field']);
           
           if (isset($_REQUEST['sSearch']) && isset($_REQUEST['sSearch']{0})) {                             
               foreach($columns as $val) 
                $criteria->addSearchCondition($val['Field'], $_REQUEST['sSearch'], true, 'OR', 'LIKE');               
            }

            $sort_by = (isset($_REQUEST['iSortCol_0'])) ? $sortableColumnNamesArray[$_REQUEST['iSortCol_0']] : $sortableColumnNamesArray[0];
            $sort_dir = (isset($_REQUEST['sSortDir_0'])) ? $_REQUEST['sSortDir_0'] : 'ASC';
            
            /*$pagination = new EDTPagination();*/
                                 
            $count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM '.$model->TAB)->queryScalar();            
             
            if ($embed == 1 || Yii::app()->getRequest()->getIsAjaxRequest()) :
            $sql = Yii::app()->db->createCommand()
                ->select('*')
                ->from($model->TAB) 
                ->where($criteria->condition,  $criteria->params)
                ->order($sort_by." ".$sort_dir);
            else:
                $sql = Yii::app()->db->createCommand()
                ->select('*')
                ->from($model->TAB) 
                ->where($criteria->condition,  $criteria->params)
                ->order($sort_by." ".$sort_dir)
                ->limit(1);
            
            endif;
                        
            $dataProvider=new CSqlDataProvider($sql, array(
                'totalItemCount'=>$count,
                'keyField' => 'CODICE',
                'pagination'=>false,               

            ));
               /*
                $widget=$this->createWidget('ext.EDataTables.EDataTables', array(
                    'id'            => 'DsAnagrafica',
                    'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                    'dataProvider'  => $dataProvider,
                    'options' => array('sdom'=>'<"toolbar">frtip', "bProcessing" => true, "scrollCollapse"=>true,  "bPaginate"=> false),
                    'itemsCssClass'=>'compact',
                    'ajaxUrl'       => $this->createUrl('/dsanagrafica/view',array('id'=>$id)),
                    
                   ));
                * 
                */
                   if (!Yii::app()->getRequest()->getIsAjaxRequest()) {
                       if ($embed == 1) :
                         $this->render('view_embed', array('model'=>$model,'dataProvider'=>$dataProvider));
                       else:
                           $this->render('view', array('model'=>$model,'data'=>$data,'dataProvider'=>$dataProvider,'data'=>$data));
                       endif;
                     return;
                   } else {
                    // echo json_encode($widget->getFormattedData(intval($_REQUEST['sEcho'])));
                    
                        
                     $data = $dataProvider->getData();
                     foreach($data as $key=>$datarow) {
                        foreach($datarow as $val ) {                            
                            $dataRow['data'][$key][] = utf8_encode((string)($val));                            
                            
                        }                    
                     }
                     
                     echo CJSON::encode($dataRow);
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

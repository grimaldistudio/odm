<?php

class SiteController extends Controller
{
    
        public function init()
        {                   
  
            $pslManager = new Pdp\PublicSuffixListManager();
            $parser = new Pdp\Parser($pslManager->getList());
            
            $host = Yii::app()->getBaseUrl(true);
            
            $url = $parser->parseUrl($host);  
            
            $subdomain = $url->host;

            Yii::app()->session['clientID'] = 1;
            
            Yii::app()->name = strtolower($subdomain); //to define
        }
                
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
                        'search'=>array(
                                'class'=>'ext.esearch.SearchAction',
                                'model'=>'DsAnagrafica',
                                'attributes'=>array('TITOLO','LTAG'),
                            ),
        
		);
	}
        
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
            //Categories
            $criteria=new CDbCriteria(array(
                    'condition'=>'STATO="0" OR STATO="1" ',                       
                    'distinct'=>array("AREA"),
                    'select'=>'AREA, COUNT(*) as totalDatasetInTheCategories',
                    'group'=>'AREA',
            ));   

            $dataProvider['Categories'] = new CActiveDataProvider('DsAnagrafica', array(
                    'pagination'=>false,
                    'criteria'=>$criteria,
            ));
            
            
            //News list
            $criteria=new CDbCriteria(array(
                    'condition'=>'ID_PA_ATTIVA="'.Yii::app()->session["clientID"].'"',
                    'order'=>'D_AGG DESC',               
            ));   

            $dataProvider['news'] = new CActiveDataProvider('News', array(
                    'pagination'=>array(
                        'pageSize'=>3,
                    ),
                    'criteria'=>$criteria,
            ));
            
            //Dataset in Evidence
            $criteria=new CDbCriteria(array(
                    'condition'=>'EVIDE="1" AND STATO < 2',
                    'order'=>'D_AGG DESC',               
            ));   

            $dataProvider['datasetEvidence'] = new CActiveDataProvider('DsAnagrafica', array(
                    'pagination'=>false,
                    'criteria'=>$criteria,
            ));
            
            $data['datasetCount'] = DsAnagrafica::model()->count('STATO < 2');
                      
            $this->render('index',array('dataProvider'=>$dataProvider,'data'=>$data));
	}
        
        public function actionCatalog($filters)
	{        
            
                $criteria=new CDbCriteria(array(                       
                        'condition' => "(STATO='0' OR STATO='1') AND (AREA LIKE :match)", 
                        'params'    => array(':match' => "%$filters%"),  
                        'order'=>'D_AGG DESC',
                ));
                
                 $dataProvider['datasetsFiltered'] = new CActiveDataProvider('DsAnagrafica', array(
                    'pagination'=>false,
                    'criteria'=>$criteria,
                 ));
                 
                $count['datasets'] = DsAnagrafica::model()->count($criteria);
                
                //Categories
                $criteria=new CDbCriteria(array(
                        'condition'=>'STATO="0"',                       
                        'distinct'=>array("AREA"),
                        'select'=>'AREA, COUNT(*) as totalDatasetInTheCategories',
                        'group'=>'AREA',
                ));   

                $dataProvider['Categories'] = new CActiveDataProvider('DsAnagrafica', array(
                        'pagination'=>false,
                        'criteria'=>$criteria,
                ));
                
                //Tags
                $criteria=new CDbCriteria(array(
                        'condition'=>'STATO="0"',                                               
                        'select'=>'LTAG',
                ));   

                $dataProvider['Tags'] = new CActiveDataProvider('DsAnagrafica', array(
                        'pagination'=>false,
                        'criteria'=>$criteria,
                ));
                
                $tags = DsAnagrafica::model()->findAll('STATO=0');
                $array_tags = array();
                
                foreach($tags as $tag) {
                    $inner_tag = explode(",",$tag->LTAG);
                    foreach($inner_tag as $t) {
                        array_push($array_tags, $t);
                        }   
                }
                $dataProvider['Tags'] = array_unique($array_tags);
                
		$this->render('catalog',array('count'=>$count,'dataProvider'=>$dataProvider,'filters'=>$filters));
	}
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
        
        public function actionContent($page)
	{
            
          $data = array();
          
            $this->render($page, $data);
        }
        
        public function actionPageload($id)
	{
            $model = Altro::model()->findByPk($id);
            $data = array();
            $data['altro'] = $model;
          
            $this->render('page', array('data'=>$data));
        }

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
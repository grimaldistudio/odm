<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


Yii::import('zii.widgets.CMenu', true);

class ActiveMenu extends CMenu
{
    public function init()
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
                
                $subItems = $dataProvider['Categories']->getData();
                $itemArray = array();
                foreach($subItems as $item) {                    
                    array_push($itemArray, array('label'=>$item->AREA . ' ('.$item->totalDatasetInTheCategories.')', 'url'=>array('site/catalog', 'filters'=>strtolower(preg_replace('/[^A-Za-z0-9\-]/', '',$item->AREA)))));
                }
                
       $this->items = array(
                                    array('label'=>'Home', 'url'=>array('site/index')),
                                    array('label'=>'Dati', 'url'=>array('site/catalog', 'filters'=>'')),
                                    array('label'=>'Argomenti', 'url'=>'#','submenuOptions' => array('id'=>'drop1','class'=>'f-dropdown','aria-hidden'=>'true','data-dropdown-content'=>0), 'linkOptions'=>array('class'=>'small secondary radius button dropdown','data-options'=>'is_hover:true;','data-dropdown'=>'drop1'), 
                                        'items'=>$itemArray
                                    ),
                                    array('label'=>'Sviluppatori', 'url'=>array('site/content/page/sviluppatori')),
                                   // array('label'=>'Contatti', 'url'=>array('site/login')),                                   
                                );
                
        // Here we define query conditions.
        $criteria = new CDbCriteria;
       // $criteria->condition = '`status` = 1';
        $criteria->order = '`CODICE` ASC';

        $items = Altro::model()->findAll($criteria);

        foreach ($items as $item)
           $this->items[] = array('label'=>$item->TITOLO, 'url'=>'/site/pageload/'.$item->CODICE);
        
        
        $this->items[] = array('label'=>'<i class="icon icon-social-twitter"></i>', 'itemOptions' => array('class'=>'socialize'), 'url'=>array('site/login'));
        
        parent::init();
    }
}
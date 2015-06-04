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
       $this->items = array(
                                    array('label'=>'Home', 'url'=>array('site/index')),
                                    array('label'=>'Catalogo', 'url'=>array('site/catalog')),
                                    array('label'=>'Argomenti', 'url'=>'#','submenuOptions' => array('id'=>'drop1','class'=>'f-dropdown','aria-hidden'=>'true','data-dropdown-content'=>0), 'linkOptions'=>array('class'=>'small secondary radius button dropdown','data-options'=>'is_hover:true;','data-dropdown'=>'drop1'), 'items'=>array(
                                        array('label'=>'Ambiente (128)', 'url'=>array('product/new', 'tag'=>'new')),
                                        array('label'=>'Attività produttive (56)', 'url'=>array('product/index', 'tag'=>'popular')),
                                    )),
                                    array('label'=>'Sviluppatori', 'url'=>array('site/login')),
                                   // array('label'=>'Contatti', 'url'=>array('site/login')),                                   
                                );
                
        // Here we define query conditions.
        $criteria = new CDbCriteria;
       // $criteria->condition = '`status` = 1';
        $criteria->order = '`CODICE` ASC';

        $items = Altro::model()->findAll($criteria);

        foreach ($items as $item)
           $this->items[] = array('label'=>$item->TITOLO, 'url'=>'#');
        
        
        $this->items[] = array('label'=>'<i class="icon icon-social-twitter"></i>', 'itemOptions' => array('class'=>'socialize'), 'url'=>array('site/login'));
        
        parent::init();
    }
}
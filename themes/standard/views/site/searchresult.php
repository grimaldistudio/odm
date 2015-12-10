<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="awesome-mini margin-bottom-20 clearfix">    
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/awesome.jpg"></div>
</section>

<div class="row">
    <div class="large-12 columns margin-top-20"> 
       
        <ul class="inline-list">
            <li class="text-center"> 
                 <figure><?php echo '<img src="'.Yii::app()->theme->baseUrl.'/assets/img/icon/search.png" title="Cerca" width="55">';?></figure>
                 <span class="radius secondary label-big margin-top-10"><a href="#"><i class="icon-ban"></i></a>
                   Ricerca datasets
                 </span>
            </li>
            
            <li><?php if($dataProvider): ?><h2><small>TROVATI </small> <?php echo count($dataProvider->getData()); ?><small>
                         <?php echo Yii::t('app', 'DATASET PER "{query}"', array('{query}'=>CHtml::encode($query))) ?>
                     <?php else: ?>
                        <h2> <?php echo Yii::t('app', 'NESSUN DATASET TROVATO'); ?>  </h2>                   
                    </small><br/></h2<?php endif ?></li>             
        </ul>
    </div>
</div>

<section class="catalog margin-top-20 clearfix">
    
    <div class="row-fluid medium-collapse large-collapse">
        
        <div class="large-4 medium-4 small-12 columns" >
            
            <div class="catalog-left right">
                
                    <?php $this->widget('ext.esearch.SearchBoxPortlet'); ?>                  
            </div>
        </div>

        <div class="large-8 medium-8 small-12 columns">
            <div class="catalog-right">
                
                <?php if(!$dataProvider): ?>
                <h4 class="margin-bottom-20">Consigli per la ricerca:</h4>
                    <ul class="no-bullet">
                    <li>Controlla l'ortografia delle parole chiave.</li>
                    <li>Prova a cambiare alcune parole chiave per esempio "casa" invece di "case".</li>
                    <li>Prova delle parole chiave più generiche.</li>
                    <li>Meno parole chiave danno più risultati. Prova a ridurre le parole chiave fino a quando non ottieni un risultato.</li>
                    <ul> 
                </p>
                <?php endif ?>

                <?php if($dataProvider): ?>         
                        <?php $this->widget($widget, CMap::mergeArray(array(
                                'dataProvider'=>$dataProvider,
                                'itemView'=>'part/_datasets',   
                        'template' => "{items}",
                        'itemsTagName'=>'ul',
                        'itemsCssClass'=>'no-bullet',
                        ), $widgetParams)); ?>
               
                <?php endif ?>
             
            </div>
        </div>
    </div>
    
</section>


<?php

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/vendor/public/readmore/readmore.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/vendor/public/parallax.js/parallax.min.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/myvendor/catalog.js',CClientScript::POS_END);
//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
?>
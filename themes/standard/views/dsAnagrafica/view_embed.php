<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->pageTitle=Yii::app()->name;
?>

<section class="dataset clearfix">
    
<div class="row-fluid clearfix padding-top-10">
    
      
    <div class="large-8 small-12 catalog-view-list columns">
         <h3><?php echo $model->TITOLO; ?></h3>
         <p><?php echo $model->DESCRIZIONE; ?></p>                           
    </div>
    
     
    
</div>
    
   
    
    <div class="row-fluid large-collapse margin-top-10">
        
        <div class="large-12 columns">
             <?php 
            
            $this->widget('zii.widgets.grid.CGridView', array(
                'htmlOptions' => array('id'=>'datatable'),
                 'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                 'template' => '{items} {pager}',
                 'itemsCssClass' => 'display compact',
                 'dataProvider'=>$dataProvider,
            ));
                      
            ?>
            
        </div>
        
   
    </div>
     <span style="display:none;" id="yiiGetUrl"><?php echo Yii::app()->getRequest()->getUrl();  ?></span>
</section>
<?php
$cs = Yii::app()->getClientScript();

$cs->registerScriptFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/datatables.min.js", CClientScript::POS_END);
$cs->registerScriptFile('https://cdn.datatables.net/1.10.10/js/dataTables.foundation.min.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/Scroller-1.4.0/js/dataTables.scroller.min.js", CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/element-switcher/element-switcher.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/js/app-dataset.js',CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/datatables.min.css");
$cs->registerCssFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/Scroller-1.4.0/css/scroller.foundation.min.css");
$cs->registerCssFile('https://cdn.datatables.net/1.10.10/css/dataTables.foundation.min.css');


?>
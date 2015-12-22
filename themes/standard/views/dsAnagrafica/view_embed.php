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
            
            $widget->run(); 
                      
            ?>
            
        </div>
        
   
    </div>
    
</section>

<?php
//cdn.datatables.net/plug-ins/1.10.7/integration/foundation/dataTables.foundation.css
//cdn.datatables.net/plug-ins/1.10.7/integration/foundation/dataTables.foundation.js
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/datatables-plugins/integration/foundation/dataTables.foundation.min.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/element-switcher/element-switcher.js',CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/datatables-plugins/integration/foundation/dataTables.foundation.css');
?>

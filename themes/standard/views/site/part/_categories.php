<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <li>
    <?php echo CHtml::link('
    <figure><img src="'.Yii::app()->theme->baseUrl.'/assets/img/icon/'.strtolower(preg_replace('/[^A-Za-z0-9\-]/', '',$data->AREA)).'.png" title="'.$data->AREA.'" width="100"></figure>
        <span class="label-big margin-top-20">'.$data->AREA.' ('.$data->totalDatasetInTheCategories.')</span>',array('site/catalog','filters'=>strtolower(preg_replace('/[^A-Za-z0-9\-]/', '',$data->AREA)))); ?>  
</li>
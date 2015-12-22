<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<li <?php echo (strtolower(preg_replace('/[^A-Za-z0-9\-]/', '',$data->AREA)) == $filters) ? 'class="active"' : '' ?>>
    
    <?php echo CHtml::link($data->AREA .' ('.$data->totalDatasetInTheCategories.')',array('site/catalog','filters'=>strtolower($data->AREA))); ?>  
    
</li>

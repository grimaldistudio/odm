<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<li <?php echo (strtolower($data->AREA) == $filters) ? 'class="active"' : '' ?>><a href="#"><?php echo $data->AREA; ?> (<?php echo $data->totalDatasetInTheCategories; ?>)</a></li>

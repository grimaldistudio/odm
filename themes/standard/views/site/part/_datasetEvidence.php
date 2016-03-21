<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<li>
    <a href="<?php echo $this->createUrl('dsAnagrafica/view',array("id" => $data->CODICE) ); ?>">
    <div><?php echo $data->TITOLO; ?></div>
    <span class="text-center"><?php echo $data->AREA; ?></span>
    <p class="margin-top-20"><?php echo $data->DESCRIZIONE; ?></p>
    </a>
</li>
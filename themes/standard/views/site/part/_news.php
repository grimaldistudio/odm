<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<li class="clearfix">
<span class="date left">
    <span class="day"><?php echo date('d',strtotime($data->D_AGG));?></span>
    <span class="month"><?php echo date('M',strtotime($data->D_AGG));?></span></span>
<div class="left"><a title="<?php echo $data->TITOLO;?>" href="#"><?php echo $data->TITOLO;?></a><p><?php echo $data->INTRO;?></p></div>
</li>          
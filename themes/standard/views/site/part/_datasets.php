<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

 <li class="catalog-view">

        <div class="row collapse">

            <div class="large-1 columns hide-for-small-down">

                <div class="dataset-icon">
                    <div><?php echo $data->CODICE;?></div>
                </div>

            </div>

        <div class="large-11 catalog-view-list columns">
            <div class="right">
            <?php 
            $tags = explode(",", $data->LTAG); 
            foreach($tags as $tag) {
                echo '<span class="radius secondary label"><i class="icon-tag icons"></i> '.ucfirst(strtolower($tag)).'</span> ';
            }
            ?>            
            </div>
            <h3>
                <?php echo CHtml::link($data->TITOLO,array('dsAnagrafica/view','id'=>$data->CODICE)); ?>
            </h3>
            <ul class="no-bullet inline-list datasets-tools">
                <li>creato il <?php echo date('d.m.Y',strtotime($data->D_CRE));?></li>
                <li>ultimo aggiornamento il <?php echo date('d.m.Y',strtotime($data->D_AGG));?></li>
            </ul>

            <p><?php echo $data->DESCRIZIONE;?></p>
            <div class="dataset-share">
                <ul class="no-bullet inline-list">
                    <li><span><i class="icon-fire icons"></i> 147</span></li>
                    <li><a href="#" class="toggleFunction"><span><i class="icon-share icons"></i> </span></a></li>
                    <div style="display: none;">
                        <?php $this->widget('application.extensions.sharebox.EShareBox', array(
                                // url to share, required.
                                'url' => $this->createAbsoluteUrl('/'),

                                // A title to describe your link, required.
                                // Some services will ignore this value.
                                'title'=> 'ODM',

                                // Size of the icons to display, in pixels.
                                // Default is 24px, available sizes : 16, 24, 32, 48.
                                'iconSize' => 16,

                                // Whether to animate the links.
                                // Default is true
                                'animate' => false,

                               // Social networks to include, excluding all others.
                               // The exclude filter is still run.
                               'include' => array('twitter', 'facebook','linkedin'),

                               // Social networks to exclude from display.
                               // By default none are excluded.
                               //'exclude' => array('technorati', 'digg'),

                               // Use your own icons! Note that you will need to have
                               // a subfolder of the appropriate icons sizes.
                               // ie: /myimages/social/16px /myimages/social/24px ...
                               //'iconPath' => '/myimages/social',

                               // HTML options for the UL element.
                               //'ulHtmlOptions' => array('class' => 'myCustomUlClass'),

                               // HTML options for all the LI elements.
                               //'liHtmlOptions' => array('class' => 'myCustomLiClass'),
                            )); ?>
                    </div>
                </ul>
            </div>
        </div>

        </div>
</li>


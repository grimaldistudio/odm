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
                 <figure><img width="55" title="Ambiente" src="/themes/standard/assets/img/icon/ambiente.png"></figure>
                 <span class="radius secondary label-big margin-top-10"><a href="#"><i class="icon-ban"></i></a> Ambiente</span>
            </li>
            
            <li><h2><?php echo $count['datasets']; ?> <small>DATASET PER L' ARGOMENTO</small><br/>Ambiente</h2></li>          
        </ul>
    </div>
</div>

<section class="catalog margin-top-20 clearfix">
    
    <div class="row-fluid medium-collapse large-collapse">
        
        <div class="large-4 medium-4 small-12 columns" >
            
            <div class="catalog-left right">
                
                    <form>                        
                    <div class="row text-center collapse">
                           <div class="large-12  large-centered columns ">
                            <div class="row collapse">
                                <label></label>
                               <div class="small-10 columns">
                                 <input type="text" placeholder="cerca nei dataset" />
                               </div>
                               <div class="small-2 columns">
                                   <span class="button postfix"><i class="icon-magnifier"></i></span>
                               </div>
                             </div>
                           </div>
                       </div>                       

                    </form>
                
                    <div class="catalog-list">
                        
                        <h5 class="margin-bottom-20">Argomenti</h5>
                        
                         <?php
                            $this->widget('zii.widgets.CListView', array(
                                'dataProvider'=>$dataProvider['Categories'],
                                'itemView'=>'part/_datasetCategories',   
                                'template' => "{items}",
                                'itemsTagName'=>'ul',
                                'itemsCssClass'=>'no-bullet',
                                'viewData'=>array('filters'=>$filters),
                            ));
                    ?>

                         </div>
                    
                    <div class="catalog-list tags hide-for-small-down">
                        <h5 class="margin-bottom-20">Tags</h5>
                        <ul class="no-bullet">
                            <?php
                                foreach($dataProvider['Tags'] as $tag) {
                                    echo '<li><a href=""> <i class="icon-tag icons"></i> '.strtolower($tag).' </a></li>';
                                }
                            ?>
                        </ul>
                        
                    </div>
            </div>
        </div>

        <div class="large-8 medium-8 small-12 columns">
            <div class="catalog-right">
                
                <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider['datasetsFiltered'],
                        'itemView'=>'part/_datasets',   
                        'template' => "{items}",
                        'itemsTagName'=>'ul',
                        'itemsCssClass'=>'no-bullet',
                    ));
                    ?>
             
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
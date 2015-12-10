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
                 <figure><?php echo '<img src="'.Yii::app()->theme->baseUrl.'/assets/img/icon/'.$filters.'.png" title="'.$filters.'" width="55">';?></figure>
                 <span class="radius secondary label-big margin-top-10"><a href="#"><i class="icon-ban"></i></a> <?php echo ucfirst($filters); ?></span>
            </li>
            
            <li><?php if(!empty($filters)): ?><h2><?php echo $count['datasets']; ?> <small>DATASET PER L' ARGOMENTO</small><br/><?php echo ucfirst($filters); ?></h2>
            <?php else: ?>
                <h2>CATALOGO <small>DEI DATASET</small></h2> 
                <h4>trovati <?php echo $count['datasets']; ?> datasets</h4>
            <?php endif ?>
            </li>          
        </ul>
    </div>
</div>

<section class="catalog margin-top-20 clearfix">
    
    <div class="row-fluid medium-collapse large-collapse">
        
        <div class="large-4 medium-4 small-12 columns" >
            
            <div class="catalog-left right">
                
                    <?php $this->widget('ext.esearch.SearchBoxPortlet'); ?>   
                
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
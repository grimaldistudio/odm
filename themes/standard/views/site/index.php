<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<section class="awesome clearfix">    
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/awesome.jpg" />
</section>

<section class="background-gray-light">

<div class="row">
    <div class="large-12 columns text-center margin-top-40">
        <h2>Il portale dei dati aperti</h2>
        <p class="lead">cerca tra i <?php echo $data['datasetCount']; ?> datasets</p>
    </div>
</div>

<div class="row text-center">
    <div class="large-9  large-centered columns ">
         <?php $this->widget('ext.esearch.SearchBoxPortlet'); ?>    
    </div>
</div>

</section>

<div class="row">
    <div class="large-12 columns text-center margin-top-40">
        <h2><small>Catalogo open data</small><br/>Raccolta di dataset divisi per argomento</h2>
        
    </div>
</div>

<div class="row margin-top-40">
    <div class="large-12 columns text-center margin-top-40">

            <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider['Categories'],
                        'itemView'=>'part/_categories',   
                        'template' => "{items}",
                        'itemsTagName'=>'ul',
                        'itemsCssClass'=>'small-block-grid-3 large-block-grid-5 topics',
                    ));
                    ?>

    </div>
</div>

<section class="separator margin-top-40">
    
    <div class="row">
        <div class="large-12 columns text-center">
            <p class="lead"><strong>OPEN DATA</strong> il portale dei dati aperti <a class="button small radius">Scopri gli Open Data</a></p>
        </div>
    </div>
    
</section>


<div class="row margin-top-40">
    <div class="large-12 columns">
        
        <div class="text-center">
        <h2>Dataset in evidenza</h2>
        <p class="lead">Consulta e riutilizza i dati più importanti finora pubblicati</p>
        </div>
        
          <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider['datasetEvidence'],
                        'itemView'=>'part/_datasetEvidence',   
                        'template' => "{items}",
                        'itemsTagName'=>'ul',
                        'itemsCssClass'=>'small-block-grid-1 large-block-grid-3 evidence margin-top-40',
                    ));
                    ?>
               
    </div>
</div>

<section class="background-gray">
<div class="row margin-top-40">
        <div class="large-12 columns">
            
            <div class="text-center padding-top-40 padding-bottom-40">
                <h2><small>In costante aggiornamento con il tuo Ente</small></h2>
            </div>
            
            <div class="row">
                <div class="large-6 columns">
                     <div class="clearfix text-center event-list padding-top-10 padding-bottom-10"><i class="icon icon-paper-clip"></i> Ultime notizie</div>
                    <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider['news'],
                        'itemView'=>'part/_news',   
                        'template' => "{items}",
                        'itemsTagName'=>'ul',
                        'itemsCssClass'=>'event-list no-bullet padding-top-20 padding-bottom-40',
                    ));
                    ?>

                </div>
                
                 <div class="large-6 columns">
                    <ul class="event-list no-bullet padding-top-20">
                         <li class="clearfix text-center"><i class="icon icon-social-twitter"></i> @DatiGovIT</li>
                         <li class="clearfix">
                          <a class="twitter-timeline" href="https://twitter.com/DatiGovIT" data-widget-id="606048435691790336" data-lang="it" data-chrome="nofooter transparent" data-tweet-limit="4">Tweets by @DatiGovIT</a>                      
                          <span class="line-standard"></span>
                         </li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
</section>


<?php

//$cs = Yii::app()->getClientScript();

//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
?>
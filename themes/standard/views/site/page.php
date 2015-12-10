<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="awesome-mini margin-bottom-20 clearfix">    
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/awesome.jpg"></div>
</section>

<section class="page-head">
<div class="row">
    <div class="large-12 columns margin-top-20">        
        <h2><?php echo $data['altro']->TITOLO; ?></h2>
    </div>
</div>
</section>

<section class="page-content">
    <div class="row">
    <div class="large-12 columns margin-top-20"> 
    <article>        
        <?php echo $data['altro']->TESTO; ?>
    </article>
    </div>
    </div>
</section>

<?php

Yii::app()->clientScript->registerCoreScript('jquery');

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/vendor/public/readmore/readmore.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/vendor/public/parallax.js/parallax.min.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/myvendor/catalog.js',CClientScript::POS_END);
//$cs->registerCssFile($baseUrl.'/css/yourcss.css');

?>
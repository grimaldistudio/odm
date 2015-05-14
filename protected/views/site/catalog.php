<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="row">
    <div class="large-12 columns margin-top-20">
        <h2>21 <small>DATASET</small><br/>Trovati nella categoria Ambiente</h2>
    </div>
</div>

<section class="catalog margin-top-40 clearfix">
    
    <div class="row-fluid medium-collapse large-collapse">
        
        <div class="large-4 medium-4 small-12 columns" >
            
            <div class="catalog-left right">
                
                    <form>
                        <h4>Cerca nei dataset</h4>
                        
                              <input type="text" placeholder="es. scuole, parcheggi" />                          

                    </form>
                
                    <div class="catalog-list">
                        
                        <h5 class="margin-bottom-20">Argomenti</h5>
                        
                        <ul class="no-bullet">
                            <li><a href="#">(Tutti)</a></li>
                            <li><a href="#">Agricoltura (128)</a></li>
                            <li class="active"><a href="#">Ambiente (12)</a></li>
                            <li><a href="#">Attività produttive</a></li>
                            <li><a href="#">Bilancio</a></li>
                            <li><a href="#">Commercio</a></li>
                            <li><a href="#">Energia</a></li>
                            <li><a href="#">Famiglia</a></li>
                            <li><a href="#">Governament</a></li>
                            <li><a href="#">Trasporto</a></li>
                            <li><a href="#">Agricoltura</a></li>
                            <li><a href="#">Ambiente</a></li>
                            <li><a href="#">Attività produttive</a></li>
                            <li><a href="#">Bilancio</a></li>
                            <li><a href="#">Commercio</a></li>
                            <li><a href="#">Energia</a></li>
                            <li><a href="#">Famiglia</a></li>
                            <li><a href="#">Governament</a></li>
                            <li><a href="#">Trasporto</a></li>
                        </ul>
                         </div>
                    
                    <div class="catalog-list tags hide-for-small-down">
                        <h5 class="margin-bottom-20">Tags</h5>
                        <ul class="no-bullet">
                            <li><a href=""> <i class="icon-tag icons"></i> Atti </a></li>
                            <li><i class="icon-tag icons"></i> Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            <li>Bilanci</li>
                            
                            
                        </ul>
                        
                    </div>
            </div>
        </div>

        <div class="large-8 medium-8 small-12 columns">
            <div class="catalog-right">
                <ul class="no-bullet">
                    <li class="catalog-view">
                        
                        <div class="row collapse">
                            <div class="large-1 columns">
                                                                                        
                                <div class="dataset-icon">
                                    <div>1.</div>
                                </div>
                                
                            </div>
                        
                        <div class="large-11 catalog-view-list columns">
                            <div class="right"><span class="radius secondary label"><i class="icon-tag icons"></i> Territorio</span></div>
                            <h3>Tecnici ambientali competenti riconosciuti</h3>
                            <ul class="no-bullet inline-list">
                                <li><small>creato il 05.05.2015</small></li>

                                <li><small>ultimo aggiornamento il 05.05.2015</small></li>
                            </ul>
                        
                            <p>Elenco dei tecnici competenti in acustica ambientale riconosciuti dal comune di Roma e operanti su tutto il territorio comunale e dell’intera provincia romana.</p>
                            <div class="dataset-share">
                                <ul class="no-bullet inline-list">
                                    <li><span><i class="icon-fire icons"></i> 1472</span></li>
                                    <li><span><i class="icon-share icons"></i></span></li>
                                </ul>
                            </div>
                        </div>
                            
                        </div>
                        
                    </li>
                    
                    
                    <li class="catalog-view">
                        
                        <div class="row collapse">
                            <div class="large-1 columns">
                                                                                        
                                <div class="dataset-icon">
                                    <div>2.</div>
                                </div>
                                
                            </div>
                        
                        <div class="large-11 catalog-view-list columns">
                            <div class="right"><span class="radius secondary label"><i class="icon-tag icons"></i> Territorio</span></div>
                            <h3>Siti contaminati sul territorio comunale</h3>
                            <ul class="no-bullet inline-list">
                                <li><small>creato il 05.05.2015</small></li>

                                <li><small>ultimo aggiornamento il 05.05.2015</small></li>
                            </ul>
                        
                            <p>Elenco dei tecnici competenti in acustica ambientale riconosciuti dal comune di Roma e operanti su tutto il territorio comunale e dell’intera provincia romana.</p>
                            <div class="dataset-share">
                                <ul class="no-bullet inline-list">
                                    <li><span><i class="icon-fire icons"></i> 120</span></li>
                                    <li><span><i class="icon-share icons"></i></span></li>
                                </ul>
                            </div>
                        </div>
                            
                        </div>
                        
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    
</section>


<?php

$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/vendor/public/readmore/readmore.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/myvendor/catalog.js',CClientScript::POS_END);
//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
?>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->pageTitle=Yii::app()->name;
?>

<section class="dataset clearfix">
    
<div class="row-fluid clearfix margin-top-20">
    
    <div class="large-1 columns hide-for-small-down">
         <div class="dataset-icon">
            <div><?php echo $model->CODICE; ?>.</div>
        </div>
    </div>
    
    <div class="large-8 small-12 catalog-view-list columns">
         <h3><?php echo $model->TITOLO; ?></h3>
         <p><?php echo $model->DESCRIZIONE; ?></p>                           
    </div>
    
     <div class="large-3 small-12 social columns text-right">
         <ul class="no-bullet inline-list margin-top-10 margin-bottom-10">
             <a href="#"><i class="icon-feed"></i></a>
             <a href="#"><i class="icon-social-facebook"></i></a>
             <a href="#"><i class="icon-social-twitter"></i></a>
         </ul>
         <a href="" class="hide-for-small-down"><i class="icon-size-fullscreen"></i></a>
     </div>
    
</div>
    
    <div class="row-fluid clearfix margin-top-10">
        
       
         <div class="large-12 columns">
              
             <div class="right">   
                 
                 <div class="button-bar"> 
                     
                      <ul class="button-group"> 
                        <li>
                            <div class="row collapse">
                               <label>  </label>
                               <div class="small-10 columns">
                                 <input type="text" placeholder="cerca nei dataset" />
                               </div>
                               <div class="small-2 columns">
                                   <span class="button postfix"><i class="icon-magnifier"></i></span>
                               </div>
                               </div>
                        </li>
                      </ul>
                
                        <ul class="button-group">                    
                         <li><a href="#" data-switch-rel="info" data-animation-speed="700" class="button secondary tiny switch-btn"><i class="icon-info"></i> Informazioni</a></li>
                         <li><a href="#" data-switch-rel="export" data-animation-speed="700" class="button secondary tiny switch-btn"><i class="icon-download"></i> Esporta</a></li>
                         <li><a href="#" class="button secondary tiny"><i class="icon-code"></i> Incorpora</a></li>
                         <li><a href="#" class="button secondary tiny"><i class="icon-vector"></i> Altre Fonti</a></li>
                         <li><a href="#" class="button secondary tiny"><i class="icon-bubbles"></i> Discuti</a></li>
                       </ul>
                     
                     
                 </div>
             </div>
         </div>
    </div>
    
    <div class="row-fluid margin-top-10">
        <div class="large-9 columns">
            <?php //$widget->run(); 
            
            
            $this->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider'=>$dataProvider,
                    'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                    'template' => '{items} {pager}',
                    'itemsCssClass' => 'dataTable compact',
                    
                
                ));
            
            ?>
            
        </div>
        
        <div class="large-3 columns">
            <!-- switch content -->
            <div class="switch-content " id="info">
                <h3>Informazioni</h3>
                
                <div class="row collapse margin-top-10">
                    <div class="large-3 small-12 text-center columns">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/simple-brand.png" alt="" />
                    </div>
                    <div class="large-9 small-12 columns">
                        <strong>Roma Capitale</strong>
                        <ul class="no-bullet">
                            <li>AUTORE: <strong><?php echo $model->PROPRIETARIO; ?></strong></li>
                            <li>RESPONSABILE: <strong><?php echo $model->LEG_UT; ?></strong></li>
                            <li>CREATO IL: <strong><?php echo date('d.m.Y',strtotime($model->D_CRE));?></strong></li>
                            <li>AGGIORNATO IL: <strong><?php echo date('d.m.Y',strtotime($model->D_AGG));?></strong></li>
                            <li>OPENESS RATING: <strong>3/5</strong></li>
                        </ul>
                    </div>
                </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <div class="background-white">
                             <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $model->IMG_DETT ) . '" />'; ?>
                          </div>
                        
                      </div>
                 </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-pencil"></i>Descrizione</h4>
                          <p class="background-white"><?php echo $model->DESCRIZIONE; ?></p>
                      </div>
                 </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-list"></i>Attività</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Comunità <span class="right"><i class="fi-star blu"></i> <i class="fi-star blu"></i> <i class="fi-star gray"></i> <i class="fi-star gray"></i> <i class="fi-star gray"></i></span></li>
                              <li>La tua valutazione <span class="right"><i class="fi-star blu"></i> <i class="fi-star blu"></i> <i class="fi-star blu"></i> <i class="fi-star gray"></i> <i class="fi-star gray"></i></span></li>
                              <li>Votanti <span class="right">34</span></li>
                              <li>Visite <span class="right">1123</span></li>
                              <li>Download <span class="right">12</span></li>
                              <li>Commenti <span class="right">0</span></li>
                          </ul>
                      </div>
                 </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-page-filled"></i>Meta</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Categoria <span class="right"><?php echo $model->AREA; ?></span></li>
                              <li>Tags<span class="right"><?php echo $model->DESCRIZIONE; ?></span></li>
                              <li>Numero di record <span class="right">121</span></li>                            
                          </ul>
                      </div>
                 </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-link"></i>Link</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Permalink <span class="right">http://zzzz</span></li>
                              <li>Url breve<span class="right">http://goo.gl/YEhdD</span></li>                                                     
                          </ul>
                      </div>
                 </div>
                
                <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-link"></i>Proprietà e licenza</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Dati forniti da <span class="right">Roma Capitale</span></li>
                              <li>Licenza<span class="right"><?php echo $model->LICENZA; ?></span></li>                                                     
                          </ul>
                      </div>
                 </div>
                
                <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-link"></i>Frequenza di aggiornamento</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Frequenza <span class="right"><?php echo $model->TIPO_AGG; ?></span></li>
                              <li>Data ultimo aggiornamento<span class="right"><?php echo date('d/m/Y',strtotime($model->D_AGG));?></span></li>                                                     
                          </ul>
                      </div>
                 </div>
                
                 <div class="row padding-top-20 padding-bottom-20">
                     <div class="large-12 columns"></div>
                 </div>
                
            </div>
            <!-- /switch content -->
             <div class="switch-content hide" id="export">
                 <h3>Esporta</h3>
                    <ul class="accordion" data-accordion>
                        <li class="accordion-navigation">
                          <a href="#panel1a">Scarica</a>
                          <div id="panel1a" class="content active">
                              Il dataset è disponibile nei seguenti formati <br /><br />
                                <ul class="no-bullet list-simple-min">
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=csv&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> CSV</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=xls&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> XLS</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=xlsx&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> XLSX</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=sql&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> SQL</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=xml&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> XML</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=rdf&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> RDF</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=json&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> JSON</a></li>
                                    <li><a href="http://130.211.179.228/odm/export/export.php?tipo=struttura&idTab=<?php echo $model->TAB; ?>" class="button tiny secondary"><i class="icon-download"></i> STRUTTURA</a></li>
                                </ul>
                          </div>
                        </li>
                        <li class="accordion-navigation">
                          <a href="#panel2a">RESTFull API</a>
                          <div id="panel2a" class="content">
                              In allestimento
                           </div>
                        </li>
                        <li class="accordion-navigation">
                          <a href="#panel3a">Stampa</a>
                          <div id="panel3a" class="content">
                              In allestimento
                              </div>
                        </li>
                      </ul>
            </div>
            
        </div>
    </div>
    
</section>

<?php
//cdn.datatables.net/plug-ins/1.10.7/integration/foundation/dataTables.foundation.css
//cdn.datatables.net/plug-ins/1.10.7/integration/foundation/dataTables.foundation.js
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/datatables-plugins/integration/foundation/dataTables.foundation.min.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/element-switcher/element-switcher.js',CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/datatables-plugins/integration/foundation/dataTables.foundation.css');
?>

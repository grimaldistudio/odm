<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->pageTitle=Yii::app()->name;
?>

<section class="dataset clearfix">
    
<div class="row-fluid clearfix padding-top-10">
    
      
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
    
    <div class="row-fluid clearfix">
   
    
         <div class="large-12 columns">
              
             <div class="right">   
                 
                 <div class="button-bar"> 
                     
                      
                
                        <ul class="button-group"> 
                            <li><input type="search" class="" placeholder="Cerca nel dataset" id="opendatasearch" aria-controls="DataTables_Table_0" /></li>
                         <li><a href="#" data-switch-rel="info" data-animation-speed="700" class="button secondary tiny switch-btn"><i class="icon-info"></i> Informazioni</a></li>
                         <li><a href="#" data-target="#" data-switch-rel="export" data-animation-speed="700" class="button secondary tiny switch-btn"><i class="icon-download"></i> Esporta</a></li>
                         <li><a href="#" data-switch-rel="embed" data-animation-speed="700" class="button secondary tiny switch-btn"><i class="icon-code"></i> Incorpora</a></li>
                         <li><a href="#" class="button secondary tiny"><i class="icon-vector"></i> Altre Fonti</a></li>
                         <li><a href="#" class="button secondary tiny"><i class="icon-bubbles"></i> Discuti</a></li>
                       </ul>
                     
                     
                 </div>
             </div>
         </div>
    </div>
    
    <div class="row-fluid large-collapse margin-top-10">
        <div class="large-9 columns">
            <div style="width:100%;">
            <?php 
            
            $this->widget('zii.widgets.grid.CGridView', array(
                'htmlOptions' => array('id'=>'datatable'),
                 'cssFile' =>  Yii::app()->theme->baseUrl.'/assets/css/grid.css',
                 'template' => '{items} {pager}',
                 'itemsCssClass' => 'display compact',
                 'dataProvider'=>$dataProvider,
            ));
                      
            ?>
            </div>
        </div>
        
        <div class="large-3 columns">
            <!-- switch content -->
            <div class="switch-content " id="info">
                <h3>Informazioni</h3>
                <div class="switch-body-content">
                    
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
                            <li>OPENESS RATING: <img src="http://lab.linkeddata.deri.ie/2010/lod-badges/img/data-badge-4.png" alt="four star open Web data" /></li>
                        </ul>
                    </div>
                </div>
    
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <div class="background-white">
                             <?php echo '<img src="data:image/jpeg;base64,' .  $model->IMG_DETT  . '" />'; ?>                             
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
                              <?php 
                              if($data['modelstats']->voters > 0) {
                              $comunity_rating = round($data['modelstats']->rating/$data['modelstats']->voters);
                              $comunity_rating_star = $comunity_rating/2;
                              }
                              ?>
                              <li>Comunità <span class="right">
                                      <?php
                                            $this->widget('CStarRating',array(
                                                        'name'=>'star_rating_comunity',
                                                        'value'=>$comunity_rating_star,
                                                        'readOnly'=>true,
                                                        ));
                                            ?>
                                     </span>
                              </li>
                              <li>La tua valutazione 
                                  <span class="right">
                                  <?php
                                    $this->widget('CStarRating',array(
                                        'name'=>'star_rating_ajax',
                                       'maxRating'=>5,
                                        'callback'=>'
                                            function(){
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "'.Yii::app()->createUrl('stats/rating').'",
                                                        data: "codice='.$model->CODICE.'&star_rating=" + $(this).val(),
                                                        success: function(data){
                                                                    $("#mystar_voting").html(data);
                                                                    $("#stats_voters").text( parseInt($("#stats_voters").text())+1 );
                                                            }})}'
                                      ));
                                    echo "<br/>";
                                    echo "<div id='mystar_voting'></div>";
                                    ?>
                                  </span>
                                 </li>
                              <li>Votanti <span class="right" id="stats_voters"><?php echo $data['modelstats']->voters; ?></span></li>
                              <li>Visite <span class="right"><?php echo $data['modelstats']->views; ?></span></li>
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
                              <li>Tags<span class="right"><?php echo $model->LTAG; ?></span></li>
                              <li>Numero di record <span class="right"><?php echo $dataProvider->totalItemCount;?></span></li>                            
                          </ul>
                      </div>
                 </div>
                
                 <div class="row margin-top-20">
                      <div class="large-12 columns">
                          <h4><i class="fi-link"></i>Link</h4>
                          <ul class="no-bullet background-white list-simple">
                              <li>Permalink <span class="right"><?php echo Yii::app()->request->hostInfo . Yii::app()->request->url; ?></span></li>
                              <li>Url breve<span class="right"><?php Yii::app()->shorturl->short(Yii::app()->request->hostInfo . Yii::app()->request->url); ?></span></li>                                                     
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
            
            
              <!-- /switch content -->
             <div class="switch-content hide" id="embed">
                 <h3>Incorpora</h3>
                    <ul class="accordion" data-accordion>
                        <li class="accordion-navigation">
                         
                          <div id="panel1a" class="content active">                             
                             <p class="background-white">Utilizza il codice per pubblicare questo dataset su altri siti web.</p>
                             
                             <label for="embed_odm_code">Incorpora questo dataset</label>
                               
                             <textarea name="embed_odm_code" rows="10"><div><iframe width="500px" title="<?php echo $model->TITOLO; ?>" height="425px" src="#" frameborder="0"scrolling="no"><a href="" title="<?php echo $model->TITOLO; ?>" target="_blank"><?php echo $model->TITOLO; ?></a></iframe></div></textarea>
                                
                          </div>
                        </li>
                        
                      </ul>
            </div>
            
        </div>
    </div>
    
    <span style="display:none;" id="yiiGetUrl"><?php echo Yii::app()->getRequest()->getUrl();  ?></span>
</section>

<?php
$cs = Yii::app()->getClientScript();

$cs->registerScriptFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/datatables.min.js", CClientScript::POS_END);
$cs->registerScriptFile('https://cdn.datatables.net/1.10.10/js/dataTables.foundation.min.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/Scroller-1.4.0/js/dataTables.scroller.min.js", CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/vendor/public/element-switcher/element-switcher.js',CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/js/app-dataset.js',CClientScript::POS_END);
$cs->registerCssFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/datatables.min.css");
$cs->registerCssFile(Yii::app()->theme->baseUrl."/assets/vendor/public/DataTables/Scroller-1.4.0/css/scroller.foundation.min.css");
$cs->registerCssFile('https://cdn.datatables.net/1.10.10/css/dataTables.foundation.min.css');


?>

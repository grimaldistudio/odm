<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/favicon.ico" />    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation-icon-fonts/foundation-icons.css" />  
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/slicknav/dist/slicknav.css" />    
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/myvendor/jquery-social-stream/css/dcsns_light.css" />
  
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/entypo-plus/css/entypo-plus.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/simple-line-icons-webfont/simple-line-icons.css" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/custom.css" />
    
    
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/vendor/modernizr.js"></script>
    
     <!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300,200' rel='stylesheet' type='text/css'>
    
  </head>
<body>
    
     <header>   
         
            <div class="row">             
                    <div class="large-12 columns">   

                        <a href="/" class="marker left" title="<?php echo ''; ?>">
                            <figure><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/brand.png" alt="<?php echo ''; ?>" /></figure>
                        </a>           
                                                
                        <nav id="main-menu" class="hide-for-small-down right">
                            <ul class="inline-list">
                                  <li><a href="/">Home</a></li>
                                   <li><a href="/site/catalog">Catalogo</a></li>
                                   <li>
                                       <a href="#" data-dropdown="drop1" data-options="is_hover:true;" class="small secondary radius button dropdown">Argomenti</a>
                                            <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
                                             <li><a href="#">Ambiente (128)</a></li>
                                             <li><a href="#">Attività produttive (56)</a></li>
                                             <li><a href="#">Cultura (32)</a></li>
                                            </ul>
                                   </li>
                                   <li><a href="#">Sviluppatori</a></li>
                                   <li><a href="#">Contatti</a></li>  
                                   <li class="socialize"><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                             </ul>
                        </nav>                                       
                        
                        <section id="mobile-main-menu" class="show-for-small-down"></section>                          
                    </div>   
            </div>
         
      </header>
    
    <section class="home-awesome margin-bottom-20 clearfix">       
            <figure><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/awesome.jpg" /></figure>
    </section>

	<?php echo $content; ?>
    
    
    
     <footer>
        <div class="row">
            <div class="large-12 columns">               
                <div class="text-right">
                    <p>
                        &copy; <?php echo date("Y"); ?> ID installazione <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/odm.png" />
                    </p>
                </div>
                    
            </div>
        </div>
    </footer>

    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/vendor/jquery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/foundation.min.js"></script>  
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/foundation/foundation.interchange.js"></script>    
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/foundation/foundation.topbar.js"></script>   
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/slick/dist/slick.min.js"></script> 
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/slicknav/dist/jquery.slicknav.min.js"></script>   
     
     <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/myvendor/jquery-social-stream/js/jquery.social.stream.1.5.4.js"></script>
    
    <script>
      $(document).foundation();
      
       $(function(){
		$('#main-menu').slicknav(
                {          
                    label: '',
                    duration: 600,                   
                    prependTo:'#mobile-main-menu'
                }        
                );
	});
      
     /*
        
        $(document).ready(function(){
        
        $('#social-stream-fb').dcSocialStream({
                            feeds: {
                                    facebook: {
                                            id: '976057482409511',
                                            out: 'intro,title,share,text',
                                            text: 'contentSnippet',
                                    },			
                            },
                            speed: 1000,
                            height: 450,
                            filter: false,
                            limit:	10,
                            max: 'limit',
                            rotate: {
                                    direction: 'up',
                                    delay: 10000
                            },

                            iconPath: '<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/jquery-social-stream/images/dcsns-dark/',
                            imagePath: '<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/jquery-social-stream/images/dcsns-light-1/'		
                    });          
                   
                    });
                     */
            

    </script>

  </body>
</html>

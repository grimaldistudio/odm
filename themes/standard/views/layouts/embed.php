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
   
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/custom.css" />
    
    
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/vendor/modernizr.js"></script>
    
     <!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300,200' rel='stylesheet' type='text/css'>
      
  </head>
<body>
    
     <header>   
         
            <div class="row-fluid">             
                    <div class="large-12 columns">   

                        <a href="/" class="marker left" title="<?php echo ''; ?>">
                           <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/brand.png" alt="" />
                        </a>           
                      
                    </div>   
            </div>
         
      </header>
    

	<?php echo $content; ?>
    
    
        
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/vendor/public/foundation/js/foundation.min.js"></script>  

   
    <script>
      $(document).foundation();
      
      
   </script>
        
  </body>
</html>
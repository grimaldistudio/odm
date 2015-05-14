<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="row">
    <div class="large-12 columns margin-top-40 margin-bottom-40 error-message">
        
        <div class="left">
             <i class="icon icon-directions"></i>
        </div>
        
        <div class="message-1">
            <h2>Error <?php echo $code; ?></h2>
                <?php echo CHtml::encode($message); ?>
        </div>
            
            
           
        </div>
    </div>
</div>
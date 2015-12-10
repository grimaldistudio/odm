<?php echo CHtml::beginForm($url, 'get', $htmlOptions) ?>
 <div class="row collapse">
         <label> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/arrow_down.png" alt="" class="arrow-search" /> </label>
        <div class="small-10 columns">
          <input type="text" id="q" name="q" placeholder="cerca nei dataset" />
        </div>
        <div class="small-2 columns">
            <button class="button postfix" type="submit"><i class="icon-magnifier"></i></button>
        </div>
      </div>
	
<?php echo CHtml::endForm() ?>


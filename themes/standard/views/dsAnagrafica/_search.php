<?php
/* @var $this DsAnagraficaController */
/* @var $model DsAnagrafica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CODICE'); ?>
		<?php echo $form->textField($model,'CODICE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PA_ATTIVA'); ?>
		<?php echo $form->textField($model,'ID_PA_ATTIVA',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATO'); ?>
		<?php echo $form->textField($model,'STATO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVIDE'); ?>
		<?php echo $form->textField($model,'EVIDE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITOLO'); ?>
		<?php echo $form->textField($model,'TITOLO',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AREA'); ?>
		<?php echo $form->textField($model,'AREA',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SOTTOAREA'); ?>
		<?php echo $form->textField($model,'SOTTOAREA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_AGG'); ?>
		<?php echo $form->textField($model,'TIPO_AGG',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_CRE'); ?>
		<?php echo $form->textField($model,'D_CRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIZIONE'); ?>
		<?php echo $form->textField($model,'DESCRIZIONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LICENZA'); ?>
		<?php echo $form->textField($model,'LICENZA',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROPRIETARIO'); ?>
		<?php echo $form->textField($model,'PROPRIETARIO',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEG_APP'); ?>
		<?php echo $form->textField($model,'LEG_APP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEG_UT'); ?>
		<?php echo $form->textField($model,'LEG_UT',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEG_D'); ?>
		<?php echo $form->textField($model,'LEG_D'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LTAG'); ?>
		<?php echo $form->textArea($model,'LTAG',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAB'); ?>
		<?php echo $form->textField($model,'TAB',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMG_DETT'); ?>
		<?php echo $form->textField($model,'IMG_DETT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'D_AGG'); ?>
		<?php echo $form->textField($model,'D_AGG'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
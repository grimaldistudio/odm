<?php
/* @var $this DsAnagraficaController */
/* @var $data DsAnagrafica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODICE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CODICE), array('view', 'id'=>$data->CODICE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PA_ATTIVA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PA_ATTIVA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATO')); ?>:</b>
	<?php echo CHtml::encode($data->STATO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVIDE')); ?>:</b>
	<?php echo CHtml::encode($data->EVIDE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITOLO')); ?>:</b>
	<?php echo CHtml::encode($data->TITOLO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AREA')); ?>:</b>
	<?php echo CHtml::encode($data->AREA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOTTOAREA')); ?>:</b>
	<?php echo CHtml::encode($data->SOTTOAREA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_AGG')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_AGG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_CRE')); ?>:</b>
	<?php echo CHtml::encode($data->D_CRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIZIONE')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIZIONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LICENZA')); ?>:</b>
	<?php echo CHtml::encode($data->LICENZA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROPRIETARIO')); ?>:</b>
	<?php echo CHtml::encode($data->PROPRIETARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEG_APP')); ?>:</b>
	<?php echo CHtml::encode($data->LEG_APP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEG_UT')); ?>:</b>
	<?php echo CHtml::encode($data->LEG_UT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEG_D')); ?>:</b>
	<?php echo CHtml::encode($data->LEG_D); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LTAG')); ?>:</b>
	<?php echo CHtml::encode($data->LTAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAB')); ?>:</b>
	<?php echo CHtml::encode($data->TAB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMG_DETT')); ?>:</b>
	<?php echo CHtml::encode($data->IMG_DETT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('D_AGG')); ?>:</b>
	<?php echo CHtml::encode($data->D_AGG); ?>
	<br />

	*/ ?>

</div>
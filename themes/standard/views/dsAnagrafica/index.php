<?php
/* @var $this DsAnagraficaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ds Anagraficas',
);

$this->menu=array(
	array('label'=>'Create DsAnagrafica', 'url'=>array('create')),
	array('label'=>'Manage DsAnagrafica', 'url'=>array('admin')),
);
?>

<h1>Ds Anagraficas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

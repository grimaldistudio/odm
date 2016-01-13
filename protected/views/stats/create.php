<?php
/* @var $this StatsController */
/* @var $model Stats */

$this->breadcrumbs=array(
	'Stats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stats', 'url'=>array('index')),
	array('label'=>'Manage Stats', 'url'=>array('admin')),
);
?>

<h1>Create Stats</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
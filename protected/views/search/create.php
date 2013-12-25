<?php
/* @var $this SearchController */
/* @var $model Search */

$this->breadcrumbs=array(
	'Searches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Search', 'url'=>array('index')),
	array('label'=>'Manage Search', 'url'=>array('admin')),
);
?>

<h1>Create Search</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
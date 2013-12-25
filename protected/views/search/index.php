<?php
/* @var $this SearchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Searches',
);

$this->menu=array(
	array('label'=>'Create Search', 'url'=>array('create')),
	array('label'=>'Manage Search', 'url'=>array('admin')),
);
?>

<h1>Searches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

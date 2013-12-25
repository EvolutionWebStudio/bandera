<?php
/* @var $this SearchController */
/* @var $model Search */

$this->breadcrumbs=array(
	'Searches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Search', 'url'=>array('index')),
	array('label'=>'Create Search', 'url'=>array('create')),
	array('label'=>'View Search', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Search', 'url'=>array('admin')),
);
?>

<h1>Update Search <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this UserController */
/* @var $model User */

?>

    <h1>Complete profile <?php echo $model->id; ?></h1>

<?php $this->renderPartial('complete_form', array('model'=>$model)); ?>
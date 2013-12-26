<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'name_surname'); ?>
        <?php echo $form->textField($model,'name_surname',array('size'=>60,'maxlength'=>180)); ?>
        <?php echo $form->error($model,'name_surname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'avatar'); ?>
        <?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'avatar'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'city_ptt'); ?>
        <?php
        $list = CHtml::listData(City::model()->findAll(), 'ptt', 'name'); //table_col_name1 is value of option, table_col_name2 is label of option
        // echo $form->dropDownList($model, 'product_type_id', $list);
        echo CHtml::dropDownList('User[city_ptt]', $model, $list);
        ?>
        <?php echo $form->error($model,'city_ptt'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'phone'); ?>
        <?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'phone'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
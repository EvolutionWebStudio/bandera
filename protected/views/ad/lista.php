<?php
/* @var $this AdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ads',
);

$this->menu=array(
	array('label'=>'Create Ad', 'url'=>array('create')),
	array('label'=>'Manage Ad', 'url'=>array('admin')),
);
?>
<div class="large-12 columns">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'ad-form',
                                                            
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>
    <div class="large-4 columns">
        <?php
        $list = CHtml::listData(City::model()->findAll(), 'ptt', 'name'); //table_col_name1 is value of option, table_col_name2 is label of option
        // echo $form->dropDownList($model, 'product_type_id', $list);
        echo CHtml::dropDownList('User[city_ptt]', City::model(), $list);
        ?>
        <?php echo $form->error(City::model(),'city_ptt'); ?>
    </div>
        <div class="large-1 columns">
                <?php echo CHtml::submitButton('pretrazi',array('class' => 'button small postfix')); ?>
        </div>
        <div class="large-7 columns">

        </div>
    <?php $this->endWidget(); ?>
</div>

<div class="main-content large-12 columns">
    <div class="row">
        <aside class="large-3 columns">
            <div class="filter-wrapper panel">
                <ul class="">
                    <li>Opcija 1</li>
                    <li>Opcija 2</li>
                    <li>Opcija 3</li>
                    <li>Opcija 4</li>
                    <li>Opcija 5</li>
                    <li>Opcija 6</li>
                    <li>Opcija 7</li>
                    <li>Opcija 8</li>
                    <li>Opcija 9</li>
                    <li>Opcija 10</li>
                </ul>
            </div>

        </aside>

        <section class="offers-list large-9 columns">
            <div class="row">
                <div class="large-12 columns">
                    <?php foreach($ads as $ad): ?>
                    <div class="offers-item clearfix">
                        <div class="item-thumbnail large-4 columns">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt=""/>
                        </div>
                        <div class="item-info large-6 columns">
                            <h2 class="item-title"><?php echo $ad->title; ?></h2>
                            <P class="item-description"><?php echo $ad->content; ?></P>
                        </div>
                        <div class="item-options large-2 columns">
                            <div class="item-price"><?php echo $ad->price; ?> KM</div>
                            <a class="button small" href="#">Pogledaj</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</div>

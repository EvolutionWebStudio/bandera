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
<div class="page-wrapper row">
    <div class="page-header large-12 columns">
        <div class="large-4 columns">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'action'=>Yii::app()->createUrl($this->route),
            'method'=>'get',
             )); ?>
            <div class="row collapse">
                <div class="large-9 columns">
                    <?php
                    $list = CHtml::listData(City::model()->findAll(), 'ptt', 'name');
                    echo $form->dropDownList($model, 'city_ptt', $list);
                    ?>
                    <?php echo $form->error($model,'city_ptt'); ?>
                </div>
                <div class="large-3 columns">
                    <?php echo CHtml::submitButton('pretrazi',array('class' => 'button small postfix')); ?>
                </div>
            </div>

        </div>
        <div class="large-8 columns">
            <nav class="main-menu">
                <?php echo CHtml::link('Lista oglasa', array('ad/lista_oglasa'), array('class' => 'button small secondary')); ?>
                <?php echo CHtml::link('Dodaj oglas', array('ad/create'), array('class' => 'button small')); ?>
            </nav>
        </div>
        <?php $this->endWidget(); ?>
    </div>

    <div class="main-content large-12 columns">
        <div class="row">
            <aside class="large-3 columns">
                <section class="widget">
                    <h3>Opcije</h3>
                    <ul class="filter">
                        <?php echo CHtml::checkBoxList('opcije', '', array('kupatilo' => 'Kupatilo', 'kuhinja' => 'Kuhinja'), array('template' => '<li>{input} {label}</li>', 'separator' => '')) ?>
                    </ul>
                </section>
            </aside>

            <div class="offers-list large-9 columns">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="main-map panel2" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //Yii::app()->clientScript->registerScriptFile('http://maps.googleapis.com/maps/api/js?sensor=true', CClientScript::POS_END); ?>
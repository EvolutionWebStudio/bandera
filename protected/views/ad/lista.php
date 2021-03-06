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
                <?php echo CHtml::link('Interaktivna mapa', array('ad/mapa_oglasa'), array('class' => 'button small secondary')); ?>
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
                        <?php foreach($ads as $ad): ?>
                        <article class="offers-item clearfix panel2">
                            <div class="item-thumbnail large-4 columns">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt=""/>
                            </div>
                            <div class="item-info large-5 columns">
                                <h2 class="item-title"><?php echo $ad->title; ?></h2>
                                <P class="item-description"><?php echo $ad->content; ?></P>
                            </div>
                            <div class="item-options large-3 columns">
                                <ul class="checkmark">
                                    <li class="checked">Kupatilo</li>
                                    <li class="unchecked">Rezije</li>
                                    <li class="unchecked">Internet</li>
                                    <li class="checked">Kuhinja</li>
                                </ul>
                                    <div class="item-price"><?php echo $ad->price; ?> KM</div>

                                <?php echo Chtml::link('Pogledaj', array('ad/view?id='.$ad->id), array('class' => 'item-cta button')); ?>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
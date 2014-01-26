<?php
/* @var $this AdController */
/* @var $model Ad */
?>

<div class="page-wrapper row">
    <div class="page-header large-12 columns">
        <div class="large-4 columns">

        </div>
        <div class="large-8 columns">
            <nav class="main-menu">
                <?php echo CHtml::link('Interaktivna mapa', array('ad/mapa_oglasa'), array('class' => 'button small secondary')); ?>
                <?php echo CHtml::link('Lista oglasa', array('ad/lista_oglasa'), array('class' => 'button small secondary')) ?>
                <?php echo CHtml::link('Dodaj oglas', array('ad/create'), array('class' => 'button small')); ?>
            </nav>
        </div>

    </div>
    <div class="main-content large-12 columns">
        <div class="row">
            <div class="large-5 columns single-item">
                <h2><?php echo $ad->title; ?></h2>
                <p><?php echo $ad->content; ?></p>

                <div class="panel">
                    <h3>Opcije</h3>
                    <ul class="">
                        <?php ?>
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

                <div class="panel clearfix">
                    <div class="large-6 columns">
                        <div class="item-price"><?php echo $ad->price; ?> KM</div>
                    </div>
                    <div class="large-6 columns">
                        <?php echo CHtml::link('Kontaktiraj vlasnika', '#', array('class' => 'button small')) ?>
                    </div>
                </div>
            </div>

            <div class="large-7 columns single-item">
                <div class="panel2 map" id="map">

                </div>

                <ul class="large-block-grid-4">
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt="Mapa lokacije"/></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt="Mapa lokacije"/></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt="Mapa lokacije"/></li>
                    <li><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt="Mapa lokacije"/></li>
                </ul>

            </div>
            <div class="large-12 columns">

            </div>
        </div>
    </div>
</div>

<?php //Yii::app()->clientScript->registerScriptFile('http://maps.googleapis.com/maps/api/js?sensor=true', CClientScript::POS_END); ?>
<?php //Yii::app()->clientScript->registerScript("embedMap('map', 43.866218, 17.325439, 7)"); ?>
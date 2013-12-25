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
    <form action="#" class="row panel">
        <div class="large-4 columns">
            <select name="city">
                <option>Istocno Sarajevo</option>
                <option>Banja Luka</option>
                <option>Bijeljina</option>
            </select>
        </div>
        <div class="large-1 columns">
            <a href="#" class="button small postfix">Pretrazi</a>
        </div>
        <div class="large-7 columns">

        </div>
    </form>
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
                    <div class="offers-item clearfix">
                        <div class="item-thumbnail large-4 columns">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt=""/>
                        </div>
                        <div class="item-info large-6 columns">
                            <h2 class="item-title">Naslov oglasa</h2>
                            <P class="item-description">Opis oglasa, drzi ne daj</P>
                        </div>
                        <div class="item-options large-2 columns">
                            <div class="item-price">150 KM</div>
                            <a class="button small" href="#">Pogledaj</a>
                        </div>
                    </div>

                    <div class="offers-item clearfix">
                        <div class="item-thumbnail large-4 columns">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/empty.gif" alt=""/>
                        </div>
                        <div class="item-info large-6 columns">
                            <h2 class="item-title">Naslov oglasa</h2>
                            <P class="item-description">Opis oglasa, drzi ne daj</P>
                        </div>
                        <div class="item-options large-2 columns">
                            <div class="item-price">150 KM</div>
                            <a class="button small" href="#">Pogledaj</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

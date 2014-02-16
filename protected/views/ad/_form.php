<?php Yii::app()->clientScript->registerScriptFile('http://maps.googleapis.com/maps/api/js?sensor=true', CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile('/js/ad/create.js', CClientScript::POS_END);?>
<?php
/* @var $this AdController */
/* @var $model Ad */
/* @var $form CActiveForm */
?>

<div class="form row">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="medium-10 columns">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

    <div class="medium-2 columns">
        <?php echo $form->labelEx($model,'is_active'); ?>
        <?php echo $form->checkBox($model,'is_active',array('value'=>1, 'uncheckValue'=>0)); ?>
        <?php echo $form->error($model,'is_active'); ?>
    </div>

	<div class="medium-12 columns">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>



	<div class="row">
		<?php echo $form->hiddenField($model,'latitude',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'longitude',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

    <div class="columns medium-4">
        <?php echo $form->labelEx($model,'price'); ?>
        <?php echo $form->textField($model,'price',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'price'); ?>
    </div>

    <div class="medium-2 columns">
        <?php echo $form->labelEx($model,'city_ptt'); ?>
        <?php
        $list = CHtml::listData(City::model()->findAll(), 'ptt', 'name');
        echo CHtml::dropDownList('Ad[city_ptt]', $model, $list);
        ?>
        <?php echo $form->error($model,'city_ptt'); ?>
    </div>

	<div class="medium-6 columns">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>


	<div class="medium-12 columns options">
        <div class="medium-4 columns">
             <label>Tip smjestaja</label>
            <select name="Options[type]">
                <option value="<?php echo Options::TYPE_STAN; ?>"><?php echo Options::TYPE_STAN; ?></option>
                <option value="<?php echo Options::TYPE_SOBA; ?>"><?php echo Options::TYPE_SOBA; ?></option>
                <option value="<?php echo Options::TYPE_STANUKUCI; ?>"><?php echo Options::TYPE_STANUKUCI; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>Grijanje</label>
            <select name="Options[heating]">
                <option value="<?php echo Options::HEATING_CENTRALNO; ?>"><?php echo Options::HEATING_CENTRALNO; ?></option>
                <option value="<?php echo Options::HEATING_STRUJA; ?>"><?php echo Options::HEATING_STRUJA; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>Broj kreveta</label>
            <select name="Options[beds]">
                <option value="<?php echo Options::BEDS_JEDAN; ?>"><?php echo Options::BEDS_JEDAN; ?></option>
                <option value="<?php echo Options::BEDS_DVA; ?>"><?php echo Options::BEDS_DVA; ?></option>
                <option value="<?php echo Options::BEDS_TRI; ?>"><?php echo Options::BEDS_TRI; ?></option>
                <option value="<?php echo Options::BEDS_CETRI; ?>"><?php echo Options::BEDS_CETRI; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>Kuhinja</label>
            <select name="Options[kitchen]">
                <option value="<?php echo Options::KITCHEN_ZAJEDNICKA; ?>"><?php echo Options::KITCHEN_ZAJEDNICKA; ?></option>
                <option value="<?php echo Options::KITCHEN_ZASEBNA; ?>"><?php echo Options::KITCHEN_ZASEBNA; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>Ulaz</label>
            <select name="Options[entery]">
                <option value="<?php echo Options::ENTERY_ZAJEDNICKI; ?>"><?php echo Options::ENTERY_ZAJEDNICKI; ?></option>
                <option value="<?php echo Options::ENTERY_ZASEBAN; ?>"><?php echo Options::ENTERY_ZASEBAN; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>WC</label>
            <select name="Options[bathroom]">
                <option value="<?php echo Options::BATHROOM_ZAJEDNICKI; ?>"><?php echo Options::BATHROOM_ZAJEDNICKI; ?></option>
                <option value="<?php echo Options::BATHROOM_ZASEBAN; ?>"><?php echo Options::BATHROOM_ZASEBAN; ?></option>
            </select>
        </div>
        <div class="medium-4 columns">
            <label>Sprat</label>
            <select name="Options[floor]">
                <option value="<?php echo Options::FLOOR_PRIZEMLJE; ?>"><?php echo Options::FLOOR_PRIZEMLJE; ?></option>
                <option value="<?php echo Options::FLOOR_PRVI; ?>"><?php echo Options::FLOOR_PRVI; ?></option>
                <option value="<?php echo Options::FLOOR_DRUGI; ?>"><?php echo Options::FLOOR_DRUGI; ?></option>
                <option value="<?php echo Options::FLOOR_TRECI; ?>"><?php echo Options::FLOOR_TRECI; ?></option>
            </select>
        </div>
        <div class="medium-8 columns">
            <input type="checkbox" name="Options[tv]" value="1"> TV
            <input type="checkbox" name="Options[internet]" value="1"> Internet
            <input type="checkbox" name="Options[phone]" value="1"> Telefon
            <input type="checkbox" name="Options[balcony]" value="1">Balkon<br />
            <input type="checkbox" name="Options[air_conditioning]" value="1">Klima<br />
        </div>
	</div>

    <div class="large-12 columns">
        <div class="main-map panel2" id="map"></div>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->

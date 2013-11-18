<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_surname')); ?>:</b>
	<?php echo CHtml::encode($data->name_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_date')); ?>:</b>
	<?php echo CHtml::encode($data->registration_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_activity')); ?>:</b>
	<?php echo CHtml::encode($data->last_activity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('premium')); ?>:</b>
	<?php echo CHtml::encode($data->premium); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_ptt')); ?>:</b>
	<?php echo CHtml::encode($data->city_ptt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	*/ ?>

</div>
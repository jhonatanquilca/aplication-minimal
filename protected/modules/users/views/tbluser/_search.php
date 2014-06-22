<?php
/** @var TbluserController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
<div class="col-lg-12">
       <?php echo $form->textFieldRow($model, 'id'); ?>
           <?php echo $form->textFieldRow($model, 'username', array('maxlength' => 128)); ?>
</div>
<div class="col-lg-12">
       <?php echo $form->textFieldRow($model, 'email', array('maxlength' => 128)); ?>
    </div><div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>

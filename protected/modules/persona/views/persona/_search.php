<?php
/** @var PersonaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
<div class="col-lg-12">
       <?php echo $form->textFieldRow($model, 'id'); ?>
           <?php echo $form->textFieldRow($model, 'ci', array('maxlength' => 10)); ?>
</div>
<div class="col-lg-12">
       <?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 20)); ?>
           <?php echo $form->textFieldRow($model, 'apellido', array('maxlength' => 20)); ?>
</div>
<div class="col-lg-12">
       <?php echo $form->textFieldRow($model, 'domicilio', array('maxlength' => 50)); ?>
           <?php echo $form->dropDownListRow($model, 'estado', array('Casado/a' => 'Casado/a','Soltero/a' => 'Soltero/a','viudo/a' => 'viudo/a',)); ?>
</div>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>

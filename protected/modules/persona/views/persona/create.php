<?php
/** @var PersonaController $this */
/** @var Persona $model */

$this->menu=array(
  //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Persona::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
      array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Persona::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
//    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
);
?>

<fieldset>
    <!--<legend><?php // echo Yii::t('AweCrud.app', 'Create') . ' ' . Persona::label(); ?></legend>-->
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</fieldset>
<?php
/** @var PersonaController $this */
/** @var Persona $model */

$this->menu=array(
  //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Persona::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
      array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Persona::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
      array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('persona-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
echo '<br/>';
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Persona::label(2) ?>
    </legend>
<div class="well">


<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'persona-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'ci',
        'nombre',
        'apellido',
        'domicilio',
        array(
                    'name' => 'estado',
                    'filter' => array('Casado/a'=>'Casado/a','Soltero/a'=>'Soltero/a','viudo/a'=>'viudo/a',),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
</fieldset>
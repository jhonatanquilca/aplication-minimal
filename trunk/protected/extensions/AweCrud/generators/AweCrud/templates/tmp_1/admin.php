<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
/** @var AweCrudCode $this */
?>
<?php echo "<?php\n" ?>
/** @var <?php echo $this->controllerClass; ?> $this */
/** @var <?php echo $this->modelClass; ?> $model */
<?php
$label=$this->pluralize($this->class2name($this->modelClass));
//echo "\$this->breadcrumbs=array(
//	'$label'=>array('index'),
//	Yii::t('AweCrud.app', 'Manage'),
//);\n";
?>

$this->menu=array(
  //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . <?php echo $this->modelClass ?>::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
      array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . <?php echo $this->modelClass ?>::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
      array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
echo '<br/>';
?>

<fieldset>
    <legend>
        <?php echo "<?php echo Yii::t('AweCrud.app', 'Manage') ?>" ?> <?php echo "<?php echo {$this->modelClass}::label(2) ?>\n" ?>
    </legend>
<div class="well">


<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => '<?php echo $this->class2id($this->modelClass); ?>-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7):?>
        /*<?php echo "\n" ?>
<?php endif; ?>
        <?php echo $this->generateGridViewColumn($this->modelClass, $column).",\n" ?>
<?php
}
if($count>=7):?>
        */<?php echo "\n" ?>
<?php endif; ?>
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
</fieldset>
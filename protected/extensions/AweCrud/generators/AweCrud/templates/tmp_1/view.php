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
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
//echo "\$this->breadcrumbs=array(
//	'$label'=>array('index'),
//	\$model->{$nameColumn},
//);\n";
?>

$this->menu=array(
  //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . <?php echo $this->modelClass ?>::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . <?php echo $this->modelClass ?>::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
//     array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model-><?php echo $this->tableSchema->primaryKey; ?>),'htmlOptions'=>array('class'=>'btn btn-s-md btn-warning'),), 
   //  array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model-><?php echo $this->tableSchema->primaryKey; ?>), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'),),'htmlOptions'=>array('class'=>'btn btn-s-md btn-danger'),),       
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
);
?>

<fieldset>
    <legend><?php echo "<?php echo Yii::t('AweCrud.app', 'View') . ' ' . {$this->modelClass}::label(); ?> <?php //echo CHtml::encode(\$model) ?>" ?></legend>

    <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
    'data' => $model,
    'attributes' => array(
    <?php foreach ($this->tableSchema->columns as $column): ?>
        <?php echo $this->generateDetailViewAttribute($this->modelClass, $column) . ",\n" ?>
    <?php endforeach; ?>
    ),
    )); ?>
</fieldset>
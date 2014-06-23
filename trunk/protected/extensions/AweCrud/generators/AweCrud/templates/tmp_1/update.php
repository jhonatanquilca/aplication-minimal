<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
/** @var AweCrudCode $this  */
?>
<div class="row">
    <div class="col-md-12">
        <?php echo "<?php\n" ?>
        /** @var <?php echo $this->controllerClass; ?> $this */
        /** @var <?php echo $this->modelClass; ?> $model */
        <?php
        $nameColumn = $this->guessNameColumn($this->tableSchema->columns);
        $label = $this->pluralize($this->class2name($this->modelClass));
//echo "\$this->breadcrumbs=array(
//	\$model->label(2) => array('index'),
//	Yii::t('app', \$model->{$nameColumn}) => array('view', 'id'=>\$model->{$this->tableSchema->primaryKey}),
//	Yii::t('AweCrud.app', 'Update'),
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

    </div>
    <?php echo "<!--"; ?><fieldset><?php echo "-->\n"; ?>
        <?php echo "<!--"; ?><legend><?php echo "<?php echo Yii::t('AweCrud.app', 'Update') . ' ' . {$this->modelClass}::label(); ?> <?php //echo CHtml::encode(\$model) ?>" ?></legend><?php echo "-->\n"; ?>
        <?php echo "<?php echo \$this->renderPartial('_form',array('model' => \$model)); ?>" . PHP_EOL; ?>
        <?php echo "<!--"; ?></fieldset><?php echo "-->\n"; ?>

</div>
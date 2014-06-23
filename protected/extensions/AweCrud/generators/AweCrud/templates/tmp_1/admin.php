<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
/** @var AweCrudCode $this */
?>
<div class="row">
    <div class="col-md-12">

        <?php echo "<?php\n" ?>
        /** @var <?php echo $this->controllerClass; ?> $this */
        /** @var <?php echo $this->modelClass; ?> $model */
        <?php
        $label = $this->pluralize($this->class2name($this->modelClass));
//echo "\$this->breadcrumbs=array(
//	'$label'=>array('index'),
//	Yii::t('AweCrud.app', 'Manage'),
//);\n";
        ?>

        $this->menu=array(
        //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . <?php echo $this->modelClass ?>::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
        array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . <?php echo $this->modelClass ?>::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
        //   array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
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
    </div>
    <div class="col-md-12">
        <section class="tile color transparent-black">
            <div class="tile-header">
                <h1><strong>Titulo</strong> Entrada</h1>
                <div class="controls">
                    <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="remove"><i class="fa fa-times"></i></a>
                </div>
            </div>           
            <div class="tile-body color transparent-black rounded-corners">
                <div class="table-responsive">
                    <?php echo "<!--"; ?><fieldset><?php echo "-->\n"; ?>
                        <?php echo "<!--"; ?><legend>
                            <?php echo "<?php echo Yii::t('AweCrud.app', 'Manage') ?>" ?> <?php echo "<?php echo {$this->modelClass}::label(2) ?>\n" ?>
                        </legend><?php echo "-->\n"; ?>
                        <?php echo "<!--"; ?><div class = "well"><?php echo "-->\n";
                        ?>


                            <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
                            'id' => '<?php echo $this->class2id($this->modelClass); ?>-grid',
                           // 'type' => 'striped condensed',
                            'dataProvider' => $model->search(),
                           // 'filter' => $model,
                            'columns' => array(
                            <?php
                            $count = 0;
                            foreach ($this->tableSchema->columns as $column) {
                                if (++$count == 7):
                                    ?>
                                    /*<?php echo "\n" ?>
                                <?php endif; ?>
                                <?php echo $this->generateGridViewColumn($this->modelClass, $column) . ",\n" ?>
                                <?php
                            }
                            if ($count >= 7):
                                ?>
                                */<?php echo "\n" ?>
                            <?php endif; ?>
                            array(
                            'class'=>'bootstrap.widgets.TbButtonColumn',
                            ),
                            ),
                            )); ?>
                        </div>
                </div>
                <?php echo "<!--"; ?></div><?php echo "-->\n"; ?>
            <?php echo "<!--"; ?></fieldset><?php echo "-->\n"; ?>
    </div>

</div>
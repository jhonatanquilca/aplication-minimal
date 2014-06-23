<div class="row">
    <div class="col-md-12">

        <?php
        /** @var TbluserController $this */
        /** @var TblUser $model */
        $this->menu = array(
            //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblUser::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
            array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblUser::label(), 'icon' => 'plus', 'url' => array('create'), 'htmlOptions' => array('class' => 'btn btn-s-md btn-success'),),
                //   array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
        );


        Yii::app()->clientScript->registerScript('search', "
        $('.search-button').click(function(){
        $('.search-form').toggle();
        return false;
        });
        $('.search-form form').submit(function(){
        $.fn.yiiGridView.update('tbl-user-grid', {
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
                    <!--<fieldset>-->
                    <!--<legend>
                    <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TblUser::label(2) ?>
                    </legend>-->
                    <!--<div class = "well">-->


                    <?php
                    $this->widget('bootstrap.widgets.TbGridView', array(
                        'id' => 'tbl-user-grid',
//                            'type' => 'striped condensed',
                        'dataProvider' => $model->search(),
//                            'filter' => $model,
                        'columns' => array(
                            'id',
                            'username',
                            'password',
                            'email',
                            array(
                                'class' => 'bootstrap.widgets.TbButtonColumn',
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
            <!--</div>-->
            <!--</fieldset>-->
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <?php
        /** @var TbluserController $this */
        /** @var TblUser $model */
        
        $this->menu=array(
        //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblUser::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
        //array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblUser::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
            array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
        );
        ?>
    </div>
    <!--<fieldset>-->
        <!--<legend><?php echo Yii::t('AweCrud.app', 'Create') . ' ' . TblUser::label(); ?></legend>-->
        <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
        <!--</fieldset>-->
</div>
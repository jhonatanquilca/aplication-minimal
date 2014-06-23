<div class="row">
    <div class="col-md-12">
        <?php
        /** @var TbluserController $this */
        /** @var TblUser $model */
        
        $this->menu=array(
        //  array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TblUser::label(2), 'icon' => 'list', 'url' => array('index'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-default'),),   
        array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TblUser::label(), 'icon' => 'plus', 'url' => array('create'),'htmlOptions'=>array('class'=>'btn btn-s-md btn-success'),),   
        //     array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id),'htmlOptions'=>array('class'=>'btn btn-s-md btn-warning'),), 
        //  array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'),),'htmlOptions'=>array('class'=>'btn btn-s-md btn-danger'),),       
        array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin'),'htmlOptions'=>array('class'=>'btn btn-default btn-primary'),),   
        );
        ?>

    </div>
    <!--<fieldset>-->
        <!--<legend><?php echo Yii::t('AweCrud.app', 'Update') . ' ' . TblUser::label(); ?> <?php //echo CHtml::encode($model) ?></legend>-->
        <?php echo $this->renderPartial('_form',array('model' => $model)); ?>
        <!--</fieldset>-->

</div>
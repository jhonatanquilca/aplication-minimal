<div class="col-md-12">
    <section class="tile color transparent-black">
        <div class="tile-header">
            <h1><strong>Titulo</strong> Entrada</h1>
            <div class="controls">
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
<!--        <hr/>-->
        <div class="tile-body">
            <?php
            /** @var TbluserController $this */
            /** @var TblUser $model */
            /** @var AweActiveForm $form */
            $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'type' => 'horizontal',
            'id' => 'tbl-user-form',
            'enableAjaxValidation' => true,
            'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
            'enableClientValidation' => false,
            ));?>

            <?php echo $form->errorSummary($model) ?>

            
                
                
                                    <div class="form-group">     
                        <div class="col-sm-8"> 
                            <?php echo $form->textFieldRow($model, 'username', array('maxlength' => 128)) ?>
                        </div>
                    </div>

                                
                            
                
                                    <div class="form-group">     
                        <div class="col-sm-8"> 
                            <?php echo $form->passwordFieldRow($model, 'password', array('maxlength' => 128)) ?>
                        </div>
                    </div>


                                
                            
                
                                    <div class="form-group">     
                        <div class="col-sm-8"> 
                            <?php echo $form->textFieldRow($model, 'email', array('maxlength' => 128)) ?>
                        </div>
                    </div>

                                
                                                                            <div class="form-group form-footer text-center">
                <div class="col-sm-12 text-center">
                                        <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
                    <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)','class'=>'btn-default')
		)); ?>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </section>
</div>

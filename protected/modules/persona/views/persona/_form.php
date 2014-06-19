<div class="col-md-6">

    <section class="tile color transparent-white">
        <div class="tile-header">
            <h1><?php echo Yii::t('AweCrud.app', 'Create') . ' ' . Persona::label(); ?></h1>
            <div class="controls">
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="tile-body">
            <?php
            /** @var PersonaController $this */
            /** @var Persona $model */
            /** @var AweActiveForm $form */
            $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'type' => 'horizontal',
                'id' => 'persona-form',
                'enableAjaxValidation' => true,
                'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
                'enableClientValidation' => false,
            ));
            ?>

            



            <div class="form-group ">
                <?php echo $form->label($model, 'ci', array('label' => 'CI <span class="required">*</span>', 'class' => 'col-sm-4 control-label')) ?>
                <!--<span class="required">*</span>-->
                <div class="col-sm-8">
                    <?php echo $form->textField($model, 'ci', array('maxlength' => 10, 'class' => 'form-control ')) ?>
                    <?php echo $form->error($model,'ci') ?>
                </div>
                
            </div>
            <div class="form-group ">
                <?php echo $form->label($model, 'nombre', array('class' => 'col-sm-4 control-label')) ?>
                <div class="col-sm-8">
                    <?php echo $form->textField($model, 'nombre', array('maxlength' => 20, 'class' => 'form-control')) ?>

                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($model, 'apellido', array('class' => 'col-sm-4 control-label')) ?>
                <div class="col-sm-8">
                    <?php echo $form->textField($model, 'apellido', array('maxlength' => 20, 'class' => 'form-control')) ?>
                </div>
            </div>
            <div class="form-group ">
                <?php echo $form->label($model, 'domicilio', array('label' => 'Domicilio <span class="required">*</span>', 'class' => 'col-sm-4 control-label')) ?>
                <div class="col-sm-8">
                    <?php echo $form->textField($model, 'domicilio', array('maxlength' => 50, 'class' => 'form-control')) ?>

                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($model, 'domicilio', array('label' => 'Estado <span class="required">*</span>', 'class' => 'col-sm-4 control-label')) ?>
                <div class="col-sm-8">
                    <?php echo $form->dropDownList($model, 'estado', array('Casado/a' => 'Casado/a', 'Soltero/a' => 'Soltero/a', 'viudo/a' => 'viudo/a',),array('class'=>'form-control ')) ?>

                </div>    
            </div>    
            <div class="form-group form-footer footer-white">
                <div class="col-sm-offset-4 col-sm-8">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
                    ));
                    ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        //'buttonType'=>'submit',
                        
                        'label' => Yii::t('AweCrud.app', 'Cancel'),
                        'htmlOptions' => array('onclick' => 'javascript:history.go(-1)','class'=>'btn btn-default')
                    ));
                    ?>
                </div>
            </div>




            <?php $this->endWidget(); ?>
        </div>

    </section>
</div>

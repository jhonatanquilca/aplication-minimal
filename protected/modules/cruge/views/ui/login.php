<?php if (Yii::app()->user->hasFlash('loginflash')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('loginflash'); ?>
    </div>
<?php else: ?>

    <h1><strong><?php echo CrugeTranslator::t('logon', 'Login to your account') ?></strong> </h1>
    <!--<h5>Minimal Admin Theme</h5>--> 
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'logon-form',
        'htmlOptions' => array(
            'class' => 'form-signin',
        ),
        'enableClientValidation' => false,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <section>
        <div class="form-group no-margin">
            <!--<label for="CrugeLogon_username">Usuario</label>-->
            <?php echo $form->error($model, 'username'); ?>
            <div class="input-group">

                <?php
                echo $form->textField($model, 'username', array(
                    'placeholder' => CrugeTranslator::t(
                            'logon', 'Username'
                    ), 'class' => 'form-control ')
                );
                ?>
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
            </div>            
        </div>
    </section>
    <section class="form-group no-margin">
        <!--<label for="CrugeLogon_password">Password</label>-->
        <?php echo $form->error($model, 'password'); ?>
        <div class="input-group">

            <?php
            echo $form->passwordField($model, 'password', array(
                'placeholder' => CrugeTranslator::t(
                        'logon', "Password"
                ), 'class' => 'form-control '
            ));
            ?>

            <div class="input-group-addon"><i class="fa fa-key"></i></div>
        </div>        
    </section>

    <section class="controls">
        <div class="checkbox check-transparent">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->labelEx($model, 'rememberMe'); ?>          
        </div>
        
        <div class="forgot">
            <?php echo Yii::app()->user->ui->passwordRecoveryLink; ?>
        </div>

        <section class="log-in text-center">
            <button class="btn btn-greensea" type="submit">
                <?php echo CrugeTranslator::t('logon', "Login") ?>
                <!--<i class="m-icon-swapright m-icon-white"></i>-->                  
            </button>
        </section>
        <script type="text/javascript">

            $('div.forgot>a').attr('class', 'forgot');
        </script>


    </section>

    <?php
    /* if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
      echo Yii::app()->user->ui->registrationLink; */
    ?>
    <?php
    //	si el componente CrugeConnector existe lo usa:
    //
        if (Yii::app()->getComponent('crugeconnector') != null) {
        if (Yii::app()->crugeconnector->hasEnabledClients) {
            ?>
            <div class='crugeconnector'>
                <span><?php echo CrugeTranslator::t('logon', 'You also can login with'); ?>:</span>
                <ul>
                    <?php
                    $cc = Yii::app()->crugeconnector;
                    foreach ($cc->enabledClients as $key => $config) {
                        $image = CHtml::image($cc->getClientDefaultImage($key));
                        echo "<li>" . CHtml::link($image, $cc->getClientLoginUrl($key)) . "</li>";
                    }
                    ?>
                </ul>
            </div>

            <?php
        }
    }
    ?>


    <?php $this->endWidget(); ?>
<?php endif; ?>
   

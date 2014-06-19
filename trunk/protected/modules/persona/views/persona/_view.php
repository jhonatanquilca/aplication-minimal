<?php
/** @var PersonaController $this */
/** @var Persona $data */
?>
<div class="view">
                    
        <?php if (!empty($data->ci)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ci')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ci); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->apellido)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->apellido); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->domicilio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->domicilio); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>
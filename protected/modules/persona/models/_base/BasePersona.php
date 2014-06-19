<?php

/**
 * This is the model base class for the table "persona".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Persona".
 *
 * Columns in table "persona" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $ci
 * @property string $nombre
 * @property string $apellido
 * @property string $domicilio
 * @property string $estado
 *
 */
abstract class BasePersona extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'persona';
    }

    public static function representingColumn() {
        return 'ci';
    }

    public function rules() {
        return array(
            array('ci, domicilio, estado', 'required'),
            array('ci', 'length', 'max'=>10),
            array('nombre, apellido', 'length', 'max'=>20),
            array('domicilio', 'length', 'max'=>50),
            array('estado', 'length', 'max'=>9),
            array('estado', 'in', 'range' => array('Casado/a','Soltero/a','viudo/a')), // enum,
            array('nombre, apellido', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, ci, nombre, apellido, domicilio, estado', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'ci' => Yii::t('app', 'Ci'),
                'nombre' => Yii::t('app', 'Nombre'),
                'apellido' => Yii::t('app', 'Apellido'),
                'domicilio' => Yii::t('app', 'Domicilio'),
                'estado' => Yii::t('app', 'Estado'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('ci', $this->ci, true);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('domicilio', $this->domicilio, true);
        $criteria->compare('estado', $this->estado, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}
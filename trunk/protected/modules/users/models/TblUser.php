<?php

Yii::import('users.models._base.BaseTblUser');

class TblUser extends BaseTblUser
{
    /**
     * @return TblUser
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TblUser|TblUsers', $n);
    }

}
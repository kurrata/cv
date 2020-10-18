<?php

namespace common\models\db\query;

/**
 * This is the ActiveQuery class for [[\common\models\db\ar\Employee]].
 *
 * @see \common\models\db\ar\Employee
 */
class EmployeeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\db\ar\Employee[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\db\ar\Employee|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

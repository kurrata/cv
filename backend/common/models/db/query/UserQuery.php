<?php

namespace common\models\db\query;

/**
 * This is the ActiveQuery class for [[\common\models\db\ar\User]].
 *
 * @see \common\models\db\ar\User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\db\ar\User[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\db\ar\User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

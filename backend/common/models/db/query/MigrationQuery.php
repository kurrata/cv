<?php

namespace common\models\db\query;

/**
 * This is the ActiveQuery class for [[\common\models\db\ar\Migration]].
 *
 * @see \common\models\db\ar\Migration
 */
class MigrationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\db\ar\Migration[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\db\ar\Migration|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

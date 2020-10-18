<?php

namespace common\models\db\query;

/**
 * This is the ActiveQuery class for [[\common\models\db\ar\EducationHistory]].
 *
 * @see \common\models\db\ar\EducationHistory
 */
class EducationHistoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\db\ar\EducationHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\db\ar\EducationHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

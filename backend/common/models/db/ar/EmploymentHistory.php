<?php

namespace common\models\db\ar;

use Yii;
use \common\models\db\ar\base\EmploymentHistory as BaseEmploymentHistory;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "employment_history".
 */
class EmploymentHistory extends BaseEmploymentHistory
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}

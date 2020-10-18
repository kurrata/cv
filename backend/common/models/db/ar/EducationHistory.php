<?php

namespace common\models\db\ar;

use Yii;
use \common\models\db\ar\base\EducationHistory as BaseEducationHistory;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "education_history".
 */
class EducationHistory extends BaseEducationHistory
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

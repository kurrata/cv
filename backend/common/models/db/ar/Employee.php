<?php

namespace common\models\db\ar;

use Yii;
use \common\models\db\ar\base\Employee as BaseEmployee;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "employee".
 */
class Employee extends BaseEmployee
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

<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\db\ar\base;

use Yii;

/**
 * This is the base-model class for table "employee".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property boolean $publish_cv
 *
 * @property \common\models\db\ar\EducationHistory[] $educationHistories
 * @property \common\models\db\ar\EmploymentHistory[] $employmentHistories
 * @property string $aliasModel
 */
abstract class Employee extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'publish_cv'], 'required'],
            [['publish_cv'], 'boolean'],
            [['name', 'surname'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'name' => Yii::t('models', 'Name'),
            'surname' => Yii::t('models', 'Surname'),
            'publish_cv' => Yii::t('models', 'Publish Cv'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEducationHistories()
    {
        return $this->hasMany(\common\models\db\ar\EducationHistory::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploymentHistories()
    {
        return $this->hasMany(\common\models\db\ar\EmploymentHistory::className(), ['employee_id' => 'id']);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\db\query\EmployeeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\db\query\EmployeeQuery(get_called_class());
    }


}

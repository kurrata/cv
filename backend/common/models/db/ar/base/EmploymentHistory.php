<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\db\ar\base;

use Yii;

/**
 * This is the base-model class for table "employment_history".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property integer $organization_id
 * @property string $position
 * @property string $from
 * @property string $till
 *
 * @property \common\models\db\ar\Employee $employee
 * @property \common\models\db\ar\Organization $organization
 * @property string $aliasModel
 */
abstract class EmploymentHistory extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employment_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'organization_id', 'position', 'from'], 'required'],
            [['employee_id', 'organization_id'], 'default', 'value' => null],
            [['employee_id', 'organization_id'], 'integer'],
            [['from', 'till'], 'safe'],
            [['position'], 'string', 'max' => 255],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\db\ar\Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\db\ar\Organization::className(), 'targetAttribute' => ['organization_id' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models', 'ID'),
            'employee_id' => Yii::t('models', 'Employee ID'),
            'organization_id' => Yii::t('models', 'Organization ID'),
            'position' => Yii::t('models', 'Position'),
            'from' => Yii::t('models', 'From'),
            'till' => Yii::t('models', 'Till'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(\common\models\db\ar\Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(\common\models\db\ar\Organization::className(), ['id' => 'organization_id']);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\db\query\EmploymentHistoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\db\query\EmploymentHistoryQuery(get_called_class());
    }


}

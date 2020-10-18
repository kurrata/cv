<?php

use common\models\db\ar\Cv;
use common\models\db\ar\EducationHistory;
use common\models\db\ar\Employee;
use common\models\db\ar\EmploymentHistory;
use common\models\db\ar\Organization;
use yii\db\Migration;

/**
 * Class m201018_114554_db_init
 */
class m201018_114554_db_init extends Migration
{
    private function createEmployee($up = true): void
    {
        $t = 'employee';
        if ($up) {
            $this->createTable($t, [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'surname' => $this->string()->notNull(),
                'publish_cv' => $this->boolean()->notNull(),
            ]);
            $this->createIndex("ix_{$t}_publish_cv", $t, 'publish_cv');
        } else {
            $this->dropTable($t);
        }
    }

    private function createOrganization($up = true): void
    {
        $t = 'organization';
        if ($up) {
            $this->createTable($t, [
                'id' => $this->primaryKey(),
                'label' => $this->string()->notNull(),
            ]);
        } else {
            $this->dropTable($t);
        }
    }

    private function createEducationHistory($up = true): void
    {
        $t = 'education_history';
        if ($up) {
            $this->createTable($t, [
                'id' => $this->primaryKey(),
                'employee_id' => $this->integer()->notNull(),
                'organization_id' => $this->integer()->notNull(),
                'program' => $this->string()->notNull(),
                'from' => $this->date()->notNull(),
                'till' => $this->date(),
            ]);
            $this->addForeignKey("fk_{$t}_organization_id", $t, 'organization_id', 'organization', 'id');
            $this->addForeignKey("fk_{$t}_employee_id", $t, 'employee_id', 'employee', 'id');

        } else {
            $this->dropTable($t);
        }
    }

    private function createEmploymentHistory($up = true): void
    {
        $t = 'employment_history';
        if ($up) {
            $this->createTable($t, [
                'id' => $this->primaryKey(),
                'employee_id' => $this->integer()->notNull(),
                'organization_id' => $this->integer()->notNull(),
                'position' => $this->string()->notNull(),
                'from' => $this->date()->notNull(),
                'till' => $this->date(),
            ]);
            $this->addForeignKey("fk_{$t}_organization_id", $t, 'organization_id', 'organization', 'id');
            $this->addForeignKey("fk_{$t}_employee_id", $t, 'employee_id', 'employee', 'id');
        } else {
            $this->dropTable($t);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createEmployee();
        $this->createOrganization();
        $this->createEducationHistory();
        $this->createEmploymentHistory();

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createEducationHistory(false);
        $this->createEmploymentHistory(false);

        $this->createEmployee(false);
        $this->createOrganization(false);

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201018_114554_db_init cannot be reverted.\n";

        return false;
    }
    */
}

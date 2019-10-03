<?php

use yii\db\Migration;

/**
 * Class m191003_075832_update_subject_table2
 */
class m191003_075832_update_subject_table2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('subject', 'created_at');
        $this->dropColumn('subject', 'created_by');
        $this->dropColumn('subject', 'updated_at');
        $this->dropColumn('subject', 'update_by');

        $this->addColumn('subject', 'created_at', $this->integer());
        $this->addColumn('subject', 'created_by', $this->integer());
        $this->addColumn('subject', 'updated_at', $this->integer());
        $this->addColumn('subject', 'updated_by', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191003_075832_update_subject_table2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191003_075832_update_subject_table2 cannot be reverted.\n";

        return false;
    }
    */
}

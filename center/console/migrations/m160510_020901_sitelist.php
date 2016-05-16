<?php

use yii\db\Schema;
use yii\db\Migration;

class m160510_020901_sitelist extends Migration
{
    public function up()
    {
        $this->createTable('sitelist', [
            'id' => $this->primaryKey(),
            'organ' => $this->string(),
            'province' => $this->string(),
            'city' => $this->string(),
            'station_name' => $this->string(),
            'introduction' => $this->text(),
            'chinese_site' => $this->string(),
            'english_site' => $this->string(),
            'russian_site' => $this->string(),
            'other_languages' => $this->string(),
            'micro_blog' => $this->string(),
            'facebook' => $this->string(),
            'tuiter' => $this->string(),
            'other_media' => $this->string(),
            'email' => $this->string(),
            'tel' => $this->string(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),


        ]);
    }

    /**
     *province
     *city
     *mechanism
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('sitelist');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

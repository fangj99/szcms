<?php

use yii\db\Schema;
use yii\db\Migration;

class m160506_065427_create_news_table extends Migration
{
    public function up()
    {
        $this->createTable('site', [
            'id' => $this->primaryKey(),
			'sitename' => $this->string(),
            'mechanism' => $this->string(),
            'province' => $this->string(),
            'city' => $this->string(),
            'discription' => $this->string(),
            'cnurl' => $this->string(),
            'enurl' => $this->string(),
            'weibo' => $this->string(),
            'email' => $this->string()->notNull()->unique(),

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
        $this->dropTable('site');
    }
}

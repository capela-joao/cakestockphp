<?php
use Migrations\AbstractMigration;

class CreateCategories extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('categories');
        $table->addColumn('title', 'string', [
            'limit' => 100
        ]);
        $table->addColumn('url', 'string', [
            'limit' => 100
        ]);
        $table->create();
    }
}

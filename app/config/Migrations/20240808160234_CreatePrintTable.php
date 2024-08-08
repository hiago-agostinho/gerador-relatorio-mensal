<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePrintTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('print');
        $table->addColumn('image', 'binary', ['null' => true, 'default' => null, 'limit' => null])
              ->addColumn('relatorio_id', 'integer')
              ->addForeignKey('relatorio_id', 'relatorio', ['id'], ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
              ->create();
    }

    public function down()
    {
        $this->execute('DROP TABLE arquivos_alterados');
    }
}

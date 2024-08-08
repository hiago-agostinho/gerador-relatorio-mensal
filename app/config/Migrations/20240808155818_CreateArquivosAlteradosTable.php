<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateArquivosAlteradosTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('arquivos_alterados');
        $table->addColumn('arquivos', 'string', ['null' => true])
              ->addColumn('relatorio_id', 'integer')
              ->addForeignKey('relatorio_id', 'relatorio', ['id'], ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
              ->create();
    }

    public function down()
    {
        $this->execute('DROP TABLE arquivos_alterados');
    }
}

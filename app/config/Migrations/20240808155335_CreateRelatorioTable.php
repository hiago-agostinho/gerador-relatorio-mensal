<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateRelatorioTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('relatorio');
        $table->addColumn('nome_atividade', 'string', ['null' => false])
              ->addColumn('competencia', 'string', ['null' => false])
              ->addColumn('branch', 'string', ['null' => false])
              ->addColumn('caminho teste', 'string', ['null' => false])
              ->addColumn('solução', 'string', ['null' => false])
              ->addColumn('problema', 'string', ['null' => true])
              ->addColumn('pessoa_id', 'integer')
              ->addForeignKey('pessoa_id', 'pessoas', ['id'], ['delete' => 'SET_NULL', 'update' => 'NO_ACTION'])
              ->create();
    }

    public function down()
    {
        $this->execute('DROP TABLE relatorio');
    }
}

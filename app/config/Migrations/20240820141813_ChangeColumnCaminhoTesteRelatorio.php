<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class ChangeColumnCaminhoTesteRelatorio extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('relatorio');
        $table->removeColumn('caminho teste')
              ->removeColumn('solução')
              ->addColumn('caminho_teste', 'string', ['null' => false])
              ->addColumn('solucao', 'string', ['null' => false])
              ->update();
    }

    public function down()
    {
        $table = $this->table('relatorio');
        $table->removeColumn('caminho_teste')
              ->removeColumn('solucao')
              ->addColumn('solução', 'string', ['null' => false])
              ->addColumn('caminho teste', 'string', ['null' => false])
              ->update();
    }
}

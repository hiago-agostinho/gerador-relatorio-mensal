<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePessoasTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('pessoas');
        $table->addColumn('nome', 'string', ['null' => false])
              ->addColumn('email', 'string', ['null' => false])
              ->addColumn('cpf', 'string', ['null' => false])
              ->create();
    }

    public function down()
    {
        $this->execute('DROP TABLE pessoas');
    }
}

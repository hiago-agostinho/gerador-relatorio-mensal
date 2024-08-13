<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddColumnSenhaInPessoas extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('pessoas');
        $table->addColumn('senha', 'string', ['null' => false, 'default' => null, 'limit' => null])
              ->update();
    }

    public function down()
    {
        $table = $this->table('pessoas');
        $table->removeColumn('senha', 'string', ['null' => false, 'default' => null, 'limit' => null])
              ->update();
    }
}

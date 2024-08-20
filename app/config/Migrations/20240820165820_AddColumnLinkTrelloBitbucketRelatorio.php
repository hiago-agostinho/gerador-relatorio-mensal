<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddColumnLinkTrelloBitbucketRelatorio extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('relatorio');
        $table->addColumn('link_trello', 'string', ['null' => false])
              ->addColumn('link_bitbucket', 'string', ['null' => false])
              ->update();
    }

    public function down()
    {
        $table = $this->table('relatorio');
        $table->removeColumn('link_trello')
              ->removeColumn('link_bitbucket')
              ->update();
    }
}

<?= $this->Html->css('dashboard.css'); ?>
<?= $this->Html->script('dashboard.js'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Relatório</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="table-container">
                <h2>Relatórios</h2>
                <?= $this->Form->create(NULL, ['method' => 'POST']) ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <?= $this->Form->control('nome_atividade', ['label' => 'Nome da Atividade', 'placeholder' => 'Nome da Atividade', 'class' => 'form-control custom-input']); ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('branch', ['label' => 'Branch', 'placeholder' => 'Branch', 'class' => 'form-control custom-input']); ?>
                            </div>
                            <div class="col-md-4">
                                <?= $this->Form->control('caminho_teste', ['label' => 'Caminho Teste', 'placeholder' => 'Caminho para realizar o teste', 'class' => 'form-control custom-input']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?= $this->Form->control('competencia', ['label' => 'Competência', 'placeholder' => 'Competência', 'class' => 'form-control custom-input competencia']); ?>
                        </div>
                        <div class="col-md-4">
                            <?= $this->Form->control('problema', ['label' => 'Problema', 'placeholder' => 'Problema', 'class' => 'form-control custom-input']); ?>
                        </div>
                        <div class="col-md-4">
                            <?= $this->Form->control('solucao', ['label' => 'Solução', 'placeholder' => 'Solução', 'class' => 'form-control custom-input']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?= $this->Form->control('link_trello', ['label' => 'Link do Trello', 'placeholder' => 'Trello', 'class' => 'form-control custom-input']); ?>
                        </div>
                        <div class="col-md-4">
                            <?= $this->Form->control('link_bitbucket', ['label' => 'Link do Bitbucket', 'placeholder' => 'Bitbucket', 'class' => 'form-control custom-input']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <?= $this->Form->control('arquivos', ['label' => 'Arquivos Alterados', 'type' => 'text', 'id' => 'arquivos', 'class' => 'form-control custom-input form-control-lg']); ?>
                        </div>
                        <button type="button" id="addRow" class="btn btn-primary" style="margin-top: 50px; margin-left: 20px; border-radius: 5px; width: 50px;">
                            <i class="bi bi-plus" style="font-size: 22px;"></i>
                        </button>
                    </div>
                    <div class="row" style="padding: 15px;">
                        <table class="table table-striped" id="tabelaRelatorios">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Arquivos Alterados</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <button style="background-color: #007bff; border: none;">
                        <a href="<= $this->Url->build(['controller' => 'Home', 'action' => 'add']); ?>" class="button-new">
                            <i class="fa fa-plus"></i> Cadastrar Relatório
                        </a>
                    </button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
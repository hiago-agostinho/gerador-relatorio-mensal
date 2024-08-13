<?= $this->Html->css('dashboard.css'); ?>
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
                        <div class="w-100 mb-3">
                            <?= $this->Form->control('nome_atividade', ['label' => 'Nome da Atividade', 'placeholder' => 'Nome da Atividade', 'class' => 'form-control']); ?>
                        </div>
                        <div class="w-100 mb-3">
                            <?= $this->Form->control('outra_atividade', ['label' => 'Outra Atividade', 'placeholder' => 'Outra Atividade',  'class' => 'form-control']); ?>
                        </div>
                    </div>
                    <button class="float-right button-new" style="background-color: #007bff; border: none;">
                        <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'add']); ?>" class="button-new">
                            <i class="fa fa-plus"></i> Cadastrar Relatório
                        </a>
                    </button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</body>
</html>
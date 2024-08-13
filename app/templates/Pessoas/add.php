<?= $this->Html->css('home.css'); ?>
<?= $this->Html->script('mask.js') ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('main.js') ?>
</head>

<body>
    <h2 style="color:white">Cadastro de Pessoas</h2>
    <div class="login-container">
        <div class="login-box">
            <p>Cadastre-se</p>
            <?= $this->Form->create($user, ['method' => 'POST']) ?>
                <?= $this->Form->control('cpf', ['label' => false, 'placeholder' => 'CPF/CNPJ', 'class' => 'input-field cpf']); ?>
                <?= $this->Form->control('nome', ['label' => false, 'placeholder' => 'Nome', 'class' => 'input-field']); ?>
                <?= $this->Form->control('email', ['label' => false, 'placeholder' => 'Email', 'class' => 'input-field']); ?>
                <?= $this->Form->control('senha', ['type' => 'password', 'label' => false, 'placeholder' => 'Senha', 'class' => 'input-field']); ?>
                <button class="btn-primary login">Cadastrar</button>
                <div class="continue-with"><?= $this->Html->link('Voltar', ['controller' => 'Home', 'action' => 'index']) ?></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</body>

</html>
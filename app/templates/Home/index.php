<?= $this->Html->css('home.css'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Gerador de Relatório Mensal</h2>
            <p>Gera o relatório certo ai pae</p>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'login']]) ?>
                <?= $this->Form->control('email', ['label' => false, 'placeholder' => 'Email', 'class' => 'input-field']); ?>
                <?= $this->Form->control('password', ['label' => false, 'placeholder' => 'Password', 'class' => 'input-field']); ?>
                <button class="btn-primary login">Login</button>
            <?= $this->Form->end() ?>
            <div class="continue-with"><?= $this->Html->link('Crie sua conta', ['controller' => 'Pessoas', 'action' => 'add']) ?></div>
        </div>
    </div>
</body>

</html>
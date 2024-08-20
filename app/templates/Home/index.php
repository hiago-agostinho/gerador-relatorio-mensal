<?= $this->Html->css('dashboard.css'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2 style="color: white">Dashboard</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="header">
                <h1>Olá <?= $pessoa->nome; ?> 👋</h1>
            </div>
            <div class="table-container">
                <h2>Relatórios</h2>
                <button class="float-right button-new" style="background-color: #007bff; border: none;">
                    <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'add']); ?>" class="button-new">
                        Cadastrar Relatório
                    </a>
                </button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Competência</th>
                            <th>Autor</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
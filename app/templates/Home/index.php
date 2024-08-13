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
            <h2>Dashboard</h2>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Company</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jane Cooper</td>
                            <td>Microsoft</td>
                            <td>(225) 555-0118</td>
                            <td>jane@microsoft.com</td>
                            <td>United States</td>
                            <td class="active">Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
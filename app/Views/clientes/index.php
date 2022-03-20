<h2>Clientes <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
<h1>Meus Clientes</h1>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Cód.</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Limite de crédito</th>
            <th>Dia de Pagamento</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id_cliente'] ?></td>
                <td><?= $cliente['nome'] ?></td>
                <td><?= $cliente['data_de_nascimento'] ?></td>
                <td><?= $cliente['CPF'] ?></td>
                <td><?= $cliente['telefone'] ?></td>
                <td><?= $cliente['endereco'] ?></td>
                <td><?= $cliente['limite_de_credito'] ?></td>
                <td><?= $cliente['dia_de_pagamento'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html> 
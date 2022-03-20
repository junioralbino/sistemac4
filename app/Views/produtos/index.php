<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo; ?></title>
</head>
<body>
    <h1>Produtos</h1>

    <table border="1" width="100%">
     <thead>   
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor de compra</th>
            <th>Valor de venda</th>
            <th>Quantidade</th>
            <th>Validade</th>
        </tr>
    </thead> 
    
    <tbody>  
       
      <?php foreach($produtos as $produto): ?>
        <tr>
            <td><?php echo $produto['nome'] ?></td>
            <td><?php echo $produto['descricao'] ?></td>
            <td><?php echo $produto['valor_de_compra'] ?></td>
            <td><?php echo $produto['valor_de_venda'] ?></td>
            <td><?php echo $produto['quantidade'] ?></td>
            
            <?php if($produto['validade'] != ''):  ?>
              <td><?php echo $produto['validade'] ?></td>
            <?php else: ?>
                <td>Esse Produto nao tem validade</td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </tbody> 
   </table>
</body>
</html>
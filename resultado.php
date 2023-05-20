<?php
    require_once 'dados.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor</title>
</head>
<body>
    <main>
    <h1>Conversor de moedas</h1>
    <p>R$<?php echo $valor; ?> equivalem à US$<?php echo $conversao; ?></p>
    <p>Cotação atual é de <?php echo $cotacao; ?></p>
    <button id="voltar"><a href="index.php">Voltar</a></button>
    </main>
</body>
</html>
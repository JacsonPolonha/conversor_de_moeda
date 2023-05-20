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
    <?php 
        $valor = $_GET['valor']?? 1;
    ?>
    <main>
        <h1>Conversor de moedas</h1>
        <form action="resultado.php" method="get">
            <label for="valor">Valor a ser convertido</label>
            <input type="number" name="valor" id="valor" value="<?php echo $valor;?>">
            <button type="submit">Converter</button>
        </form>
    </main>
</body>
</html>
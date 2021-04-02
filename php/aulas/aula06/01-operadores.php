<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
            $price = $_GET["p"];
            echo "O preço informado do produto é de R$" . number_format($price, 2, ',', '.');
            $price += $price *10/100;
            echo "<br/>O novo valor com o acrescimo de 10% é de R$" . number_format($price, 2, ',', '.');
        ?>
    </div>
</body>
</html>
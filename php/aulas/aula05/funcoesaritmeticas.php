<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Funções Aritmeticas em PHP</title>
    <style>
        h3 {
            color: #c50e0e;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $variable1 = $_GET["a"];
            $variable2 = $_GET["b"];
            echo "<h3>Valores Recebidos: $variable1 e $variable2</h3>";
            //Valor absoluto
            echo "O valor absoluto de $variable2 é " . abs($variable2);
            //Potencialização
            echo "<br/>O valor de $variable1<sup>$variable2</sup> é igual á " . pow($variable1, $variable2);
            //Raiz quadrada
            echo "<br/>A raiz quadrada de $variable1 é " . sqrt($variable1);
            //Ceil - Sempre arredonda para cima
            //Floor sempre arredonda para baixo
            echo "<br/>O valor arredondado de $variable2 é " . round($variable2); 
            //Valor inteiro da variavel
            echo "<br/>O valor inteiro de $variable2 é " . intval($variable2);
            //Formatação de um numero
            echo "<br/>O valor de $variable1 em moeda é de R$" . number_format($variable1, 2, ',', '.');
        ?>
    </div>
</body>
</html>
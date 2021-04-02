<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $product = "leite";
            $price = 4.5;
            //echo "O $product custa R$" . number_format($price, 2); <- metodo antigo
            printf("O %s custa R$%.2f", $product, $price);
            /*Parametros aceitos:
            %d - Valor decimal (positivo ou negativo)
            %u - Valor decimal sem sinal
            %f - Valor real
            %s - String*/
        ?>
    </div>
</body>
</html>
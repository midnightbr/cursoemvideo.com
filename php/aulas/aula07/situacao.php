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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $medium = ($nota1 + $nota2) / 2;
            //A média entre $nota1 e $nota2 é de $media
            echo "The average between $nota1 and $nota2 is $medium <br/>";
            /*Usando o operador unitario criando uma nova varivel para guarda o resultado
            $situation = ($medium >= 6 ) ? "Approved" : "Failed";*/
            //Usando o operador unitario diretamente no echo, sem utilização de uma varivel intermediaria.
            echo "The student's situation is " . (($medium >= 6) ? "APPROVED":"DISAPPROVED");
        ?>
    </div>
</body>
</html>
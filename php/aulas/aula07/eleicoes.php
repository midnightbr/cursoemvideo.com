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
            $year = $_GET["year"];
            $age = 2021 - $year;
            echo "A idade de quem nasceu em $year é de $age anos.<br/>";
            /*Operadores logicos:
            && = and
            || = or
            xor - Quando somente uma opção é verdadeira*/
            $voto = ($age >= 18 && $age < 65) ? "É OBRIGATORIO" : "NÃO É OBRIGATORIO";
            echo "E dessa forma seu voto $voto";
        ?>
    </div>
</body>
</html>
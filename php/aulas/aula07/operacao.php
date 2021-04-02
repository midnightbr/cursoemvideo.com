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
            $number1 = $_GET["a"];
            $number2 = $_GET["b"];
            $type = $_GET["op"];
            echo "Os valores passados foram $number1 e $number2.<br/>";
            /* Operador unario - (comparação simples) 
            Essa variavel 'resultado', vai primeiramente fazer a comparação com o type,
            no qual, se for igual a 's' ('s' = soma), ele vai somar as duas variaveis,
            caso não seja igual, ou, seja falsa a comparação, ele vai fazer a multiplicação das variveis.
            Então em uma linha apenas fizemos não so a soma ou a multiplicação das variaveis,
            como também fizemos comparação do tipo "if e else" ('se' e 'senão').*/
            $resultado = ($type == "s") ? $number1+$number2 : $number1*$number2;

        ?>
    </div>
</body>
</html>
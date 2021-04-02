<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Operações Aritmeticas</title>
</head>
<body>
    <div>
        <?php
            $number1 = 5;
            $number2 = 7;
            echo "A soma vale " . ($number1 + $number2);
            echo "<br/>A subtração vale " . ($number1 - $number2);
            echo "<br/>A multiplicação vale " . ($number1 * $number2);
            echo "<br/>A divisão vale " . ($number1 / $number2);
            echo "<br/>O modulo vale " . ($number1 % $number2);
            echo "<br/>A media vale " . (($number1 + $number2) / 2);

            //Metodo para passar parametros pela URL
            $number1 = $_GET["a"];
            $number2 = $_GET["b"];
            echo "<br/><br/>Valores recebidos: $number1 e $number2";
            echo "<br/>A soma vale " . ($number1 + $number2);
            echo "<br/>A subtração vale " . ($number1 - $number2);
            echo "<br/>A multiplicação vale " . ($number1 * $number2);
            echo "<br/>A divisão vale " . ($number1 / $number2);
            echo "<br/>O modulo vale " . ($number1 % $number2);
            echo "<br/>A media vale " . (($number1 + $number2) / 2);

        ?>
    </div>
</body>
</html>
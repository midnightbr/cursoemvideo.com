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
            //Função sem retorno de valor
            function sum1 ($a, $b) {
                $s = $a + $b;
                echo "<p>The sum is equal to $s</p>";
            }

            sum1(3, 4);
            sum1(8, 2);
            $x = 9;
            $y = 15;
            sum1($x, $y);

            //Função com retorno de valor
            function sum2 ($a, $b) {
                $s = $a + $b;
                return $s;
            }

            $x = 3;
            $y = 4;

            $res = sum2($x, $y);
            echo "The sum between $x and $y is equal to $res.";
            
            //Função com retorno do valor direto no return
            function sum3 ($a, $b) {
                return $a + $b;
            }

            $x = 17;
            $y = 5;

            $res = sum3($x, $y);
            echo "<p>The sum between $x and $y is equal to $res.</p>";

            //Realizar uma soma com multiplos parâmetros e usando array
            function sum4() {
                $p = func_get_args(); //Pega todos os valores e coloca dentro de um array(vetor)
                $t = func_num_args(); //Pega a quantidade total de objetos (argumentos) que foram passados.
                $s = 0;

                for ($i = 0; $i < $t; $i++) {
                    $s += $p[$i];
                }

                return $s;
            }
            
            $res = sum4(5, 10, 7, 4);
            echo "<p>The sum of the valleys $res</p>";
        ?>
    </div>
</body>
</html>
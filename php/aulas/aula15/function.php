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
            //Função passando valor por passagem de parametro
            function teste($x) {
                $x += 2;
                echo "<p>The value of X is $x.</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>The value of A is $a.</p>";

            //Função passando o valor por referencia
            function teste2(&$x) {
                $x += 2;
                echo "<p>The value of X is $x.</p>";
            }

            $a = 3;
            teste2($a);
            echo "<p>The value of A is $a.</p>";
        ?>
    </div>
</body>
</html>
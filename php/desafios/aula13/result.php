<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title>He Primes?</title>
</head>
<body>
    <div>
        <?php
            $number = $_GET['number'];
            $multi = 0;
            echo "<span class='foco'>Analyzing...</span>";
            echo "<p>Divisible numbers: ";
            for ($c = 1; $c <= $number; $c++) {
                if ($number % $c == 0) {
                    $multi++;
                    echo "$c ";
                }
            }
            echo "</p>";
            echo "Total divisible numbers: $multi";

            if ($multi <= 2) {
                echo "<p>Result: $number ";
                echo "<span class='foco'>Primes</span></p>";
            }
            else {
                echo "<p> Result: $number ";
                echo "<span class='foco'>It's not prime</span></p>";
            }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Back</a>
    </div>
</body>
</html>
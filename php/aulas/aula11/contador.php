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
            $c = 1;
            echo "Progressivo <br>";
            while ($c <= 10) {
                echo $c . ", ";
                $c++;
            }
            echo "<br><br>";
            echo "Regressivo <br>";
            while ($c >= 1) {
                echo $c . ", ";
                $c--;
            }
        ?>
    </div>
</body>
</html>
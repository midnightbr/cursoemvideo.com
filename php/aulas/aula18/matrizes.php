<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
</head>
<body>
    <div>
    <pre>
        <?php
            $matriz = array(
                array(6, 4),
                array(4, 9),
                array(3, 2)
            );
            print_r($matriz);
            echo "<br>";
            $matriz[1][0] = 25;
            print_r($matriz);
        ?>
    </pre>
    </div>
</body>
</html>
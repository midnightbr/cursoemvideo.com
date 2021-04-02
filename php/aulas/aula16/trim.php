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
            $name = "   Fabiana de Souza   ";
            echo(strlen($name));
            $new = trim($name);
            echo "<br>";
            echo $new;
            echo "<br>";
            echo(strlen($new));

            //ltrim
            $new2 = ltrim($name);
            echo "<br>$new2<br>";
            echo(strlen($new2));

            //rtrim
            $new3 = rtrim($name);
            echo "<br>$new3<br>";
            echo(strlen($new3));

        ?>
    </div>
</body>
</html>
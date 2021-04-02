
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
                $value = $_GET['v'];
                echo "The Value sent has been $value<br/>";
                $rq = sqrt($value);
                echo "<br/>The root of $value is equal to " . number_format($rq, 2) . "<br/>";
            ?>
            <br/>
            <a href="modelo.html">Voltar</a>
        </div>
    </body>
</html>
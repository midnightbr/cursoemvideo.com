<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
</head>
<body>
    <div>
        <form method="GET" action="caixas2.php">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'><br>";
                    $c++;
                }
            ?>
            <br>
            <input type="submit" class="botao" value="Enviar">
        </form>
    </div>
</body>
</html>
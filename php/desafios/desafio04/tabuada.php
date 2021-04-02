<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title>Tabuada</title>
</head>
<body>
    <div>
        <form method="GET" action="resultado.php">
            Número:
            <select name="number">
                <?php
                    $c = 1;
                    while ($c <= 10) {
                        echo "<option value=$c>$c</option>";
                        $c++;
                    }
                ?>
            </select>
            <p><input type="submit" value="Tabuada" class="botao"></p>
        </form>
    </div>
</body>
</html>
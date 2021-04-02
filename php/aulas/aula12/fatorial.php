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
            $v = isset($_GET['val']) ? $_GET['val'] : 1;
            echo "<h2>Calculando o fatorial de $v </h2>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);
            echo "<h3>$v != $fat";
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
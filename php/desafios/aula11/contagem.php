<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title>Contador</title>
    <style>
        .caixa {
            height: 15px;
            width: 70px;
        }
    </style>
</head>
<body>
    <div>
        <form method="GET" action="contagem2.php">
            Inicial: <input type="number" name="ini" class="caixa" required>
            <br>
            Final: <input type="number" name="fin" class="caixa" required>
            <br>
            <?php
                $c = 1;
                echo "Intervalo: <select name='int'>";
                while ($c <= 10) {
                    echo "<option value=$c>$c</option>";
                    $c++;
                }
                echo "</select>";
            ?>
            <br>    
            <input type="submit" value="Contar" class="botao">
        </form>
    </div>
</body>
</html>
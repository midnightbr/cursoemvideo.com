<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $number = $_GET['number'];
            $multi = 1;
            $cont = 1;
            echo "Tabuada";
            do {
                $multi = $number * $cont;
                echo "<br>$number X $cont = $multi";
                $cont++;
            } while($cont <= 10);
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>
</html>
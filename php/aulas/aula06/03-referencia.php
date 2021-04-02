<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Referencia</title>
</head>
<body>
    <div>
        <?php
            $a = 5;
            $b = $a;
            $b += 5;
            echo "A variavel A vale $a";
            echo "<br/>A variavel B vale $b";

            //Codigo com exemplo de ligação por referencia
            echo "<br/><br/>Ligando por referencia";
            $a = 5;
            $b = &$a;
            $b += 5;
            echo "<br/>A variavel A vale $a";
            echo "<br/>A variavel B vale $b";
        ?>
    </div>
</body>
</html>
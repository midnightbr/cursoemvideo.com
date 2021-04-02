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
            $text = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
            $res = wordwrap($text, 5, "<br>\n", false);
            echo $res;
        ?>
    </div>
</body>
</html>
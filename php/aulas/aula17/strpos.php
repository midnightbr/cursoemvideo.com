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
            $phrase = "I'm learning PHP.";
            $pos = strpos($phrase, "PHP");
            echo "$phrase <br>A string foi encontrada na posição $pos.";
        ?>
    </div>
</body>
</html>
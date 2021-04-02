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
            $array[0] = "Tekur";
            $array[1] = "Technology";
            $text = implode(" ", $array);
            print($text);
        ?>
    </div>
</body>
</html>
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
            $name = "Marcos";
            $new = str_pad($name, 30, "_", STR_PAD_RIGHT);
            print("O $new é muito lindo.");
            echo "<br>";
            $new2 = str_pad($name, 30, "_", STR_PAD_BOTH);
            print("O $new2 é muito lindo.");
            echo "<br>";
            $new3 = str_pad($name, 30, "_", STR_PAD_LEFT);
            print("O $new3 é muito lindo.");
        ?>
    </div>
</body>
</html>
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
            $site = "Curso em Video";
            $sub = substr($site, 0, 5);
            echo "$sub <br>";
            print(substr($site, -5, 2));
            echo "<br>";
            print(substr($site, 9, 5));
        ?>
    </div>
</body>
</html>
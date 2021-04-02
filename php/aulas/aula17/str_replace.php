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
            $phrase = "Gosto de estudar Python.";
            $newphrase = str_replace("Python", "PHP", $phrase);
            print $phrase;
            echo "<br>";
            print $newphrase;
            echo "<br>";
            $newphrase2 = str_ireplace("php", "Python", $newphrase);
            print $newphrase2;
        ?>
    </div>
</body>
</html>
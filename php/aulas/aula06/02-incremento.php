<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
            $year = $_GET["aa"];
            echo "O ano atual é " . $year-- . " e o ano anterio foi " . $year++;
            echo "<br/>O proximo ano sera $year";
        ?>
    </div>
</body>
</html>
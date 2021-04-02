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
            $number = $_GET['number'];
            for ($c = 1; $c <= 10; $c++) {
                $multi = $number * $c;
                echo "$number X $c = $multi<br>";
            }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Back</a></p>
    </div>
</body>
</html>
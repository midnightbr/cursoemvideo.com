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
            $a = 3;
            $b = "3";
            $igual = ($a == $b) ? "YES" : "NO";
            //As variáveis A e B são iguais?
            echo "Are variables A and B the same? $igual<br/>";
            $identico = ($a === $b) ? "YES" : "NO";
            //As variáveis A e B são idênticas?
            echo "Are variables A and B identical? $identico";
        ?>
    </div>
</body>
</html>
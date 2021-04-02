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
            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $media = ($nota1 + $nota2) / 2;
            echo "A media entre $nota1 e $nota2 é $media.<br/>";
            $sit =  ($media < 6) ? "REPROOVADO" : "APROVADO";
            echo "A situação do aluno é $sit";
        ?>
    </div>
</body>
</html>
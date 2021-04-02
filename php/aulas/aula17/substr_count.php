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
            $phrase = "Estou aprendendo PHP no Curso em Video de PHP";
            $count = substr_count($phrase, "PHP");
            print("PHP encontrado $count vezes");
        ?>
    </div>
</body>
</html>
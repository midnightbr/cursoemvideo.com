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
            $name = isset($_GET['name'])?$_GET['name']:"[não informado]";
            $year = isset($_GET['year'])?$_GET['year']:0;
            $gender = isset($_GET['gender'])?$_GET['gender']:"[Sem sexo]";
            $age = date('Y') - $year;

            echo "$name é $gender e tem $age anos.";
        ?>
        <br/>
        <a href="idade.html">Voltar</a>
    </div>
</body>
</html>
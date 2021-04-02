<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title></title>
</head>
<body>
    <div>
    <pre>
        <?php
            $cad = array("nome" => "Ana",
                "Idade" => 23,
                "Peso" => 78.5);
            $cad["fuma"] = true;
            foreach($cad as $key => $value) {
                echo "O campo $key possui o conteudo $value <br>";
            }
        ?>
    </pre>
    </div>
</body>
</html>
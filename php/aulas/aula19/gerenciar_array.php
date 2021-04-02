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
         $vector = array("M", "A", "H", "I", "F");
         print_r($vector);
         //Adicionando valor no final do array
         array_push($vector, "E");
         //$vector[] = "E";
         print_r($vector);
         //Caso queira eliminar o ultimo valor do vetor
         array_pop($vector);
         print_r($vector);
         //Removendo elemento do começo do array
         array_shift($vector);
         print_r($vector);
         //Adicionando elemento no começo do vetor
         array_unshift($vector, "M");
         print_r($vector);
        ?>
    </pre>
    </div>
</body>
</html>
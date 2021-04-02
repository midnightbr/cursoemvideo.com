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
            $vector = array("A", "J", "O", "F", "Z");
            print_r($vector);

            //Colocando em ordem
            sort($vector);
            print_r($vector);

            //Colocando em ordem inversa
            rsort($vector);
            print_r($vector);

            //Colocando em ordem de modo a manter os indices
            $vector2 = array("A", "J", "O", "F", "Z");
            asort($vector2);
            print_r($vector2);

            //Colocando em ordem reversa mantendo os indices
            arsort($vector2);
            print_r($vector2);

            //Organizando o array colocando os indices em ordem
            $vector3 = array(2 => "A", 3 => "J", 0 => "O", 10 => "F", 5 => "Z");
            ksort($vector3);
            print_r($vector3);
            
            //Organizando o array colocandos os indcies em ordem reversa
            krsort($vector3);
            print_r($vector3);
        ?>
    </pre>
    </div>
</body>
</html>
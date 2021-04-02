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
            $vector = array( 
                2 => 5,
                4 => 9,
                13 => 8,
                5 => 20,
                17 => 7,
            );
            print_r($vector);
            unset($vector[5]);
            print_r($vector);
        ?>
        </pre>
    </div>
</body>
</html>
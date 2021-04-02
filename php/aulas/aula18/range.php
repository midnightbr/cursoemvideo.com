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
            <table border="1"><tr>
                <?php
                    $count = range(5, 20, 2);
                    //print_r($count);
                    foreach($count as $value) {
                        echo "<td>$value ";
                    }
                ?>
            </tr></table>
        </pre>
    </div>
</body>
</html>
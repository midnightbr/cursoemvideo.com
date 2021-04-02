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
            for ($c = 1; $c <= 10; $c++) {
                echo "$c ";
            }
            echo "<p>";
            for ($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "</p>";
            echo "<p>";
            for ($i = 0; $i <= 50; $i += 5) {
                echo "$i ";
            }
            echo "</p>";
        ?>
    </div>
</body>
</html>
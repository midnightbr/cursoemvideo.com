<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>TABLE</title>
</head>
<body>
    <div>
        <form method="GET" action="result.php">
            Number: <select name="number" class="number">
                <?php
                    for ($c = 1; $c <= 10; $c++){
                        echo "<option value=$c>$c</option>";
                    }
                ?>
            </select>
            <p><input type="submit" value="Send" class="botao"></p>
        </form>
    </div>
</body>
</html>
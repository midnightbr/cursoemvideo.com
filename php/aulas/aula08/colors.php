<!DOCTYPE html>
<html>
<head>
    <?php
        $txt = isset($_GET['t']) ? $_GET['t'] : "Texto Generico";
        $tam = isset($_GET['tam']) ? $_GET['tam'] : "12pt";
        $cor = isset($_GET['cor']) ? $_GET['cor'] : "RGB(143, 2, 10)";
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Color</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <br/>
        <a href="text_color.html">Voltar</a>
    </div>
</body>
</html>
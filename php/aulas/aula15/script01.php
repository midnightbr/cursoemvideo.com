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
            /*Diferença entre o include e o required é que o include, 
            mesmo que não tenha a função, ele tenta carregar o restante do codgio. 
            Já o required significa que a função é obrigatorio para rodar o script, 
            não contendo a função, ele para tudo e da uma mensagem de fatal error*/
            include "functions.php";
            echo "<p>Testing new functions.</p>";
            hello();
            value(4);
        ?>
    </div>
</body>
</html>
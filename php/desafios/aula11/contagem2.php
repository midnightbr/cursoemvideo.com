<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title>Contador</title>
</head>
<body>
    <div>
        <?php
            $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
            $fin = isset($_GET['fin']) ? $_GET['fin'] : "Número invalido";
            $int = isset($_GET['int']) ? $_GET['int'] : 1;

            if ($ini < $fin) {
                while ($ini <= $fin) {
                    echo "$ini ";
                    $ini += $int;
                }
            }
            elseif ($fin < $ini) {
                while ($fin <= $ini) {
                    echo "$fin ";
                    $fin += $int;
                }
            }
            else {
                echo "Número iguais. Por favor, insira os números novamente.";
            }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
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
            $day = isset($_GET['ds']) ? $_GET['ds'] : 0;
            switch ($day) {
                case 1:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                    echo "Descanse, pequeno gafanhoto! :)";
                    break;
                default:
                    echo "Dia da semana invalido.";
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
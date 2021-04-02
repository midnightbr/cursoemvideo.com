<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../aulas/css/estilo.css">
        <title>Media Final</title>
        <style>
            span {
                font-size: 18pt;
                font-weight: bolder;
            }

            span.reprovado {
                color: red;
            }

            span.recuperacao {
                color: yellow;
            }

            span.aprovado {
                color: green;
            }

            input.voltar {
                color: white;
                background-color: rgb(128, 0, 0);
                font-size: 13pt;
                font-weight: bold;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $av1 = $_GET['av1'];
                $av2 = $_GET['av2'];
                $avf = $_GET['avf'];

                $final = ($av1 * 0.25) + ($av2 * 0.25) + ($avf * 0.5);

                if($final < 5) {
                    $media = "<span class='reprovado'>" . number_format($final, 2) . "</span>";
                }
                elseif($final >= 5 && $final < 7) {
                    $media = "<span class='recuperacao'>" . number_format($final, 2) . "</span>";
                }
                else {
                    $media = "<span class='aprovado'>" . number_format($final, 2) . "</span>";
                }

                echo "A média total das suas notas foi $media";

                echo "<br>Situação do aluno: ";

                if ($final < 5) {
                    echo "<span class='reprovado'>REPORVADO</span>";
                }
                elseif ($final >= 5 && $final < 7) {
                    echo "<span class='recuperacao'>RECUPERAÇÃO</span>";
                }
                else{
                    echo "<span class='aprovado'>APROVADO";
                }
            ?>
            <br>
            <form action="media.html">
                <input type="submit" value="Voltar" class="voltar">
            </form>
        </div>
    </body>
</html>
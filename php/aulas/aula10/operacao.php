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
            $number = isset($_GET['num']) ? $_GET['num'] : 0;
            $oper = isset($_GET['oper']) ? $_GET['oper'] : "Operação Invalida.";
            switch ($oper) {
                case 1:
                    $res = $number * 2;
                    break;
                case 2:
                    $res = $number ^ 3;
                    break;
                case 3:
                    $res = sqrt($number); //$number ^ (1/2)
            }
            
            if ($oper == 1) {
                $exe = "O dobro";
            }
            elseif ($oper == 2) {
                $exe = "O triplo";
            }
            else {
                $exe = "A raiz quadrada";
            }

            echo "$exe de $number é <span class='foco'>$res</span>";
        ?>
        <br>
        <br>
        <a href="operacao.html" class="botao">Voltar</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../aulas/css/estilo.css">
    <title>ESTADOS</title>
</head>
<body>
    <div>
        <?php
            $state = isset($_GET['est']) ? $_GET['est'] : "Estado invalido.";
            switch ($state) {
                case "AC":
                case "AM":
                case "AP":
                case "TO":
                case "PA":
                case "RO":
                    echo "O estado $state pertence a região NORTE.";
                    break;

                case "CE":
                case "AL":
                case "MA":
                case "PB":
                case "PE":
                case "PI":
                case "RN":
                case "SE":
                    echo "O estado $state pertence a região NORDESTE";
                    break;

                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    echo "O estado $state pertence a região CENTRO-OESTE.";
                    break;

                case "ES":
                case "MG":
                case "RJ":
                case "SP":
                    echo "O estado $state pertence a região SUDESTE";
                    break;
                    
                case "PR":
                case "SC":
                case "RS":
                    echo "O estado $state pertence a região SUL";
            }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>
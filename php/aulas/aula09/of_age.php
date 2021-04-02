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
            $year = isset($_GET['year']) ? $_GET['year'] : "Ano de nascimento invalido";
            $age = date('Y') - $year;
            echo "Você nasceu em $year e tem ou tera $age anos. <br/>";
            if($age >= 18) {
                $voto = "é obrigado a votar";
                $driver = "já pode dirigir";
            }
            /*else {
                if($age >= 16) {
                    $voto = "pode votar";
                    $driver = "não pode dirigir";
                }
                else{
                    $voto = "não pode votar";
                    $driver = "não pode dirigir";
                }
            }*/
            elseif ($age >= 16 && $age < 18) {
                $voto = "pode votar";
                $driver = "não pode dirigir";
            }
            else {
                $voto = "não pode votar";
                $driver = "não pode dirigir";
            }
            echo "Com essa idade você $voto e também $driver";
        ?>
        <br/>
        <a href="of_age.html">Votar</a>
    </div>
</body>
</html>
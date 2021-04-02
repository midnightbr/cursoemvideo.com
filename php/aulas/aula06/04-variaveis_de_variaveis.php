<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Variavel de Variaveis</title>
</head>
<body>
    <div>
        <?php
            $marca = "Ford";
            $$marca = "Mustang Shelby";
            echo "A variavel marca recebeu $marca";
            //Sabendo o nome da varivel fica facil de poder imprimir a mensagem na tela ou manipula-la.
            echo "<br/>A variavel criada $marca recebeu o valor $Ford";
            /*No entanto, caso o valor da variavel não estiver disponivel para saber o valor,
            como marca -> ford, a tambem a maneira
            anterior para poder manipular a variavel. As duas dão o mesmo resultado.*/
            echo "<br/>A variavel criada $marca recebeu o valor " . $$marca;
        ?>
    </div>
</body>
</html>
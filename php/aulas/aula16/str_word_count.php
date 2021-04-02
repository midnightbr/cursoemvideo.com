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
            $phrase = "I'm going to study PHP now";
            $counter = str_word_count($phrase, 0);
            echo $counter;
            echo "<br><br>";
            $counter2 = str_word_count($phrase, 1);
            print_r($counter2);
            $counter3 = str_word_count($phrase, 2);
            echo "<br><br>";
            print_r($counter3);
        ?>
    </div>
</body>
</html>
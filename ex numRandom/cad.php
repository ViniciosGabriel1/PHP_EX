<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento </h1>
    </header>

    <main><?php
            $min = 0;
            $max = 112;

            $num = rand($min, $max);

            echo "O número sorteado foi $num"



            ?>

    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>


</html>
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
            $n = $_GET["number"];

            echo "O número escolhido foi $n" . "<br>" . "Seu antecessor é   " . $n - 1 . "<br>" . " E o sucessor é : " . $n + 1;
            ?>

    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>


</html>
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

            $n = $_GET["nome"];
            $s = $_GET["sobrenome"];

            echo "Olá $n $s";

            ?>

    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>


</html>
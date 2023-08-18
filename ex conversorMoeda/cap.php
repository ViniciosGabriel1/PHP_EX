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
            $cotDolar = 4.97;
            $n = $_GET["number"];
            $numConvertido = $n / $cotDolar;

            echo "Seu salário convertido em USD é : " . ceil($numConvertido) . " Dólares";
            ?>

    </main>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>


</html>
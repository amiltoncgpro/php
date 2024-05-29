<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //var_dump($_REQUEST); // Essa variável é uma super global.Existem três super global que são - $_GET; $_POST; $_COKKIES.$_REQUEST: que retorna todos os valores.

            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET['sobrenome'] ?? "Desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong> esse é o meu site.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>
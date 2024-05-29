<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        //$num = 010;
        //echo "O valor da variável é $num";

        #$v = 300;
        #var_dump($v); // Serve para mostrar o tipo primitivo

        //$num = (int) 3e2; // 3 x 10 (2) coerção
        //echo "O valor é $num";
        //var_dump($num);

        //$num = (int) "950";
        //var_dump($num);

        //$casado = true;
        //var_dump($casado);
        //print "O valor para casado é $casado"; // Se eu mandar mostrar na com o echo ou print um valor bool(true = 1,false = espaço vázio)

        //$vet = [6, 2, "Maria", 9, 3, 5];
        //echo "O vector é $vet[1]";
        //var_dump($vet)

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);


        //echo "\u{1F418}";
    ?>
</body>
</html>
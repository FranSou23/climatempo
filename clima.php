<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Jogos</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="clima.css">
</head>
<body>
    <h1>Clima Tempo</h1>
    <div class="lista">
    <?php
    $cidade = ["Rio Branco","Maceió","Macapá","Manaus","Salvador","Fortaleza","Brasília","Vitória","Goiânia","São Luís","Cuiabá","Campo Grande","Belo Horizonte","Belém","João Pessoa","Curitiba","Recife","Teresina","Rio de Janeiro","Natal","Porto Alegre","Porto Velho","Boa Vista","Florianópolis","São Paulo","Aracaju","Palmas"
];
    $clima = ["31","27", "28" ,"29", "26", "28", "22", "24","26", "27", "30", "29","23", "29", "28", "18", "28", "30", "27", "28", "20", "30", "31" , "22", "23" ,"28", "31" ];

    $foto = ["frio.jpg", "muitp-quente.jpg", "ok.jog", "quente.jpg"];
 
    $numero_cidade = count($cidade);
    $contador = 0;
    while($contador < $numero_cidade){
        echo "<img src='$clima[$contador]'>";
        echo "<br> $cidade[$contador]";
        echo "<br> $foto[$contador]";
        
        $contador++;
 
    }
 
    ?>
 
 
    </div>
</body>
</html>
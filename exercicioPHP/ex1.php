<?php 
$produto =[
    [
    "Nome" => "nome do produto",
    "Preço"=> 9999.99,
    "Qtestoque"=> 99
    ]
    ];

    echo "<h3><strong> Nome: ".$produto[0]["Nome"]."</strong></h3>"."<br>";
    echo "<h3><strong> Preço: ".$produto[0]["Preço"]."</strong></h3>"."<br>";
    echo "<h3><strong> Estoque: ".$produto[0]["Qtestoque"]."</strong></h3>";

    $vtotal = $produto[0]["Qtestoque"]*$produto[0]["Preço"];

    echo "<h3><strong> Valor do Estoque: ".$vtotal."</strong></h3>";


?>
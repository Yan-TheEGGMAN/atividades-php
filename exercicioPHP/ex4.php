<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form method="POST">
        Inserir CEP: <input type="text" name="cep" required><br>    <!--digitar sem traço-->

        <button type="submit">Enviar</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cep = $_POST["cep"];

        $url = "https://viacep.com.br/ws/$cep/json/";

        $resposta = file_get_contents($url);
        $resposta = json_decode($resposta , true);

        echo "Rua: " . $resposta["logradouro"] . "<br>";
        echo "Bairro: " . $resposta["bairro"] . "<br>";
        echo "Cidade: " . $resposta["localidade"] . "<br>";
        echo "Estado: " . $resposta["uf"];
    }
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="text" name="email" required><br>
        Senha:<input type="text" name="senha" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $usuario = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $senha
        ];
        $arquivo = "Dados.json";

        if(file_exists($arquivo)){
            $dados = file_get_contents($arquivo);
            $lista = json_decode($dados, true);
        }
        else{
            $lista = [];
        }

        $lista[] = $usuario;

        file_put_contents($arquivo, json_encode($lista, JSON_PRETTY_PRINT)); //JSON PRETTY PRINT serve para exibir o json de forma mais legivel ao humano

        echo "SALVO!";

        echo "<pre>";
        var_dump($lista);
        echo "</pre>";
    }
    ?>
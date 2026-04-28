<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form method="POST">
        Nome do cliente: <input type="text" name="nome_cliente" required><br>
        Quantidade em estoque: <input type="text" name="qEstoque" required><br>
        Cliente vip <input type="checkbox" name="vip" ><br><br>
        Nome do produto: <input type="text" name="nome_produto" required><br>
        Valor unitario:<input type="text" name="vUnitario" required><br>
        Quantidade vendida: <input type="text" name="qVendida" required><br>

        <button type="submit">Enviar</button>


    </form>

   <?php 
   function verificar(){
        $NomeCliente = $_POST["nome_cliente"];
        $estoque = $_POST["qEstoque"];
        $nomeProduto = $_POST["nome_produto"];
        $quantidadeV = $_POST["qVendida"];
        $vip = isset($_POST["vip"]);
        $valor = $_POST["vUnitario"];

        if($quantidadeV > $estoque){
            echo "<script>alert('Quantidade de vendas maior que estoque')</script>";
        }
        else{
            if($vip){
                $valoruf = $valor*0.80;
            }
            else{
                $valoruf = $valor;
            }
            $valort = $valoruf*$quantidadeV;
            echo "<h1>Informações de Venda</h1><br>";
            echo "Nome do cliente: $NomeCliente <br>";
            echo "Produto: $nomeProduto <br>";
            echo "VIP: " . ($vip ? "Sim" : "Não") . "<br>";
            echo "Estoque: $estoque <br>";
            echo "Quantidade vendida: $quantidadeV <br>";
            echo "Valor unitário: R$ " . number_format($valoruf, 2, ',', '.') . "<br>";
            echo "<strong>VALOR TOTAL: R$".$valort."</strong>";

        }
   };

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    verificar();
   }
   ?>
    
</body>
</html>
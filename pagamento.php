<!DOCTYPE html>
<html lang = "pt">
<head>
   <meta charset = "UTF-8">
   <title>Confirmação do pagamento</title>
</head>

<body>

<h1>Pagamento</h1>

<?php
$metodo = $_GET["metodo"];
$telemovel = $_GET["telemovel"];
$nome = $_GET["nome"];
$numero = $_GET["numero"];
$validade = $_GET["validade"];
$cvv = $_GET["cvv"];

echo "<p>Metodo de pagamento: $metodo</p>";

   if ($metodo == "mbway") {
	echo "<p>Telemóvel: $telemovel</p>";
   }
   else if ($metodo == "cartao") {
	echo "<p>Nome no cartão: $nome</p>";
	echo "<p>Número do cartão: $numero</p>";
	echo "<p>Validade do cartão: $validade</p>";
	echo "<p>CVV do cartão: $cvv</p>";
   }
?>

</body>
</html>

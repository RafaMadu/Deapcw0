<!DOCTYPE html>
<html lang = "pt">
<head>
   <meta charset = "UTF-8">
   <title>Confirmação do pagamento</title>
</head>

<body>

<h1>Dados do cliente:</h1>

<?php
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$email = $_GET["email"];
$telemovel = $_GET["telemovel"];
$fatura = $_GET["fatura"];

$nome1 = $_GET["nome1"];
$sobrenome1 = $_GET["sobrenome1"];
$email_fatura = $_GET["email_fatura"];
$nif = $_GET["nif"];
$codigo_postal = $_GET["codigo_postal"];

echo "<p>Nome: $nome</p>";
echo "<p>Sobrenome: $sobrenome</p>";
echo "<p>Email: $email</p>";
echo "<p>Telemóvel: $telemovel</p>";
echo "<p>Deseja fatura: $fatura</p>";

   if($fatura == "sim") {
	echo "<h2>Dados faturação:</h2>"
	echo "<p>Nome para fatura: $nome1</p>";
	echo "<p>Morada: $morada</p>";
	echo "<p>Email da fatura: $email_fatura</p>";
	echo "<p>NIF: $nif</p>";
	echo "<p>Código Postal: $codigo_postal</p>";
}
?>

</body>
</html>

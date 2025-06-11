
<?php


$db = new SQLite3("metodospagamentofaturaçao.db");
// criação da tabela metodos pagamento
$db->exec("CREATE TABLE metodospagamentofaturaçao(id INTEGER PRIMARY KEY, nome  TEXT, sobrenome TEXT,email TEXT,telemovel INT,fatura TEXT,nome1 TEXT,sobrenome1 TEXT,email_fatura TEXT, nif INT,codigo_postal INT )"); //(1)
$db->exec("INSERT INTO Viaturas(nome, telemovel) VALUES('Fiat', 21644)"); //(2)
echo "<h3>Tabela de Viaturas </h3>";
$sqlvar = "select * from Viaturas ;";
$result = $db->query($sqlvar); //(3)
echo “<table>\n<th> Id </th><th> Marca </th><th> Preço </th>\n”;
while ($row = $result->fetchArray(SQLITE3_ASSOC)) //(4)
{
echo ‘<tr><td>’ . $row['id'] . '</td><td>' . $row['marca'] . '</td><td>' . $row['preco']
. “</td></tr>\n”;
}
echo ‘</table>’;
unset($db);

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
?>


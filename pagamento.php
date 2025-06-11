
<?php

$db = new SQLite3 ('pagamento.db');

$db->exec("CREATE TABLE Pagamentos(id INTEGER PRIMARY KEY, metodo TEXT, telemovel INT, nome TEXT, numero INT, validade INT, cvv INT)");

$metodo = $_GET["metodo"];
$telemovel = $_GET["telemovel"];
$nome = $_GET["nome"];
$numero = $_GET["numero"];
$validade = $_GET["validade"];
$cvv = $_GET["cvv"];

 echo "<h3>Tabela de Formas de Pagamento </h3>";
 $sqlvar = "select * from Pagamentos";

 $result = $db->query($sqlvar);

 echo "<table>\n<th> Id </th><th> Telemovel </th><th> Nome </th><th> Número </th><th> Validade </th><th> CVV </th>\n";
 while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["metodo"] . "</td><td>" . $row["telemovel"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["validade"] . "</td><td>" . $row["cvv"]. “</td></tr>\n”;
 }
 echo "</table>";
 unset($db);


?>

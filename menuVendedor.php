<?php
$db = new SQLite3('test.db');

// criação da tabela de credenciais

$db->exec("CREATE TABLE Cred(id INTEGER PRIMARY KEY, username TEXT, password TEXT)"); //(1)
$db->exec("INSERT INTO exemplo(username, password) VALUES('admin', admin123)"); //(2)
$db->exec("INSERT INTO Cred(username, password) VALUES('vendedor', vend123)"); //(2)

echo "<h3> Credenciais </h3>";

$sqlvar = "select * from Cred ;";
$result = $db->query($sqlvar); //(3)
echo “<table>\n<th> Id </th><th> Username </th><th> Password </th>\n”;
while ($row = $result->fetchArray(SQLITE3_ASSOC)) //(4)
{
echo ‘<tr><td>’ . $row['id'] . '</td><td>' . $row['username'] . '</td><td>' . $row['password']
. “</td></tr>\n”;
}
echo ‘</table>’;
unset($db);
?>

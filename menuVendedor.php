<?php
$credenciaisValidas = ['admin' => 'admin123', 'vendedor1' => 'venda2023', 'joao' => 'abc123'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['pwd'] ?? '';

    // Validar credenciais
if ($username === $credenciaisValidas['username'] && 
    $password === $credenciaisValidas['password']) {
    
    // Credenciais corretas - redirecionar para a área restrita
    header('Location: areaRestritaVendedor.php');
    exit();
} else {
    // Credenciais incorretas - voltar ao formulário com mensagem de erro
    header('Location: menuVendedor.php?error=1');
    exit();
}
?>

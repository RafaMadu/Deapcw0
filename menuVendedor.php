<?php
$credenciaisValidas = ['admin' => 'admin123', 'vendedor1' => 'venda2023', 'joao' => 'abc123'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['pwd'] ?? '';

    // Verificação com password em texto plano (apenas para exemplo)
    if (array_key_exists($username, $credenciaisValidas) {
        if ($password === $credenciaisValidas[$username]) {
            session_start();
            $_SESSION['vendedor_autenticado'] = true;
            $_SESSION['username'] = $username;
            header('Location: dashVendedor.php');
            exit();
        }
    }
    
    // Se falhar, redireciona com mensagem de erro via GET
    header('Location: menuVendedor.html?erro=1');
    exit();
}
?>

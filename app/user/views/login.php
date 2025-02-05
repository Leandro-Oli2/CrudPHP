<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require __DIR__.'/../../DB/Database.php';

class Login {
    public static function login($username, $senha){
        $db = new Database('usuarios');
        
        // Alterando para usar o 'nome' em vez de 'email'
        $query = "SELECT id, nome, email, senha, is_admin FROM usuarios WHERE nome = ?";
        
        // Corrigindo o erro na chamada do execute
        $stmt = $db->execute($query, [$username]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['is_admin'] = $usuario['is_admin'];
            return true;
        } else {
            return false;
        }
    }

    public static function islogged() {
        return isset($_SESSION['usuario_id']);
    }

    public static function requireLogin() {
        if (!self::islogged()) {
            header('Location: login.php'); // Corrigir o caminho do arquivo de login
            exit;
        }
    }

    public static function requireLogout() {
        session_destroy();
        header('Location: login.php'); // Certifique-se de que o caminho está correto
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hamburgueria Delícia</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../public/css/login.css"> 
</head>
<body>
    <header class="header-nav">
        <nav class="navbar">
            <div class="logo-container">
                <a href="../../../index.php">
                    <img src="../../../public/assets/img/Orange and Blue Illustrative Circle Food Logo.png" alt="Logo do Restaurante">
                </a>
            </div>
        </nav>
    </header>

    <main class="login-area">
        <div class="login-box">
            <h2>Login</h2>
            <form action="../../../app/user/controllers/login_process.php" method="POST"> 
                <div class="input-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-button">Entrar</button>
            </form>
            <p class="signup-link">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </main>

    <footer class="footer-section">
        <div class="footer-content">
            <p>&copy; 2024 PANDAS BBQ. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

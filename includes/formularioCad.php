<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Hamburgueria Delícia</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../public/css/register.css">
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

    <main class="register-area">
        <div class="register-box">
            <h2>Cadastrar</h2>
            <form method="post" action="../../../app/user/controllers/Usercontroller.php"> 
                <div class="input-group">
                    <label for="username">Nome de Usuário</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirmar Senha</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <div class="input-group">
                    <label for="is_admin">Administrador?</label>
                    <input type="checkbox" id="is_admin" name="is_admin" value="1">
                </div>
                <button type="submit" class="submit-button">Registrar</button>
            </form>
            <p class="login-link">Já tem uma conta? <a href="../views/login.php">Entrar</a></p>
        </div>
    </main>

    <footer class="footer-section">
        <div class="footer-content">
            <p>&copy; 2024 PANDAS BBQ. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
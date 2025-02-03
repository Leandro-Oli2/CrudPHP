<?php
    session_start();
    if ($_SESSION['is_admin'] != 1) {
        header('Location: ../login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/dashboard.css">
</head>
<body>
    <div class="container">
        <h2 class="main-title">Bem-vindo, Admin!</h2>
        <p class="welcome-message">Aqui você pode gerenciar as reservas e as operações da hamburgueria.</p>
        
        <div class="button-group">
            <a href="reservasadm.php" class="button">Ver Reservas</a>
        </div>
    </div>
</body>
</html>
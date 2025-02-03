<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/Home.css">
    <script src="public/js/home.js"></script>
</head>
<body>
    <header class="headNav">
        <nav class="navb">
            <div class="logo">
                <a href="index.php">
                    <img src="public/assets/img/Orange and Blue Illustrative Circle Food Logo.png" alt="Logo do Restaurante">
                </a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                
                <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1): ?>
                    
                    <li><a href="app/adm/views/dashboard_admin.php">Dashboard</a></li>
                <?php else: ?>
                    
                    <li><a href="app/user/views/reserva.php">Reservas</a></li>
                <?php endif; ?>

                <li><a href="app/user/views/cardapio.php">Cardápio</a></li>

                <?php if (isset($_SESSION['user_id'])): ?>
                    
                    <li><a href="app/user/controllers/logout.php">Logout</a></li>
                <?php else: ?>
                    
                    <li><a href="app/user/views/login.php">Login</a></li>
                <?php endif; ?>
            </ul>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://instagram.com" target="_blank">
                    <i class='bx bxl-instagram' ></i>
                </a>
            </div>
        </nav>
    </header>

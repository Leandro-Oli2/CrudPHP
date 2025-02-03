<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Pandas BBQ</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../public/css/cardapio.css">
</head>
<body>
    <header class="top-navigation">
        <nav class="nav-bar">
            <div class="back-button">
                <div class="back-button">
                    <a href="../../../index.php">Voltar</a>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="reserva.php">Reservas</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://instagram.com" target="_blank">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </nav>
    </header>
    
    <header class="menu-header">
        <h1>Cardápio</h1>
        <p>Descubra nossos deliciosos hambúrgueres e acompanhamentos!</p>
    </header>
    
    <main class="menu-section">
        <div class="menu-item">
            <img src="../../../public/assets/img/card1.png" alt="X-Voucher Grill">
            <h3 class="item-title">X-Voucher Grill</h3>
            <span class="item-description">Suculentos espetinhos de carne bovina grelhados, acompanhados de batatas fritas.</span>
            <div class="item-price">R$ 25,00</div>
            <button class="btn-add">Adicionar ao Carrinho</button>
        </div>
        <div class="menu-item">
            <img src="../../../public/assets/img/card1.png" alt="Voucher Burger">
            <h3 class="item-title">Voucher Burger</h3>
            <span class="item-description">Um hambúrguer clássico com queijo, alface e tomate, servido com batatas fritas.</span>
            <div class="item-price">R$ 30,00</div>
            <button class="btn-add">Adicionar ao Carrinho</button>
        </div>
        <div class="menu-item">
            <img src="../../../public/assets/img/card1.png" alt="Dev Dog Deluxe">
            <h3 class="item-title">Dev Dog Deluxe</h3>
            <span class="item-description">Delicioso cachorro-quente com salsicha grelhada e molho especial.</span>
            <div class="item-price">R$ 20,00</div>
            <button class="btn-add">Adicionar ao Carrinho</button>
        </div>
        <div class="menu-item">
            <img src="../../../public/assets/img/card1.png" alt="Combo Voucher">
            <h3 class="item-title">Combo Voucher</h3>
            <span class="item-description">Um combo perfeito com hambúrguer, batatas fritas e refrigerante.</span>
            <div class="item-price">R$ 45,00</div>
            <button class="btn-add">Adicionar ao Carrinho</button>
        </div>
        <div class="menu-item">
            <img src="../../../public/assets/img/card1.png" alt="Dev Wrap Supreme">
            <h3 class="item-title">Dev Wrap Supreme</h3>
            <span class="item-description">Wrap recheado com carne, queijo e vegetais frescos.</span>
            <div class="item-price">R$ 28,00</div>
            <button class="btn-add">Adicionar ao Carrinho</button>
        </div>
    </main>
    
    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2024 PANDAS BBQ. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
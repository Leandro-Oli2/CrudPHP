<?php
    
    require __DIR__.'/../models/cadastroUsuario.php';



    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        $client = new cadastroUsuario;
        $client->nome = $_POST['username'];
        $client->email = $_POST['email'];
        $client->senha = $_POST['password'];
        $client->is_admin = isset($_POST['is_admin']) ? 1 : 0;

        if ($client->cadastrar()) {
            header('Location: ../../../index.php?status=success');  
            exit();
        } else {
            header('Location: /app/user/views/cadastro.php?status=error');  
            exit();
        }
    }
?>

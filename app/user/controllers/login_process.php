<?php
require __DIR__.'/../../DB/Database.php';

$db = new Database('usuarios');

if (isset($_POST['username'], $_POST['password'])) {
   
    $stmt = $db->select("nome = ?", [$_POST['username']]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC); 

    if (!$usuario) {
        echo "Usuário não encontrado!";
        exit();
    }

    if (!password_verify($_POST['password'], $usuario['senha'])) {
        echo "Senha incorreta!";
        exit();
    }

  
    session_start();
    $_SESSION['user_id'] = $usuario['id'];
    $_SESSION['user_nome'] = $usuario['nome'];
    $_SESSION['user_email'] = $usuario['email'];
    $_SESSION['is_admin'] = $usuario['is_admin'];    

   
    if ($_SESSION['is_admin'] == 1) {
        header('Location: /CRUDPHP/app/adm/views/dashboard_admin.php');
    } else {
        header('Location: /CRUDPHP/index.php');
    }
    exit();
}
?>

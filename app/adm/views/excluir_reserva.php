<?php
session_start();
if ($_SESSION['is_admin'] != 1) {
    header('Location: ../login.php');
    exit();
}

require __DIR__.'/../../DB/Database.php'; 


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $db = new Database('reservas'); 
    $where = 'id = :id';
    $params = [':id' => $id];

    $db->delete($where, $params);
    
    
    header('Location: reservasadm.php');
    exit();
} else {
    
    echo "ID inválido!";
    exit();
}
?>

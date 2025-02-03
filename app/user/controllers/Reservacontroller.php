<?php

require __DIR__.'/../models/reservas.php';

if (isset($_POST['name'], $_POST['people'], $_POST['table'], $_POST['date'], $_POST['time'])) {
    
    $reserv = new Reservas;
    
    
    $reserv->nome = $_POST['name'];              
    $reserv->numero_pessoas = $_POST['people'];   
    $reserv->numero_mesa = $_POST['table'];       
    $reserv->data = $_POST['date'];               
    $reserv->hora = $_POST['time'];               

    if ($reserv->cadastrar()) {
        header('Location: ../../../index.php?status=success');  
        exit();
    } else {
        header('Location: /app/user/views/reserva.php?status=error');  
        exit();
    }
}

?>

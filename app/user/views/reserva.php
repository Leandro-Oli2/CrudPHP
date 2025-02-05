<?php
    session_start();
    require __DIR__.'/Login.php';
    Login::requireLogin(); 
    include __DIR__.'/../../../includes/formularioRes.php';
?>

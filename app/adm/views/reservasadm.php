<?php
require __DIR__.'/../../DB/Database.php'; 


session_start();


if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
    header('Location: ../login.php');
    exit();
}


$db = new Database('reservas'); 


$reservas = $db->select(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reservas - Hamburgueria</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/reservaAdm.css">
</head>
<body>
    <div class="container">
        <h2>Ver Reservas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Qtd.Pessoas</th>
                    <th>Num_Mesa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($reservas): ?>
                    <?php foreach ($reservas as $reserva): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($reserva['id']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['nome']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['data']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['hora']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['numero_pessoas']); ?></td>
                            <td><?php echo htmlspecialchars($reserva['numero_mesa']); ?></td>
                            <td>
                                <a href="editar_reserva.php?id=<?php echo $reserva['id']; ?>" class="button">Editar</a>
                                <a href="excluir_reserva.php?id=<?php echo $reserva['id']; ?>" class="button">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Nenhuma reserva encontrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
require __DIR__.'/../../DB/Database.php'; // Ajuste o caminho conforme necessário

// Inicie a sessão
session_start();

// // Verifique se o usuário está logado e é um administrador
// if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
//     header('Location: ../login.php');
//     exit();
// }


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Garante que o id seja um número inteiro
    $db = new Database('reservas'); 
    
    // Tente buscar a reserva no banco
    $reserva = $db->select('id = :id', [':id' => $id])->fetch(PDO::FETCH_ASSOC);

    // Verifique se a reserva foi encontrada
    if (!$reserva) { // Se for false, significa que não encontrou nada
        echo "Reserva não encontrada.";
        exit;
    }
} else {
    header('Location: reservasadm.php'); // Redireciona caso não haja o parâmetro id
    exit();
}


// Se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $numero_pessoas = $_POST['numero_pessoas'];
    $numero_mesa = $_POST['numero_mesa'];

    // Atualiza a reserva
    $db->update("id = ?", ['nome' => $nome, 'data' => $data, 'hora' => $hora, 'numero_pessoas' => $numero_pessoas, 'numero_mesa' => $numero_mesa], [$id]);

    header('Location: reservasadm.php'); // Redireciona após a atualização
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva - Hamburgueria</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/editar_reserva.css">
</head>
<body>
    <div class="container">
        <h2>Editar Reserva</h2>
        <?php if ($reserva): ?>
            <form method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($reserva['nome']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" id="data" name="data" value="<?php echo htmlspecialchars($reserva['data']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input type="time" id="hora" name="hora" value="<?php echo htmlspecialchars($reserva['hora']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="numero_pessoas">Numero de Pessoas</label>
                    <input type="text" id="numero_pessoas" name="numero_pessoas" value="<?php echo htmlspecialchars($reserva['numero_pessoas']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="numero_mesa">Numero da Mesa</label>
                    <input type="text" id="numero_mesa" name="numero_mesa" value="<?php echo htmlspecialchars($reserva['numero_mesa']); ?>" required>
                </div>
                <button type="submit" class="button">Salvar</button>
                <a href="reservasadm.php" class="button" style="background-color: #ccc;">Cancelar</a>
            </form>
        <?php else: ?>
            <p>Reserva não encontrada.</p>
        <?php endif; ?>
    </div>
</body>
</html>
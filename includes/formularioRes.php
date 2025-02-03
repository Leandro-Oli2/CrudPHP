<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Mesa - Pandas BBQ</title>
    <link rel="stylesheet" href="../../../public/css/reserva.css"> 
</head>
<body>
    <header>
        <h1>Pandas BBQ</h1>
        <h2>Reservas de Mesa</h2>
    </header>

    <main>
        <form id="reservation-form" method="POST" action="../../../app/user/controllers/Reservacontroller.php">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="people">Número de Pessoas:</label>
            <input type="number" id="people" name="people" min="1" required>

            <label for="table">Número da Mesa:</label>
            <input type="number" id="table" name="table" min="1" required>

            <label for="date">Data da Reserva:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Hora da Reserva:</label>
            <input type="time" id="time" name="time" required>

            <button type="submit">Reservar Mesa</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Pandas BBQ. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
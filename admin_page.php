<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личная страница</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['admin'])): ?>
        <!-- Если вошёл -->
        <a href="exit_login.php">Выход</a>

    <?php else: ?>
        <!-- Если не вошёл -->
        <a href="index.php">Войти</a>

    <?php endif; ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить опрос</title>
    <link rel="stylesheet" href="styles/admin_page.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="admin_menu">
        <a href="admin_page.php" class="exit_btn">Вернуться</a>
        <a href="exit_login.php" class="exit_btn">Выход</a>
    </div>
    <form method="GET" action="add_quiz.php">
        <div class="form_field">
                <label class="form_label">Имя</label>
                <input type="text" name="quiz_name" placeholder="Введите имя" class="form_input" required>
        </div>
        <div class="form_field">
                <label class="form_label">Ссылка (необязательно)</label>
                <input type="text" name="link" placeholder="Введите ссылку" class="form_input">
        </div>
        <div class="form_field">
                <label class="form_label">Статус</label>
                <input type="radio" name="status" value="0" required>Не выполнен
                <input type="radio" name="status" value="1">Выполнен
        </div>
        <button type="submit" name="submit" value="Войти" class="button_add_quiz">Добавить</button>
        



    </form>
</body>
</html>
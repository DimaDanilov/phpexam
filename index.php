<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Вход</title>
</head>
<body>
    <form>
    <h1 class="form_h1">Вход для администратора</h1>
        <div class="form_container">
            <div class="form_field">
                <label class="form_label">Имя</label>
                <input type="text" name="username" placeholder="Введите имя" class="form_input" required>
            </div>
            <div class="form_field">
                <label class="form_label">Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль" class="form_input" required>
            </div>
            <input type="submit" name="submit" value="Войти" class="button_login">
        </div>
    
    
    
    
    </form>
</body>
</html>
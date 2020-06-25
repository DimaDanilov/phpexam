<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личная страница</title>
    <link rel="stylesheet" href="styles/admin_page.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['admin'])): ?>
        <!-- Если вошёл -->
        <div class="admin_menu">
        <a href="exit_login.php" class="exit_btn">Выход</a>
        </div>
        <h1 class="admin_page__title">Добро пожаловать, Админ!</h1>
        <h2 class="questions_title">Текущие опросы</h2>
        <a href="add_quiz_form.php" class="questions_title_link"><h2 class="questions_title">Добавить опрос<img src="img/+.png" class="icon_img"></h2></a>
        
        <?php
        $host="localhost";
        $user="root";
        $password="";
        $db="phpforms_database";
         
        $a=mysqli_connect($host,$user,$password,$db);
        mysqli_select_db($a,$db);
        
        $sql="select * from quiz_table";
        $result=mysqli_query($a, $sql);
        $num_rows=mysqli_num_rows($result);

        $quiz_data=mysqli_fetch_all($result);
        if($num_rows!=0){
            echo'<table class="quiz_table"><tr class="quiz_tr_main"><td class="quiz_td_main">ID</td><td class="quiz_td_main">Название опроса</td><td class="quiz_td_main">Ссылка</td><td class="quiz_td_main">Статус</td><td class="quiz_td_main">Добавить</td><td class="quiz_td_main">Удалить</td></tr>';
            for ($i=0;$i<$num_rows;$i++){
                echo('<tr class="quiz_tr"><td class="quiz_elem">'.$quiz_data[$i][0].'</td><td class="quiz_elem">'.$quiz_data[$i][1].'</td><td class="quiz_elem">'.$quiz_data[$i][2].'</td><td class="quiz_elem">'.$quiz_data[$i][3].'</td><td><a href="add_quiz_form.php"><img src="img/+.png" class="icon_img"></td><td><a href="delete_quiz.php?id='.$quiz_data[$i][0].'"><img src="img/x.png" class="icon_img"></a></td></tr>');
            }
            echo'</table>';
        }

        ?>





    <?php else: ?>
        <!-- Если не вошёл -->
        <div class="admin_menu">
        <a href="index.php" class="exit_btn">Войти</a>
        </div>
        <h1 class="admin_page__title">Вы не вошли в систему!</h1>

    <?php endif; ?>
</body>
</html>


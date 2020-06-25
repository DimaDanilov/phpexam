<?php

$host="localhost";
$user="root";
$password="";
$db="phpforms_database";
 
$a=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($a,$db);

if(isset($_POST['username'])){
    
$uname=$_POST['username'];
$password=$_POST['password'];
    
    $sql="select * from login_form where user='{$uname}'AND password='{$password}'";
    $result=mysqli_query($a, $sql);
    
    if(mysqli_num_rows($result)!=0){
        echo "You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Вход</title>
</head>
<body>
    <form method="POST" action="#">
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
<?php

$host="localhost";
$user="root";
$password="";
$db="phpforms_database";
         
$a=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($a,$db);
        
$sql="delete from quiz_table where ID='{$_GET['id']}'";
echo($sql);
$result=mysqli_query($a, $sql);
header('Location: admin_page.php');

?>
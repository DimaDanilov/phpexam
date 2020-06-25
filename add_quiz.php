<?php
$host="localhost";
$user="root";
$password="";
$db="phpforms_database";
 
$a=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($a,$db);
$quiz_link=$_GET['link'];

if ($quiz_link==0){
    $quiz_link_lenght = rand(13, 50);
    $quiz_link=substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyz', $quiz_link_lenght)), 0, $quiz_link_lenght);
} 
    
$sql="insert into quiz_table (quiz_name, link, status) values('{$_GET['quiz_name']}','{$quiz_link}','{$_GET['status']}')";
$result=mysqli_query($a, $sql);
header('Location: admin_page.php');

?>
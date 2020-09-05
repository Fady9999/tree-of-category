<?php


    $username = $_POST['username'];
    $pass = $_POST['pass'];

    include('database_connection.php');


$sql ="SELECT * FROM logintpl WHERE username='$username' AND pass='$pass'";
$statement = $connect->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();
$num=count($result);
if($num == 1){
    header("location:../index.php");
    
}
else{
    
    echo 'good';
}

?>
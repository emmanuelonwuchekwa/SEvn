<?php 
$conn = mysqli_connect('localhost', 'your_username', 'your_password', 'your_database');
if(!$conn){
    die(mysqli_connect('error'+$conn));
}

?>

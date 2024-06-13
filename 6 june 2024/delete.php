<?php
  include('extensions/connection.php');

  $id = $_GET['deleteid'];

  $sql = "delete from `biodata` where id=$id";

  $result = mysqli_query($conn, $sql);

  if($result){
    header('location:read.php');
  }
?>

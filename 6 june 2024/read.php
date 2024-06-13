<?php
  include('extensions/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">frstName</th>
      <th scope="col">lastName</th>
      <th scope="col">Email</th>
      <th scope="col">phoneNumber</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
<?php 
 $sql= 'select * from `biodata`';
 $result= mysqli_query($conn, $sql);
 while($row= mysqli_fetch_assoc($result)){
   $id= $row['id'];
   $fName= $row['First_Name'];
   $lName= $row['Last_Name'];
   $eAdd= $row['Email'];
   $pNum= $row['Phone_Number'];

   echo '
     <tr>
       <th>'.$id.'</th>
       <td>'.$fName.'</td>
       <td>'.$lName.'</td>
       <td>'.$eAdd.'</td>
       <td>'.$pNum.'</td>
       <td><a href="../5th june/index.php"class="btn btn-secondary">Create</a></td>
       <td><a href="./update.php?updateid='.$id.'"class="btn btn-secondary">Edit</a></td>
       <td><a href="./delete.php?deleteid='.$id.'"class="btn btn-danger">Delete</a></td>
     </tr>
   ';

   
 } 
?> 
  </tbody>
</table>
<a href="../5th june/index.php">Create</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>

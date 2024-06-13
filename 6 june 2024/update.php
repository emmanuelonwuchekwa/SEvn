<?php 
    include("extensions/connection.php");

    $id= $_GET['updateid'];
    $sql= "select * from `biodata` where id=$id";
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($result);

    $fName= $row['First_Name'];
    $lName = $row['Last_Name'];
    $Eadd = $row['Email'];
    $Pnum = $row['Phone_Number'];

    if(isset($_POST['edit'])){
        $fname= $_POST['fName'];
        $lname= $_POST['lName'];
        $eAdd= $_POST['eAdd'];
        $pNum= $_POST['pNum'];
        
        $sql= "update `biodata` set First_Name='$fname', Last_Name='$lname', Email='$eAdd', Phone_Number='$pNum' where id='$id'";
        $result= mysqli_query($conn, $sql);
    
        if($result){
            header('location:read.php');
        }
    };

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
   <!-- <h2>Lorem, ipsum dolor.</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit culpa sint eligendi.</p> -->


<form method="POST">
    <div class="form-group mt-3">
        <label for="exampleInputEmail1">First Name</label>
        <input name="fName" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="First Name">
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputPassword1">Last Name</label>
        <input name="lName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputEmail1">Email Address</label>
        <input name="eAdd" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group mt-3">
        <label for="exampleInputPassword1">Phone Number</label>
        <input name="pNum" type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
    </div><br>
    <button name="edit" type="submit" class="btn btn-primary">Update</button>
</form>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

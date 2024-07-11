<?php
    include 'connect.php';
    $id=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile',password='$password' where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            // header("Location : display.php");
            // echo "added";
            header('location: display.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>LogIn Form</h1>
        <form method="POST">
            <label style="display: block; margin-bottom: 10px;">Name:</label>
            <input type="text" name="username" placeholder="write username" style="width:50%; border:2px solid black ; padding:5px" required>
            <br>
            <label style="display: block; margin-bottom: 10px;">Email:</label>
            <input type="text" name="email" placeholder="write email" style="width:50%; border:2px solid black ; padding:5px" required>
            <br>
            <label style="display: block; margin-bottom: 10px;">Mobile:</label>
            <input name="mobile" placeholder="write mobile" style="width:50%; border:2px solid black ; padding:5px" required>
            <br>
            <label style="display: block; margin-bottom: 10px;">Password:</label>
            <input type="password" name="password" placeholder="write password" style="width:50%; border:2px solid black ; padding:5px" required>
            <br>
            <button type="submit" class="btn-btn-primary" name="submit" style="margin-top:10px">Update</button>
        </form>
    </div>
</body>
</html>
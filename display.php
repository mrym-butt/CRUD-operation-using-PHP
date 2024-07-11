<?php
 include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary"><a href="signin.php" class="text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="Select * from `crud`";
                    $result= mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];
                            $password=$row['password'];
                            echo '<tr>
                            <th>'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php? updateid='.$id.' " class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.' " class="text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
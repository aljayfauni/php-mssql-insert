<?php
include './includes/dbh.inc.php';
if(isset($_POST['register'])){

    $id=1;
    $username =$_POST['username'];
    $password =$_POST['password'];


    $insert ="Insert into tbl_user(id,username,password) values('$id','$username','$password')";
    $result =sqlsrv_query($conn,$insert);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"action="">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="register" value="Submit">
    </form>
</body>
</html>
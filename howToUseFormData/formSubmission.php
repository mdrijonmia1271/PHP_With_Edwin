<?php


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "UserName : ".$username.'<br>';
    echo "Password : ".$password.'<br>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaking for form submission</title>
</head>
<body>
    

    <form action="formSubmission.php" method="post">

        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
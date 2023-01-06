<?php
$empt_error = '';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $name = array("korim","rahim",'Korim',"Rohim");
    if(empty($username) or (empty($password))){
        $empt_error = "Please Fil Up this field".'<br>';
    }
    if(!empty($username) && !empty($password)){
        if(!empty($username) && strlen($username) > 10){
            echo "Username cannot be longer than Ten".'<br>';
        }
        elseif(!empty($username) && strlen($username) < 5){
            echo "Username has to be longer than five".'<br>';
        }
        elseif(in_array($username,$name)){
            echo " \"Sorry you are not allowed\"".'<br>';
        }
        else{
            echo "UserName : ".$username.'<br>';
            echo "Password : ".$password.'<br>';
        }
        
    }

    
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
    

    <form action="checkValidity.php" method="post">

        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <?php echo $empt_error; ?>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <?php echo $empt_error; ?>
        <input type="submit" name="submit">
    </form>
</body>
</html>
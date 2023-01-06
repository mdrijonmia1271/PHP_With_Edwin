<?php
$empt_error = '';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $name = array("korim","rahim",'Korim',"Rohim");
    if(empty($username) or (empty($password))){
        echo "Please Fil up username and possword".'<br>';
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

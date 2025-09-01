<?php

session_start();


if(isset($_POST["submit"]))
    {
    $username=$_POST["user"];
    $password=$_POST["pass"];

    if(($username=="admin")&&($password=="1234")){
        $_SESSION['loggedin']="yes";
        $_SESSION['username']=$username;
       header("Location:profile.php");
        exit;
    }
    
    else{
        echo"access denied";
        echo"<a href='login.html'>goto Login</a>";
    }

    }

?>
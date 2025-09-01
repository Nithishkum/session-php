<?php
session_start();
if(($_SESSION['loggedin'])&&($_SESSION['loggedin']=="yes")){
    $username=$_SESSION['username'];
    echo"Welcome to $username";
    echo"do you want to logout<a href='logout.php'>logout</a>";
}
else{

}
?>
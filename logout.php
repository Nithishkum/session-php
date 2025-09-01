<?php
session_start();
session_unset();
echo"session is destroyed";
echo"<br>";
echo"go to login again<a href='login.html'>login</a>";
?>
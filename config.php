<?php
//define("PATH","http://MvcCleanBlog/");
define("PATH","http://localhost/MvcCleanBlog/");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define("THEME",PATH."views/theme/");

global $con;
$con = mysqli_connect("localhost","root","","mvccleanblog");

?>

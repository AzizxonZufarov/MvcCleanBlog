<?php
//define("PATH","http://MvcCleanBlog/admin/");
define("PATH","http://localhost/MvcCleanBlog/admin/");
define("CONTR","controller/controller.php");
define("MODEL","model/model.php");
define("THEME",PATH."views/theme/");

global $con;
$con = mysqli_connect("localhost","root","","mvccleanblog");

?>

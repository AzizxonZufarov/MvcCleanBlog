<?php
session_start();
include MODEL;

if(empty($_GET['view'])){

	$view = "index";


}else{

	$view = $_GET['view'];
}
$categories = categories();
$users = users();
$posts = posts();
$comments = comments();

switch($view){


case "addcat":
if($_POST){
$addcat = addcat();
}
break;

case "editcat":
	$id = $_GET['id'];
$editcat = editcat($id);
if($_POST){
updcat($id);

}
break;
case "dellcat":

dellcat($id);
break;

case "adduser":
if($_POST){
$adduser = adduser();
}
break;


case "delluser":

delluser($id);
break;


case "edituser":
	$id = $_GET['id'];
$edituser = edituser($id);
if($_POST){
upduser($id);

}
break;

case "editpost":
$id = $_GET['id'];
$editpost = editpost($id);
if($_POST){
updpost($id);

}
break;

case "addpost":
if($_POST){
$addpost = addpost();
}
break;

case "dellpost":

dellpost($id);
break;


case "dellcomment":

dellcomment($id);
break;

case "confirmcomment":

confirmcomment($id);
break;


}
include $_SERVER['DOCUMENT_ROOT']."/MvcCleanBlog/admin/views/theme/index.php";
//include $_SERVER['DOCUMENT_ROOT']."/admin/views/theme/index.php";
?>

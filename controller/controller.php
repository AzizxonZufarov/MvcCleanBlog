<?php
session_start();
include MODEL;

if(empty($_GET['view'])){

	$view = "index";


}else{

	$view = $_GET['view'];
}


$menu = menu();
$categories = categories();
$friend = friend();
$slider = slider();



switch($view){

case "index":
$news = news();
break;

case "cats":
$id = $_GET['id'];
$cats = cats($id);

break;

case "friends":
$id = $_GET['id'];
$friends = friends($id);
break;

case "detail":
$id = $_GET['id'];
$detail = detail($id);
$comment=news_comment($id);
$total_views=getcount($id);
if($_POST){
	addcom($id);

	header("location:?view=detail&id=$id");}
break;


case "reg":
if($_POST){
$reg=reg();

	header("location:index.php");
}
break;

case 'auth':


if($_POST){
	auth();
			header("location:?view=cab");
}
break;
case 'cab':


$id = $_SESSION['id'];

$user = user($id);
break;

case 'deletecab':

deletecab($id);
break;

case 'editcab':
$id = $_SESSION['id'];
$user = user($id);
if($_POST){

updcab($id);
}
break;

case 'logout':
logout();
break;
}










include $_SERVER['DOCUMENT_ROOT']."/MvcCleanBlog/views/theme/index.php";
//include $_SERVER['DOCUMENT_ROOT']."/views/theme/index.php";
?>

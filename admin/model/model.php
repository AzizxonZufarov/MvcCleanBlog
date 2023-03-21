<?
function categories(){

	global $con;
	$res = mysqli_query($con,"SELECT * FROM categories");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
		}
		return $arr;
}
function users(){

	global $con;
	$res = mysqli_query($con,"SELECT * FROM users");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
		}
		return $arr;
}
function posts(){

	global $con;
	$res = mysqli_query($con,"SELECT * FROM posts");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
		}
		return $arr;



}



function comments(){

	global $con;
	$res = mysqli_query($con,"SELECT * FROM comments");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
		}
		return $arr;
}




function addcat(){
		global $con;
	$name = $_POST['name'];
	$res = mysqli_query($con,"SELECT * FROM categories WHERE title= '$name' ");
 $row = mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)<=0){
 $res2 = mysqli_query($con,"INSERT INTO categories (title) VALUES('$name')");

}

header("location:?view=category");
}


function editcat($id){
		global $con;
$res = mysqli_query($con,"SELECT * FROM categories WHERE id = $id");

$row = mysqli_fetch_assoc($res);
		return $row;

}

function updcat($id){
		global $con;
		$categories=$_POST['categories'];
$res = mysqli_query($con,"UPDATE categories SET title = '$categories' WHERE id = $id");
header("location:?view=category");
}

function dellcat($id){
		global $con;
	$id = $_GET['id'];
		$res = mysqli_query($con,"DELETE FROM categories WHERE id = $id");

header("location:?view=category");
}



function adduser(){
	global $con;
	$name = $_POST['name'];

	$login = $_POST['login'];

	$password = $_POST['password'];

	$email = $_POST['email'];

	$img = $_FILES['img']['name'];
$admin = $_POST['admin'];
	$res = mysqli_query($con,"SELECT * FROM users WHERE name= '$name' ");

if(mysqli_num_rows($res)<=0){
	$res2 = mysqli_query($con,"INSERT INTO users (name, login, password, email, img,isAdmin) VALUES('$name','$login','$password','$email','$img',$admin)");

}

header("location:?view=users");

}
function delluser($id){
		global $con;
	$id = $_GET['id'];
		$res = mysqli_query($con,"DELETE FROM users WHERE id = $id");

header("location:?view=users");
}


function edituser($id){
global $con;
$res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($res);
return $row;

}

function editpost($id){
global $con;
$res = mysqli_query($con,"SELECT * FROM posts WHERE id = $id");
$row = mysqli_fetch_assoc($res);
return $row;

}

function upduser($id){
		global $con;


$name = $_POST['name'];

$login = $_POST['login'];

$password = $_POST['password'];

$email = $_POST['email'];

$img = $_FILES['img']['name'];
$admin = $_POST['admin'];
if($_FILES['img']['name'] != NULL){
$res = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
$row  = mysqli_fetch_assoc($res);
$old = $row['img'];
		unlink("regupl/".$old);
move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);
$res = mysqli_query($con,"UPDATE users SET name = '$name', login = '$login', password = '$password', email = '$email', img = '$img', isAdmin = '$admin' WHERE id = $id");

header("location:?view=users");
}else{

	$res = mysqli_query($con,"UPDATE users SET name = '$name', login = '$login', password = '$password', email = '$email', img = '$img', isAdmin = '$admin' WHERE id = $id");
header("location:?view=users");

}
}





function addpost(){
	global $con;

	$author = $_POST['author'];


	$categories = $_POST['categories'];

	$text = $_POST['text'];

	$title = $_POST['title'];

	$img = $_FILES['img']['name'];

	$res = mysqli_query($con,"INSERT INTO posts (author, categories, text, title, img) VALUES('$author','$categories','$text','$title','$img')");


header("location:?view=posts");
}


function dellpost($id){
		global $con;
	$id = $_GET['id'];
		$res = mysqli_query($con,"DELETE FROM posts WHERE id = $id");

header("location:?view=posts");
}




function dellcomment($id){
		global $con;
	$id = $_GET['id'];
		$res = mysqli_query($con,"DELETE FROM comments WHERE id = $id");

header("location:?view=comments");
}


function confirmcomment($id){
	global $con;
	$id = $_GET['id'];
	$res = mysqli_query($con,"UPDATE comments SET status = 1 WHERE id = $id");

header("location:?view=comments");
}


function updpost($id){
global $con;
$author = $_POST['author'];

$categories = $_POST['categories'];
$text = $_POST['text'];
$title = $_POST['title'];

$img = $_FILES['img']['name'];

if($_FILES['img']['name'] != NULL){
$res = mysqli_query($con, "SELECT * FROM posts WHERE id = $id");
$row  = mysqli_fetch_assoc($res);
$old = $row['img'];
	unlink("upl/".$old);
move_uploaded_file($_FILES['img']['tmp_name'],"upl/".$img);
$res = mysqli_query($con,"UPDATE posts SET author = '$author', categories = '$categories', `text` = '$text', title = '$title', img = '$img' WHERE id = $id");
header("location:?view=posts");
}else{
	$res = mysqli_query($con,"UPDATE posts SET author = '$author', categories = '$categories', `text` = '$text', title = '$title', img = '$old' WHERE id = $id");
header("location:?view=posts");

}
}

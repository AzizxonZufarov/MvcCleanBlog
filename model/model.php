<?
function menu(){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM menu");


	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}



function categories(){

	global $con;

	$res_cat = mysqli_query($con,"SELECT * FROM categories");


	$arr_cat = [];

	while($row_cat = mysqli_fetch_assoc($res_cat)){

		$arr_cat[] = $row_cat;

	}
	return $arr_cat;


}



function friend(){

	global $con;

	$res_friend = mysqli_query($con,"SELECT * FROM friends");


	$arr_friend = [];

	while($row_friend = mysqli_fetch_assoc($res_friend)){

		$arr_friend[] = $row_friend;

	}
	return $arr_friend;


}



function slider(){

	global $con;

	$res_slider = mysqli_query($con,"SELECT * FROM slider");


	$arr_slider = [];

	while($row_slider = mysqli_fetch_assoc($res_slider)){

		$arr_slider[] = $row_slider;

	}
	return $arr_slider;


}



function cats($id){

	global $con;

	$res_cats = mysqli_query($con,"SELECT * FROM posts WHERE cat_id = $id");

	$arr_cats = [];

	while($row_cats = mysqli_fetch_assoc($res_cats)){

		$arr_cats[] = $row_cats;

	}
	return $arr_cats;


}

function friends($id){

	global $con;

	$res_friends = mysqli_query($con,"SELECT * FROM posts WHERE friend_id = $id");

	$arr_friends = [];

	while($row_friends = mysqli_fetch_assoc($res_friends)){

		$arr_friends[] = $row_friends;
	}
	return $arr_friends;

}



function news(){

	global $con;

	$res_news = mysqli_query($con,"SELECT * FROM posts");


	$arr_news = [];

	while($row_news = mysqli_fetch_assoc($res_news)){

		$arr_news[] = $row_news;

	}
	return $arr_news;


}


function detail($id){

	global $con;

	$res_cat = mysqli_query($con,"SELECT * FROM posts WHERE id = $id");

	$row_cat = mysqli_fetch_assoc($res_cat);

	return $row_cat;


}

function addcom($id){

global $con;

$author	=$_POST['author'];
$text = $_POST['text'];
$email	=$_POST['email'];

$res = mysqli_query($con,"INSERT INTO comments (author,text,email,news_id) VALUES('$author','$text','$email',$id)");

}

function news_comment($id){

	global $con;

	$res = mysqli_query($con,"SELECT * FROM comments WHERE news_id = $id AND status=1");

	$arr = [];

	while($row = mysqli_fetch_assoc($res)){

		$arr[] = $row;

	}
	return $arr;


}



function reg(){

	global $con;
	$name = $_POST['name'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$img = $_FILES['img']['name'];

	move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);

	$res = mysqli_query($con,"INSERT INTO users (name,login,password,email,img)VALUES('$name','$login','$password','$email','$img')");


}




function auth(){
		global $con;
		$login = $_POST['login'];
		$password = $_POST['password'];
		$res = mysqli_query($con,"SELECT * FROM users WHERE login = '$login' AND password = '$password' ");
		if(mysqli_num_rows($res)>0){
			$row = mysqli_fetch_assoc($res);
			$_SESSION['id'] = $row['id'];

			header("location:?view=cab&id=$id");
		}
		else{

			header("location:?view=auth");
		}
	return $row;
}
function user($id){
		global $con;
		$res = mysqli_query($con,"SELECT * FROM users  WHERE id = $id ");
		$row = mysqli_fetch_assoc($res);
		return $row;

	}
function updcab($id){
		global $con;
	$id = $_POST['id'];

	$name = $_POST['name'];

	$login = $_POST['login'];

	$password = $_POST['password'];

	$email = $_POST['email'];

	$img = $_FILES['img']['name'];



if($_FILES['img']['name'] != NULL){
	$res = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
	$row  = mysqli_fetch_assoc($res);
	$old = $row['img'];
    unlink("regupl/".$old);
	move_uploaded_file($_FILES['img']['tmp_name'],"regupl/".$img);
	$res = mysqli_query($con,"UPDATE users SET name = '$name', login = '$login', password = '$password', email = '$email', img = '$img' WHERE id = $id");

	header("location:?view=cab");
	}else{
		$res = mysqli_query($con,"UPDATE users SET name = '$name', login = '$login', password = '$password', email = '$email', img = '$img' WHERE id = $id");
	header("location:?view=cab");

	}
}



function logout(){
	unset($_SESSION['id']);
	header("location:index.php");
}


function deletecab(){
		global $con;
			$id = $_SESSION['id'];
$res = mysqli_query($con,"DELETE  FROM users WHERE id = $id");
header("location:index.php");
}





function getcount(){
	  global $con;
	  $id = $_GET['id'];
      $res_cnt =   mysqli_query($con,"SELECT views AS cnt_views FROM posts WHERE id= $id");
   	  $row_cnt = mysqli_fetch_assoc($res_cnt);
	  $res = mysqli_query($con,"UPDATE posts SET `views`=`views`+1 WHERE id= $id");

	  $total_views = $row_cnt['cnt_views'];
	  return $total_views;
}

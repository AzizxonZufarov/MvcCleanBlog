<?php
session_start();
include "inc/header.php";?>

<?if( $_SESSION['id']){
include "inc/left.php";
}?>

    <div id="templatemo_right_column">
    <?// include "inc/slider.php";?>

 <div id="templatemo_main">

<?
if( $_SESSION['id']){
//include $_SERVER['DOCUMENT_ROOT']."/admin/views/theme/pages/{$view}.php";
include $_SERVER['DOCUMENT_ROOT']."/MvcCleanBlog/admin/views/theme/pages/{$view}.php";
}else{
	//include $_SERVER['DOCUMENT_ROOT']."/admin/views/theme/pages/nopage.php";
  include $_SERVER['DOCUMENT_ROOT']."/MvcCleanBlog/admin/views/theme/pages/nopage.php";
}

?>
		</div>

  <div class="cleaner"></div>
  </div>
    <!-- end of templatemo_main -->

  <div class="cleaner_h20"></div>
  <? include "inc/footer.php";?>


    <div class="cleaner"></div>


<?php
session_start();
?>
        <div id="templatemo_main">
			 <div id="contact_form">

				<form action="" method="post" enctype="multipart/form-data">

	 			    <label for="author">Name:</label>
                    <input type="text" value="<?=$user['name']?>" name="name"  />
                    <div class="cleaner_h10"></div>


                    <label for="email">Login:</label>
                    <input type="text" value="<?=$user['login']?>" name="login"/>
                    <div class="cleaner_h10"></div>


                    <label for="text">password:</label>
                    <input type="text" value="<?=$user['password']?>" name="password"/>
                    <div class="cleaner_h10"></div>

                     <label for="text">Email:</label>
                    <input type="text" value="<?=$user['email']?>" name="email"/>
                    <div class="cleaner_h10"></div>

     				<label for="email">Image:</label>
                    <input type="file"  name="img"/>
                    <div class="cleaner_h10"></div>


                      <input type="hidden" value="<?=$id?>" name="id" />
                    <input type="submit" class="submit_btn" value="Send" />

				</form>

        	 </div>
        </div> <!-- end of main -->

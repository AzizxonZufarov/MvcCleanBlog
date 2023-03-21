
        <div id="templatemo_main">
			 <div id="contact_form">

				<form action="" method="post" enctype="multipart/form-data">


                     <label for="author">User:</label>
                    <input type="text" name="name" value="<?=$edituser['name']?>" />
                    <div class="cleaner_h10"></div>

                     <label for="author">Login:</label>
                    <input type="text" name="login" value="<?=$edituser['login']?>" />
                    <div class="cleaner_h10"></div>

                     <label for="author">Password:</label>
                    <input type="text" name="password" value="<?=$edituser['password']?>" />
                    <div class="cleaner_h10"></div>

                     <label for="author">Email:</label>
                    <input type="email" name="email" value="<?=$edituser['email']?>" />
                    <div class="cleaner_h10"></div>


                    <br /> <label for="author">Image:</label>
                <img src="regupl/<?= $edituser['img']?>" width="100px" height="100px"/><br />
                    <br /><input type="file" name="img" value="<?=$edituser['img']?>" />
                    <div class="cleaner_h10"></div>

                	                      Admin   <input type="radio" checked="" name="admin" value="1" ><br />
                                                User
                                                  <input type="radio"  name="admin" value="0" ><br />





                    <input type="submit" class="submit_btn" value="Send" />

				</form>

        	 </div>
        </div> <!-- end of main -->

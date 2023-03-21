
        <div id="templatemo_main">
			 <div id="contact_form">

				<form action="" method="post" enctype="multipart/form-data">


                    <label for="author">Author:</label>
                    <select name="author" >
                    <?foreach($users as $item){?>?>
                         <option value="<?=$item['id']?>"><?=$item['name']?></option>
                        <? }?>
                    </select>	<br/>
 <br/>

                    <label for="author">Categories:</label>
                    <select name="categories" >
                    <?foreach($categories as $item){?>
                         <option value="<?=$item['id']?>"
                           <?php

              if ($item['title'] == $editpost['categories']){
                  echo 'selected';
              }
          ?>><?=$item['title']?>



                         </option>
                        <? }?>
                    </select>	<br/>
 <br/>


                    <label for="author">Text:</label>
                   <textarea name="text"><?=$editpost['text']?></textarea>
                   <div class="cleaner_h10"></div>


                    <label for="author">Title:</label>
                   <input type="text" value="<?=$editpost['title']?>" name="title"  />
                   <div class="cleaner_h10"></div>

                   <br /> <label for="author">Image:</label>
               <img src="<?=$editpost['img']?>" width="100px" height="100px"/><br />
                   <br /><input type="file" name="img" value="<?=$editpost['img']?>" />
                   <div class="cleaner_h10"></div>
                    <input type="submit" class="submit_btn" value="Send" />

				</form>

        	 </div>
        </div> <!-- end of main -->

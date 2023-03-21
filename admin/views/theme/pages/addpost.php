
        <div id="templatemo_main">
			 <div id="contact_form">

				<form action="" method="post" enctype="multipart/form-data">


                     <label for="author">Author:</label>
                     <select name="author" >
                     <?foreach($users as $one){?>?>
                     			<option value="<?=$one['id']?>"><?=$one['name']?></option>
                         <? }?>
                     </select>	<br/>
	<br/>
                     <label for="author">Categories:</label>
                     <select name="categories" >
                     <?foreach($categories as $item){?>?>
                     			<option value="<?=$item['id']?>"><?=$item['title']?></option>
                         <? }?>
                     </select>	<br/>
	<br/>
                     <label for="author">Text:</label>
                    <textarea name="text"></textarea>
                    <div class="cleaner_h10"></div>

                     <label for="author">Title:</label>
                    <input type="text" name="title"  />
                    <div class="cleaner_h10"></div>

                     <label for="author">Image:</label>
                    <input type="file" name="img"  />
                    <div class="cleaner_h10"></div>


                    <input type="submit" class="submit_btn" value="Send" />

				</form>

        	 </div>
        </div> <!-- end of main -->

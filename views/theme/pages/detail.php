       <div id="templatemo_main">

            <div class="post_section">

                <span class="comment"><a href="#">     <?= $total_views?>	</a></span>

                <h2><?=$detail['title']?></h2>

              <?=$detail['date']?>| <strong>Author:</strong> <?=$detail['author']?> | <strong>Category:</strong> <a href="#"><?=$detail['categories']?></a>

                <a href="" target="_parent">   <img src="<?=THEME . $detail['img']?>" width="420px" height="200px"/></a>

              <p><?=$detail['text']?></p>

		  </div>
             <div class="comment_tab">
            <?= $total_views?> Просмотров          
            </div>

            <div class="cleaner"></div>
            <div class="comment_tab">
          0 Комментариев
            </div>



      <div id="comment_section">
     <? foreach($comment as $item){?>
                 <ol class="comments first_level">

                        <li>
                            <div class="comment_box commentbox1">



                                <div class="comment_text">
                                    <div class="comment_author"><?=$item['author']?><span class="date"></span><span class="time"><?=$item['date']?></span></div>
                                    <p><?=$item['text']?></p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>

                        </li>  </ol>  <? }?>



                </div>

                <div id="comment_form">
                    <h3>Leave a comment</h3>


              		<form action="" method="post">

             		  	 <div class="form_row">
                            <label><strong>Name</strong></label>
           					<br />
                            <input type="text" name="author" />
                        </div>

                        <div class="form_row">
                            <label><strong>Email</strong></label>
          					<br />
                            <input type="text" name="email" />
                        </div>

                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="text" rows="" cols=""></textarea>
                        </div>

                        <input type="hidden" name="id" value="<?=$id?>" />
                        <input type="submit" name="Submit" value="Submit" class="submit_btn"/>


                    </form>

                </div>

		</div> <!-- end of main -->

  <div class="cleaner"></div>

    <!-- end of templatemo_main -->

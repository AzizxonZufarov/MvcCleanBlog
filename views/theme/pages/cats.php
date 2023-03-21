 <?

        foreach($cats as $post){?>
    <div class="post_section">

        <span class="comment"><a href="blog_post.html">128</a></span>

        <h2><a href="?view=detail&id=<?=$post['id']?>"><?=$post['title']?></a></h2>


    	<?=$post['addedDate']?> | <strong>Author:</strong> John | <strong>Category:</strong> <a href="#">Freebies</a>

          <img src="<?=THEME . $post['img']?>" width="430px" height="300px"/>

        <p><?=mb_substr(strip_tags($post['text']), 0, 100, 'utf-8'). '...';?></p>
      <a href="?view=detail&id=<?=$post['id']?>">Continue reading...</a>

    </div>

<? }?>

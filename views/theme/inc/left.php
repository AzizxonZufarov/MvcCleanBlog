   <div id="templatemo_left_column">

        <div id="templatemo_header">

            <div id="site_title">
                <h1><a href="<?=PATH?>" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->

        </div> <!-- end of header -->

        <div id="templatemo_sidebar">

            <div id="templatemo_rss">

                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>

            </div>

            <h4>Categories</h4>
            <ul class="templatemo_list">
          <? foreach($categories as $cat){?>
  <li><a href="?view=cats&id=<?=$cat['id']?>"><?=$cat['title']?></a></li>

            <? }?>

            </ul>

            <div class="cleaner_h40"></div>

            <h4>Friends</h4>
            <ul class="templatemo_list">
			  <?

         foreach($friend as $friend){?>
			  <li><a href="?view=friends&id=<?=$friend['id']?>"><?=$friend['name']?></a></li>

         		   <? }?>

            </ul>
             <div class="cleaner_h40"></div>
             <? if($_SESSION['id']){?>
               <ul class="templatemo_list">

                        <li><a href="?view=cab">Кабинет</a></li>
              </ul>
<?}else{?>
               <ul class="templatemo_list">

                         <li><a href="?view=reg">Регистрация</a></li>
                         <li><a href="?view=auth">Авторизация</a></li>
                   </ul>
<?}?>
        </div> <!-- end of templatemo_sidebar -->

    </div> <!-- end of templatemo_left_column -->

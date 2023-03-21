    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">

                   <? foreach($slider as $slide){?>
                    <li class="sliderImage ">
                        <a href=""><img src="<?=THEME?>images/slider/1.jpg" alt="1" /></a>
                        <span class="top"><strong><?=$slide['title']?></strong><br /><?=$slide['text']?></span>
                    </li>


     <? }?>
                </ul>
            </div>
        </div>
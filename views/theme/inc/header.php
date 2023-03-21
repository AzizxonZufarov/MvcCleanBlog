
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="<?=THEME?>templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="<?=THEME?>s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script  src="<?=THEME?>js/jquery.js"></script>
<script  src="<?=THEME?>js/s3Slider.js"></script>
<script >
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>

</head>
<body>

<div id="templatemo_wrapper">
<div id="templatemo_menu">
                
        <ul>
          <? foreach($menu as $item){?>
            <li><a href="contact.html"><?=$item['title']?></a></li>
            
            <? }?>
        </ul>	
    
    </div> <!-- end of templatemo_menu -->
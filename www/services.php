﻿<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Delphic | Services</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" /><![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/scripts.js"></script>
</head>
<body>
<div id="container">
  <!-- Begin Header Wrapper -->
  <div id="page-top">
    <div id="header-wrapper">
      <!-- Begin Header -->
      <div id="header">
        <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt="" /></a></div>
        <!-- Logo -->
        <!-- Begin Menu -->
        <div id="menu-wrapper">
          <div id="smoothmenu1" class="ddsmoothmenu">
            <ul>
              <li><a href="index.php">Домашняя</a></li>
              <li><a href="portfolio.php">Галерея</a></li>
              <li><a href="services.php" class="selected">Статьи</a></li>
              <li><a href="full-width.php">Другое</a>
                <ul>
                  <li><a href="full-width.php">Full Width Page</a></li>
                  <li><a href="buttons.php">Buttons</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Контакты</a></li>
            </ul>
          </div>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Header -->
    </div>
  </div>
  <!-- End Header Wrapper -->
  <!-- Begin Wrapper -->
  <div id="wrapper">
    <div class="tab-wrapper">
      <ul id="tab-menu">
        <li class="selected"><img src="style/images/icon-palette.png" alt="" /> Graphic Design</li>
        <li><img src="style/images/icon-art.png" alt="" /> Illustration</li>
        <li><img src="style/images/icon-laptop.png" alt="" /> Web Design</li>
        <li><img src="style/images/icon-camera.png" alt="" /> Photography</li>
      </ul>
      <div class="tab-content">
        <div class="tab show">
          <h3>Graphic Design</h3>
         
		  <?php
    /* Соединяемся, выбираем базу данных */
       $link = mysql_connect("localhost", "root", "") or die("Could not connect : " . mysql_error());
		  //print "Connected successfully";
			mysql_select_db("database") or die("Could not select database");
		/* Выполняем SQL-запрос */
			$query = "SELECT Data FROM data WHERE Count = 1";
			$result = mysql_query($query) or die("Query failed : " . mysql_error());
		/* Выводим результаты в html */
		while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { 
		 foreach ($line as $col_value) {
         print $col_value;		 
        }        
    }    
    /* Освобождаем память от результата */
    mysql_free_result($result);
    /* Закрываем соединение */
    mysql_close($link);
		  ?>		  
		 
        </div>
        <div class="tab">
          <h3>Illustration</h3>
          <p><img src="style/images/art/portfolio11-th.jpg" alt="" class="right"/> Vivamus mauris felis, egestas iaculis blandit vulputate, convallis sit amet justo. Cras id orci felis. Duis lobortis blandit mollis. Donec in dignissim dui. Praesent vitae leo tempus turpis luctus convallis. Cras consectetur commodo ornare. Aliquam semper dignissim massa nec condimentum. Nunc tincidunt gravida velit, nec elementum erat aliquam aliquam. Fusce et risus orci. Aliquam at sapien in lacus interdum mattis nec at sem. Sed elit elit, vehicula a adipiscing vitae, dignissim in quam. Aliquam erat volutpat. Proin non massa nibh, sit amet placerat nibh. Aliquam posuere aliquam enim vitae euis. Morbi vestibulum porttitor pellentesque. Vestibulum ac pellentesque dolor. </p>
          <div class="one-half">
            <div class="one-fifth"><img src="style/images/icon1.png" /></div>
            <div class="three-fourth last">
              <h4>Graphic Design</h4>
              <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
            </div>
          </div>
          <div class="one-half last">
            <div class="one-fifth"><img src="style/images/icon2.png" /></div>
            <div class="three-fourth last">
              <h4>Illustration</h4>
              <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="divider2"></div>
          <div class="one-half">
            <div class="one-fifth"><img src="style/images/icon3.png" /></div>
            <div class="three-fourth last">
              <h4>Interior Design</h4>
              <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
            </div>
          </div>
          <div class="one-half last">
            <div class="one-fifth"><img src="style/images/icon4.png" /></div>
            <div class="three-fourth last">
              <h4>3D Design</h4>
              <p>Nulla ipsum nunc, gravida tempus varius eu, eleifend non elit. Nam elementum iaculis lorem, et viverra magna tempus vitae. Phasellus pharetra luctus felis. Nullam turpis ante, fermentum vitae fermentum vitae, tempus ut libero.</p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="tab">
          <h3>Web Design</h3>
          <p><img src="style/images/art/portfolio10-th.jpg" alt="" class="left"/> Nullam pellentesque placerataliquet. Donec vulputate magna in elit blandit vitae congue lectus venenatis. Pellentesque leo augue, mattis iaculis luctus eget, ultricies ac tortor. Duis nec blandit arcu. Etiam est felis, iaculis non lobortis id, sodales eu dolor. Vivamus placerat adipiscing tincidunt. Fusce ultrices porta tortor. Maecenas id purus magna, id congue turpis. Aenean hendrerit tincidunt eleifend. Etiam eu erat vitae diam consectetur ornare. Nam sed facilisis nibh. Ut varius leo.</p>
          <p> Vestibulum at hendrerit ipsum. Fusce sit amet nibh velit, vel accumsan justo. Sed mi ligula, pellentesque varius pretium et, bibendum non metus. Vestibulum vitae libero tortor, eu ullamcorper urna. Duis aliquam risus eu orci tristique non dictum sem feugiat. Nullam leo nibh, iaculis ac commodo ut, elementum vel tellus. Nunc vehicula, mi non pharetra condimentum, magna tellus rutrum quam, sit amet ultricies enim ipsum vitae urna. Etiam ac arcu velit, in sagittis tortor. Aliquam augue tellus, accumsan ut eleifend vitae, vehicula sed nulla. Nam vel orci risus, in imperdiet turpis. Ut aliquam tortor vitae augue ultricies hendrerit. Vivamus vel gravida lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque elit tellus, eleifend ut fringilla quis, venenatis vel velit. Suspendisse quis interdum lorem. </p>
        </div>
        <div class="tab">
          <h3>Photography</h3>
          <p><img src="style/images/art/portfolio9-th.jpg" alt="" class="right"/>Vestibulum at hendrerit ipsum. Fusce sit amet nibh velit, vel accumsan justo. Sed mi ligula, pellentesque varius pretium et, bibendum non metus. Vestibulum vitae libero tortor, eu ullamcorper urna. Duis aliquam risus eu orci tristique non dictum sem feugiat. Nullam leo nibh, iaculis ac commodo ut, elementum vel tellus. Nunc vehicula, mi non pharetra condimentum, magna tellus rutrum quam, sit amet ultricies enim ipsum vitae urna. Etiam ac arcu velit, in sagittis tortor. </p>
          <p> Aliquam augue tellus, accumsan ut eleifend vitae, vehicula sed nulla. Nam vel orci risus, in imperdiet turpis. Ut aliquam tortor vitae augue ultricies hendrerit. Vivamus vel gravida lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque elit tellus, eleifend ut fringilla quis, venenatis vel velit. Suspendisse quis interdum lorem.</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- End Wrapper -->
  <div class="clearfix"></div>
  <div class="push"></div>
  <!-- Begin Footer -->
  <div id="footer-wrapper">
    <div id="footer">
      <div id="footer-content">
        <!-- Begin Copyright -->
        <div id="copyright">
          <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved | Design By <a target="_blank" href="http://elemisfreebies.com/">elemis</a></p>
        </div>
        <!-- End Copyright -->
        <!-- Begin Social Icons -->
        <div id="socials">
          <ul>
            <li><a href="#"><img src="style/images/icon-rss.png" alt="" /></a></li>
            <li><a href="#"><img src="style/images/icon-twitter.png" alt="" /></a></li>
            <li><a href="#"><img src="style/images/icon-dribble.png" alt="" /></a></li>
            <li><a href="#"><img src="style/images/icon-tumblr.png" alt="" /></a></li>
            <li><a href="#"><img src="style/images/icon-flickr.png" alt="" /></a></li>
            <li><a href="#"><img src="style/images/icon-facebook.png" alt="" /></a></li>
          </ul>
        </div>
        <!-- End Social Icons -->
      </div>
    </div>
  </div>
  <!-- End Footer -->
</div>
<script type="text/javascript">
$(document).ready(function () {
    //Get all the LI from the #tabMenu UL
    $('#tab-menu > li').click(function () {
        //remove the selected class from all LI    
        $('#tab-menu > li').removeClass('selected');
        //Reassign the LI
        $(this).addClass('selected');
        //Hide all the DIV in .tab-content
        $('.tab-content div.tab').slideUp('slow');
        //Look for the right DIV in boxBody according to the Navigation UL index, therefore, the arrangement is very important.
        $('.tab-content div.tab:eq(' + $('#tab-menu > li').index(this) + ')').slideDown('slow');
    }).mouseover(function () {
        //Add and remove class, Personally I dont think this is the right way to do it, anyone please suggest    
        $(this).addClass('mouseover');
        $(this).removeClass('mouseout');
    }).mouseout(function () {
        //Add and remove class
        $(this).addClass('mouseout');
        $(this).removeClass('mouseover');
    });
});
$(function () {
    var offset = $("#tab-menu").offset();
    var topPadding = 15;
    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            $("#tab-menu").stop().animate({
                marginTop: $(window).scrollTop() - offset.top + topPadding
            });
        } else {
            $("#tab-menu").stop().animate({
                marginTop: 0
            });
        };
    });
});
</script>
</body>
</html>
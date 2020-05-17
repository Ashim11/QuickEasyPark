<?php 
include_once("includes/header.php"); 
include_once("includes/db_connect.php"); 
global $SERVER_PATH;
?> 
<?php


#STYLE
echo '<style>';

#BODY STYLE

echo 'body{background-image: url("./images/car_new/back2.jpg");}';

#echo 'body{background:#31708f;}';
#echo 'body{background:#000;}'; // DARK
#echo 'body{background:#fff;}'; // LIGHT



#END STYLE
echo '</style>';
?>


	<div id="banner">
    	<div class="left">
        	<div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
			   <li><a href="#"><img src="./images/car_new/banner1.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/car_new/banner2.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/car_new/banner4.jpg" alt="" /></a></li>
            </ul>        
          </div>
          
        </div>
        </div>
    </div>
    <div class="clear"></div>
  <script type="text/javascript" src="./js/cont_slide.js"></script>
  <div id="content_sec">
     <div class="col1">
		<h4 class="heading colr">For our Latest Offers see our news </h4>
			<div class="news">
            <ul>
				<li>
                	<span class="newsdate" style="margin:4px 0 0 231px">Car Parking</span>
                	<h6 class="last">Pre-Book</h6>
                    <a href="#" class="thumb"><img src="images/car_new/car.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>Book your spot and pre-pay for your spot to grab the best value parking offers</p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li class="last">
                	<span class="newsdate" style="margin:4px 0 0 224px">Parking Slots</span>
                	<h6 class="last">Weekly&Monthly Parking</h6>
                    <a href="#" class="thumb"><img src="images/car_new/car2.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	 We also offers exceptional price for our customer on this subscription 
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li>
                	<span class="newsdate" style="margin:4px 0 0 202px">Parking Spot Management</span>
                	<h6 class="last">Spot</h6>
                    <a href="#" class="thumb"><img src="images/car_new/car3.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	Learn more about Parking Spot Management. 
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
				<li class="last">
                	<span class="newsdate" style="margin:4px 0 0 205px">Parking Charges</span>
                	<h6 class="last">Loyalty Parking</h6>
                    <a href="#" class="thumb"><img src="images/car_new/car4.jpg" alt="" style="height:163px; width:266px;"/></a>
                    <p>
                    	Park your cark at our site for 10 times and get discount at your parking price.
                    </p>
                    <div class="news_links">
                    	<a href="#" class="readmore left">Read More</a>
                    </div>
                </li>
			</ul>
			</div>
    </div>
	<div class="col2">
		<?php include_once("includes/sidebar.php"); ?>
		<div><img src="images/car_new/bookspot2.jpg" style="width: 250px"></div>
	</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<?php include_once("includes/footer.php"); ?> 

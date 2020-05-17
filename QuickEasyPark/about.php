<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
	}
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
 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact" style="font-size:14px;">
				<h4 class="heading colr">About QuickEasyPark</h4>
				<div style="font-size:12px;">
					<p>QuickEasyPark stands for quality in parking and is also known for quality, secure, clean, and well-managed parking facilities in Dublin. <b>QuickEasyPark is a system made by a group of finial year Student studying BSc in IT at CCT college</b>. We wanted to build the system as simple as possible for our user to use our website. We hope to provide you with a quick and easy way to park your car in city center with no struggle. We provide total parking space of 720 for our users which includes Basement parking, First Floor parking, Second Floor parking, Third Floor parking and Outer parking.
					</p>
					<p>we Operate parking location in Dublin City Center.
					Contact us if we can help in any way make your parking experience better.
					</p>
				</div>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
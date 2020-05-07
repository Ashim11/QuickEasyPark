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
				<h4 class="heading colr">About Car Parking System</h4>
				<div style="font-size:12px;">
					<p>
					A car parking system is a mechanical device that multiplies parking capacity inside a parking lot. Parking systems are generally powered by electric motors or hydraulic pumps that move vehicles into a storage position.
					</p>
					<p>
					There are two types of car parking systems: traditional and automated. In the long term, automated car parking systems are likely to be more cost effective when compared to traditional parking garages. Automatic multi-storey automated car park systems are less expensive per parking slot, since they tend to require less building volume and less ground area than a conventional facility with the same capacity. Both automated car parking systems and automated parking garage systems reduce pollution — cars are not running or circling around while drivers look for parking spaces.
					</p>
					<p>
					Automated car parking systems use a similar type of technology to that used for mechanical parcel handling and document retrieval. The driver leaves the car inside an entrance area and technology parks the vehicle at a designated area. Hydraulic or mechanical car lifters raise the vehicle to another level for proper storing. The vehicle can be transported vertically (up or down) and horizontally (left and right) to a vacant parking space until the car is needed again. When the vehicle is needed, the process is reversed and the car lifts transport the vehicle back to the same area where the driver left it. In some cases, a turntable may be used to position the car so that the driver can conveniently drive away without the need to back up.
					</p>
					<p>
					Over the years, car parking systems and the accompanying technologies have increased and diversified. Car parking systems have been around almost since the time cars were invented. In any area where there is a significant amount of traffic, there are car parking systems. Car Parking systems were developed in the early 20th century in response to the need for storage space for vehicles.
					</p>
				</div>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
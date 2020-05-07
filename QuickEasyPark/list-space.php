<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `space`";
	$rs=mysql_query($SQL) or die(mysql_error());
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
<style>
.parking_space {
float:left; 
padding-top:60px;
width:280px; 
font-size:20px;
color:#101746;
font-weight:bold;
padding-left:10px;
}
</style>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">All Parking Space (Click on Parking to see all parking slots)</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			if(mysql_num_rows($rs)) {
			?>
			<form name="frm_parking" action="lib/parking.php" method="post">
				<div class="static">
					<?php 
					$sr_no=1;
					while($data = mysql_fetch_assoc($rs))
					{
					?>
						<div style="float:left; border:1px solid; margin:5px;">
							<div style="float:left">
							<a href="list-slots.php?space_id=<?=$data[space_id]?>"><img src="images/p.png" style="height:150px;"></a></div>
							<div class="parking_space"><?=$data['space_title']?></div>
						</div>
					<?php 
					} 
					?>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="parking_id" />
			</form>
			<?php } else {?>
				<div class="msg">Youy Parking Added Yet.</div>
			<?php } ?>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

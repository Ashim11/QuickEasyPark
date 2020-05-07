<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `space` WHERE space_id = $_REQUEST[space_id]";
	$rs=mysql_query($SQL) or die(mysql_error());
	$data = mysql_fetch_assoc($rs);
?>

<?php
#STYLE
echo '<style>';

#BODY STYLE

echo 'body{background-image: url("./images/car_new/back2.jpg");}';


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
			<h4 class="heading colr">All Parking Slots of <?=$data['space_title']?> (Click on slots to assign it to car)</h4>
			<div style="border:1px solid; float: left; padding:10px; margin:10px;">
				<div style="float:left; margin-right:10px"><img src="images/free.png" style="height:30px; float:left"> <div style="float:left; font-weight:bold; font-size:14px; margin-top:8px; margin-left:10px">: Available</div></div>
				<div style="float:left; margin-right:10px"><img src="images/full.png" style="height:30px; float:left"> <div style="float:left; font-weight:bold; font-size:14px; margin-top:8px; margin-left:10px">: Occupied</div></div>
			</div>
			<div class="col1">
				<div class="contact">
					<h4 class="heading colr">Search for Car</h4>
					<form action="parking.php" enctype="multipart/form-data" method="post" name="frm_parking">
						<ul class="forms">
							<li class="txt">Enter Car No</li>
							<li class="inputfield"><input name="parking_car_no" type="text" class="bar" required value="<?=$data[parking_car_no]?>"/></li>
							<li class="textfield"><input type="submit" value="Search Car" class="simplebtn"></li>

						</ul>
					</form>
				</div>
			</div>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg" style="clear:both"><?=$_REQUEST['msg']?></div>
			<?php
			}
			if(mysql_num_rows($rs)) {
			?>
			<div style="clear:both; "></div>
			<h4 class="heading colr">Click on available slots to assign it to car</h4>
			<form name="frm_parking" action="lib/parking.php" method="post">
				<div class="static">
					<div style="float:left; border:1px solid; margin:5px;">
						<?php for($i=1;$i<=$data['space_total_parkings'];$i++) { ?>
							<div style="float:left; border:1px solid; margin:4px;">
							<?php 
							$SQL = "SELECT * from parking WHERE parking_space_id = ".$data['space_id']." AND parking_slot_number = $i AND parking_status = 1";
							$rs = mysql_query($SQL);
							if(mysql_num_rows($rs) ) { 
							?>
								<div style="float:left; padding:2px;"> <img src="images/full.png" style="height:60px;"> </div>
								<div style="text-align:center; font-weight:bold; font-size:13px;">Slot - <?=$i?></div>
							<?php } else { ?>
								<div style="float:left; padding:2px;"> 
									<a href="parking.php?space_id=<?=$data['space_id']?>&slot_no=<?=$i?>">
										<img src="images/free.png" style="height:60px;"> 
									</a>
								</div>
								<div style="text-align:center; font-weight:bold; font-size:13px;">Slot - <?=$i?></div>
							<?php } ?>
							</div>
						<?php }?>
					</div>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="parking_id" />
			</form>
			<?php } else {?>
				<div class="msg">You Parking Added Yet.</div>
			<?php } ?>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

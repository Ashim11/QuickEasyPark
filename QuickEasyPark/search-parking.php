<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[parking_id])
	{
		$SQL="SELECT * FROM `parking` WHERE parking_id = $_REQUEST[parking_id]";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
	}
	if($_REQUEST['space_id'])
	{
		$data['parking_space_id'] = $_REQUEST['space_id'];
		$data['parking_slot_number'] = $_REQUEST['slot_no'];
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
			<div class="contact">
				<h4 class="heading colr">Search for Car</h4>
				<?php if($_REQUEST['msg']) { ?>
					<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php } ?>
				<form action="parking.php" enctype="multipart/form-data" method="post" name="frm_parking">
					<ul class="forms">
						<li class="txt">Car No</li>
						<li class="inputfield"><input name="parking_car_no" type="text" class="bar" required value="<?=$data[parking_car_no]?>"/></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_parking">
					<input type="hidden" name="parking_id" value="<?=$data[parking_id]?>">
				</form>
			</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

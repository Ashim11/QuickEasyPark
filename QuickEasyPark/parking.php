<?php 
	include_once("includes/header.php"); 
	$status = 1;
	if($_REQUEST[parking_id])
	{
		$SQL="SELECT * FROM `parking` WHERE parking_id = $_REQUEST[parking_id]";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
		$heading = "Add Car Parking";
	}
	if($_REQUEST['space_id'])
	{
		$data['parking_space_id'] = $_REQUEST['space_id'];
		$data['parking_slot_number'] = $_REQUEST['slot_no'];
	}
	if($_REQUEST['parking_car_no'])
	{
		$SQL="SELECT * FROM `parking` WHERE parking_car_no = $_REQUEST[parking_car_no] AND parking_status = 1";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
		$heading = "Release Parking for ".$_REQUEST['parking_car_no'];
		$status = 0;
		if(!mysql_num_rows($rs))
		{
			header("location:search-parking.php?msg=No Car Found !!!");
			exit;
		}
	}
?>

<?php
#STYLE
echo '<style>';

#BODY STYLE

echo 'body{background-image: url("./images/car_new/back2.jpg");}';


#END STYLE
echo '</style>';
?>


<script>

jQuery(function() {
	jQuery( "#parking_entry_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
	jQuery( "#parking_exit_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$heading?></h4>
				<?php if($_REQUEST['msg']) { ?>
					<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php } ?>
				<form action="lib/parking.php" enctype="multipart/form-data" method="post" name="frm_parking">
					<ul class="forms">
						<li class="txt">Select Space</li>
						<li class="inputfield">
							<select name="parking_space_id" class="bar" required/>
								<?php echo get_new_optionlist("space","space_id","space_title",$data[parking_space_id]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Slot No</li>
						<li class="inputfield"><input name="parking_slot_number" type="text" class="bar" required value="<?=$data[parking_slot_number]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Car No</li>
						<li class="inputfield"><input name="parking_car_no" type="text" class="bar" required value="<?=$data[parking_car_no]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Entry Date</li>
						<li class="inputfield"><input name="parking_entry_date" id="parking_entry_date" type="text" class="bar" required value="<?=$data[parking_entry_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Entry Time</li>
						<li class="inputfield"><input name="parking_intime" type="text" class="bar" required value="<?=$data[parking_intime]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Exit Date</li>
						<li class="inputfield"><input name="parking_exit_date" id="parking_exit_date" type="text" class="bar" value="<?=$data[parking_exit_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Exit Time</li>
						<li class="inputfield"><input name="parking_outtime" type="text" class="bar" value="<?=$data[parking_outtime]?>"/></li>
					</ul>
					
					<!--
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="parking_email" type="text" class="bar" value="<?//=$data[parking_email]?>"/></li>
					</ul>	
					-->
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="parking_email" type="text" class="bar" value="<?php $parking_email?>"/></li>
					</ul>
					
					
					<ul class="forms">
						<li class="txt">Phone Number</li>
						<li class="inputfield"><input name="parking_phonenumber" type="text" class="bar" value="<?=$data[parking_phonenumber]?>"/></li>
					</ul>
					
					
					
					<ul class="forms">
						<li class="txt">Parking Charges</li>
						<li class="inputfield"><input name="parking_charges" type="text" class="bar" value="<?=$data[parking_charges]?>"/></li>
					</ul>
					
					<?php
					if(!$_REQUEST['space_id'] && !$_REQUEST['slot_no'])
					{
					?>
					<ul class="forms">
						<li class="txt">Exit Date</li>
						<li class="inputfield"><input name="parking_exit_date" id="parking_exit_date" type="text" class="bar" value="<?=$data[parking_exit_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Exit Time</li>
						<li class="inputfield"><input name="parking_outtime" type="text" class="bar" value="<?=$data[parking_outtime]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Parking Charges</li>
						<li class="inputfield"><input name="parking_charges" type="text" class="bar" value="<?=$data[parking_charges]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="parking_description" cols="" rows="6"><?=$data[parking_description]?></textarea></li>
					</ul>
					<?php
					}
					?>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_parking">
					<input type="hidden" name="parking_status" value="<?=$status?>">
					<input type="hidden" name="parking_id" value="<?=$data[parking_id]?>">
				</form>
			</div>
		</div>
	</div>
	
	


<?php include_once("includes/footer.php"); ?> 


<!-- SMS API-->
	<?php
	
	if (isset($_POST["Submit"])){
		
		
		
	
	
	// Authorisation details.
	$username = "ashimgurung433@gmail.com";
	$hash = "c64f1b033b09972a430b02df475e1b5399b78c28f570a422a3f7afa8499405c9";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "QuickEasyPark"; // This is who the message appears to be from.
	$numbers = $_POST["parking_phonenumber"] ; // A single number or a comma-seperated list of numbers
	$message = $_POST["parking_entry_date"].$_POST["parking_intime"].$_POST["parking_exit_date"].$_POST["parking_outtime"].$_POST["parking_charges"] ;  
	
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	if(!$result){
		?>
		<script>alert('')</script>
	<?php	
	}
	else{
		#print the result 
		echo $result;
		?>
		<script>alert('successfully booked')</script>
		<?php
	}
	
	}
	
	
?>

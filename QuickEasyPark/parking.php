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

<!-- jquery calender date picker-->
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


<!--
<script 
  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" 
  type="text/javascript" charset="utf-8"></script>

<script>

$(document).ready(function(){
  $(".selection).click(function(){  
var myID = $(this).attr('id');
alert("you clicked the selection: " + myID);
var datasend = "myID="+ myID;

        $.ajax({

            type:'POST',
            url:'post.php',
            data:datasend,
                        crossDomain: true,
            cache:false,
            success:function(msg){
            alert(msg); 

                $('#message').fadeIn('slow').prepend(msg);

            }


        });

</script>




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
		
		$(document).ready(function(mailTo){
			
			$('#Submit').click(function(){
					/*alert('successfully booked')*/
					var parking_slot_number = $('#parking_slot_number').val();
					var parking_car_no = $('#parking_car_no').val();
					var parking_entry_date = $('#parking_entry_date').val();
					var parking_intime = $('#parking_intime').val();
					var parking_exit_date = $('#parking_exit_date').val();
					var parking_outtime = $('#parking_outtime').val();
					var parking_charges = $('#parking_charges').val();
					var parking_email = $('#parking_email').val();
					
					/* format in which php can read this data*/
					var data = 'parking_slot_number='+ parking_slot_number + 'parking_car_no=' + parking_car_no +
					'parking_entry_date='+ parking_entry_date  + 'parking_intime=' + parking_intime + 'parking_exit_date='+ parking_exit_date  
						+'parking_outtime='+ parking_outtime   +'parking_charges=' + parking_charges + 'parking_email=' + parking_email;
						
					console.log(data); //check if it works properly
					
					/*ajax function that passes info to php page*/
					$.ajax({ 
						type: 'POST',
						url: 'mail.php'
						data: varData,
						success: function(){
							alert("successfully booked");
						}
						
						
					});
				
				
			});
			
		});

</script>    

-->


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
						<li class="inputfield"><input name="parking_slot_number" id="parking_slot_number" type="text" class="bar" required value="<?=$data[parking_slot_number]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Car No</li>
						<li class="inputfield"><input name="parking_car_no" id="parking_car_no" type="text" class="bar" required value="<?=$data[parking_car_no]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Entry Date</li>
						<li class="inputfield"><input name="parking_entry_date" id="parking_entry_date" type="text" class="bar" required value="<?=$data[parking_entry_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Entry Time</li>
						<li class="inputfield"><input name="parking_intime" id="parking_intime" type="text" class="bar" required value="<?=$data[parking_intime]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Exit Date</li>
						<li class="inputfield"><input name="parking_exit_date" id="parking_exit_date" type="text" class="bar" value="<?=$data[parking_exit_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Exit Time</li>
						<li class="inputfield"><input name="parking_outtime" id="parking_outtime" type="text" class="bar" value="<?=$data[parking_outtime]?>"/></li>
					</ul>
					
					<!--
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="parking_email" type="text" class="bar" value="<?//=$data[parking_email]?>"/></li>
					</ul>	
					-->
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="parking_email" id="parking_email" type="text" class="bar" value="<?php $parking_email?>"/></li>
					</ul>
					
					
					<ul class="forms">
						<li class="txt">Phone Number</li>
						<li class="inputfield"><input name="parking_phonenumber" id="parking_email" type="text" class="bar" value="<?=$data[parking_phonenumber]?>"/></li>
					</ul>
					
					
					
					<ul class="forms">
						<li class="txt">Parking Charges</li>
						<li class="inputfield"><input name="parking_charges" id="parking_charges" type="text" class="bar" value="<?=$data[parking_charges]?>"/></li>
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
						<li class="textfield"><input type="submit" id="Submit" value="Submit" class="simplebtn"></li>
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





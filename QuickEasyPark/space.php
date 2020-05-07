<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[space_id])
	{
		$SQL="SELECT * FROM `space` WHERE space_id = $_REQUEST[space_id]";
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


<script>

jQuery(function() {
	jQuery( "#space_from_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
	jQuery( "#space_to_date" ).datepicker({
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
				<h4 class="heading colr">Add Parking Space</h4>
				<?php if($_REQUEST['msg']) { ?>
					<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php } ?>
				<form action="lib/space.php" enctype="multipart/form-data" method="post" name="frm_space">
					<ul class="forms">
						<li class="txt">Title</li>
						<li class="inputfield"><input name="space_title" type="text" class="bar" required value="<?=$data[space_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Parkings Space</li>
						<li class="inputfield"><input name="space_total_parkings" type="text" class="bar" required value="<?=$data[space_total_parkings]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Description</li>
						<li class="textfield"><textarea name="space_description" cols="" rows="6" required><?=$data[space_description]?></textarea></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_space">
					<input type="hidden" name="space_id" value="<?=$data[space_id]?>">
				</form>
			</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

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



<script>
function delete_space(space_id)
{
	if(confirm("Do you want to delete the parking space?"))
	{
		this.document.frm_space.space_id.value=space_id;
		this.document.frm_space.act.value="delete_space";
		this.document.frm_space.submit();
	}
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Parking Space Reports</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			if(mysql_num_rows($rs)) {
			?>
			<form name="frm_space" action="lib/space.php" method="post">
				<div class="static">
					<table style="width:100%">
					  <tbody>
					  <tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Name</td>
						<td scope="col">Capacity</td>
						<td scope="col">Action</td>
					  </tr>
					<?php 
					$sr_no=1;
					while($data = mysql_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[space_id]?></td>
						<td><?=$data[space_title]?></td>
						<td><?=$data[space_total_parkings]?> Parking Slots</td>
						<td style="text-align:center">
						<a href="space.php?space_id=<?php echo $data[space_id] ?>">Edit</a> | 	
						<a href="Javascript:delete_space(<?=$data[space_id]?>)">Delete</a></td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="space_id" />
			</form>
			<?php } else {?>
				<div class="msg">You Space Added Yet.</div>
			<?php } ?>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

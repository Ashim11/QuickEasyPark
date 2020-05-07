<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_parking")
	{
		save_parking();
		exit;
	}
	if($_REQUEST[act]=="delete_parking")
	{
		delete_parking();
		exit;
	}
	if($_REQUEST[act]=="update_parking_status")
	{
		update_parking_status();
		exit;
	}
	
	###Code for save parking#####
	function save_parking()
	{
		$R=$_REQUEST;							
		if($R[parking_id])
		{
			$statement = "UPDATE `parking` SET";
			$cond = "WHERE `parking_id` = '$R[parking_id]'";
			$msg = "Parking dealloted Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `parking` SET";
			$cond = "";
			$msg="Parking Alloted Successfully.";
		}
		$SQL=   $statement." 
			`parking_space_id` = '$R[parking_space_id]', 
			`parking_slot_number` = '$R[parking_slot_number]', 
			`parking_car_no` = '$R[parking_car_no]', 
			`parking_intime` = '$R[parking_intime]', 
			`parking_outtime` = '$R[parking_outtime]', 
			`parking_entry_date` = '$R[parking_entry_date]', 
			`parking_status` = '$R[parking_status]', 
			`parking_exit_date` = '$R[parking_exit_date]', 
			
			`parking_email` = '$R[parking_email]',
			`parking_phonenumber` = '$R[parking_phonenumber]',
			
			`parking_charges` = '$R[parking_charges]', 
			`parking_description` = '$R[parking_description]'". 
			 $cond;
		$rs = mysql_query($SQL) or die(mysql_error());
		header("Location:../list-slots.php?msg=$msg&space_id=$R[parking_space_id]");
	}
#########Function for delete parking##########3
function delete_parking()
{
	/////////Delete the record//////////
	$SQL="DELETE FROM parking WHERE parking_id = $_REQUEST[parking_id]";
	mysql_query($SQL) or die(mysql_error());
	header("Location:../parking-report.php?msg=Deleted Successfully.");
}
?>

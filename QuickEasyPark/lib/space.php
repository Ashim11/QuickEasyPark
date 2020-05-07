<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_space")
	{
		save_space();
		exit;
	}
	if($_REQUEST[act]=="delete_space")
	{
		delete_space();
		exit;
	}
	if($_REQUEST[act]=="update_space_status")
	{
		update_space_status();
		exit;
	}
	
	###Code for save space#####
	function save_space()
	{
		$R=$_REQUEST;							
		if($R[space_id])
		{
			$statement = "UPDATE `space` SET";
			$cond = "WHERE `space_id` = '$R[space_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `space` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`space_title` = '$R[space_title]', 
				`space_total_parkings` = '$R[space_total_parkings]', 
				`space_description` = '$R[space_description]'". 
				 $cond;
		$rs = mysql_query($SQL) or die(mysql_error());
		header("Location:../space-report.php?msg=$msg");
	}
#########Function for delete space##########3
function delete_space()
{
	/////////Delete the record//////////
	$SQL="DELETE FROM space WHERE space_id = $_REQUEST[space_id]";
	mysql_query($SQL) or die(mysql_error());
	header("Location:../space-report.php?msg=Deleted Successfully.");
}
?>

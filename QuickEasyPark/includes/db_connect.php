<?php
	error_reporting(E_ERROR);
	$db=mysql_connect("localhost","root","") or die(mysql_error());
	$db_sel=mysql_select_db("car_parking_system") or die(mysql_error());
?>

<?php 

$parking_slot_number = $_POST['parking_slot_number'];
$parking_car_no = $_POST['parking_car_no'];
$parking_entry_date = $_POST['parking_entry_date'];
$parking_intime = $_POST['parking_intime'];
$parking_exit_date = $_POST['parking_exit_date'];
$parking_outtime = $_POST['parking_outtime'];
$parking_charges = $_POST['parking_charges'];

$parking_email = $_POST['parking_email'];

mail( $parking_email, $parking_slot_number, $parking_car_no, $parking_entry_date,
parking_intime ,parking_exit_date,parking_outtime, parking_charges,
 'your spot booked successfully');

?>
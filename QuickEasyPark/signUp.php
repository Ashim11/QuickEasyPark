<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		//edit this section for sign up
		
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
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


		<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr">User Registration</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<div class="msg" style="display:none" id="error-msg">Enter valid EmailID !!!</div>
				<form action="lib/user.php" enctype="multipart/form-data" method="post" name="frm_user" onsubmit="return validateForm(this)">
					<ul class="forms">
						<li class="txt">Name</li>
						<li class="inputfield"><input name="user_name" type="text" class="bar" required value="<?=$data[user_name]?>"/></li>
					</ul>
					<ul class="forms" id="user_level">
						<li class="txt">User Role</li>
						<li class="inputfield">
							<select name="user_level_id" id="user_level_id" class="bar" required/>
								<?php echo get_new_optionlist("role","role_id","role_name",$data[user_level_id]); ?>
							</select>
						</li>
					</ul>
					<?php if(!(isset($_REQUEST['user_id'])) || $_REQUEST['user_id'] == "")  { ?>
					<ul class="forms">
						<li class="txt">Username</li>
						<li class="inputfield"><input name="user_username" type="text" class="bar" required value="<?=$data[user_username]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Password</li>
						<li class="inputfield"><input name="user_password" id="user_password" type="password" class="bar" required value="<?=$data[user_password]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Confirm Password</li>
						<li class="inputfield"><input name="user_confirm_password" id="user_confirm_password" type="password" class="bar" required value="<?=$data[user_password]?>"/></li>
					</ul>
					<?php } ?>
					<ul class="forms">
						<li class="txt">Mobile</li>
						<li class="inputfield"><input name="user_mobile" type="text" class="bar" required value="<?=$data[user_mobile]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="user_email" id="user_email" type="text" class="bar" required value="<?=$data[user_email]?>" onchange="validateEmail(this)" /></li>
					</ul>
					<ul class="forms">
						<li class="txt">Date of Birth</li>
						<li class="inputfield"><input name="user_dob" id="user_dob" type="text" class="bar" required value="<?=$data[user_dob]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Address Line 1</li>
						<li class="inputfield"><input name="user_add1" type="text" class="bar" required value="<?=$data[user_add1]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Address Line 2</li>
						<li class="inputfield"><input name="user_add2" type="text" class="bar" required value="<?=$data[user_add2]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">City/Town</li>
						<li class="inputfield">
							<select name="user_city" class="bar" required/>
								<?php echo get_new_optionlist("city","city_id","city_name",$data[user_city]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">County</li>
						<li class="inputfield">
							<select name="user_state" class="bar" required/>
								<?php echo get_new_optionlist("state","state_id","state_name",$data[user_state]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Country</li>
						<li class="inputfield">
							<select name="user_country" class="bar" required/>
								<?php echo get_new_optionlist("country","country_id","country_name",$data[user_country]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Photo</li>
						<li class="inputfield"><input name="user_image" type="file" class="bar"/></li>
					</ul>
					<div class="clear"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_user">
					<input type="hidden" name="avail_image" value="<?=$data[user_image]?>">
					<input type="hidden" name="user_id" value="<?=$data[user_id]?>">
				</form>
			</div>
		</div>
		
		<div class="col2">
			<?php if($_REQUEST[user_id]) { ?>
			<div class="contactfinder">
				<h4 class="heading colr">Profile of <?=$data['user_name']?></h4>
				<div><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="width: 250px"></div><br>
			</div> 
			<?php } ?>
		</div>
	</div>
	
	
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
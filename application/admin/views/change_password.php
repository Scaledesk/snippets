<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	
</head>
<body>

<div id="container">
	<h1><?php echo $title; ?></h1>

	<?php echo form_open('admin_manage/admin_update_password'); ?>

	<h5>Current Password</h5>
	<input type="password" name="current_password" value="" size="50" />

	<h5>New Password</h5>
	<input type="password" name="new_password" value="" size="50" />

	<h5>Confirm Password</h5>
	<input type="password" name="confirm_password" value="" size="50" />

	<div><input type="submit" value="Submit" /></div>

	</form>

	
</div>

</body>
</html>
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

	<?php echo form_open('User/do_ch_pwd') ?>

	<h5>Email</h5>
	<input type="Email" name="email" value="" size="50" />

	<h5>Old Password</h5>
	<input type="password" name="cur_pwd" value="" size="50" />

	<h5>New Password</h5>
	<input type="password" name="new_pwd" value="" size="50" />

	<div><input type="submit" value="Submit" /></div>

	</form>

	
</div>

</body>
</html>
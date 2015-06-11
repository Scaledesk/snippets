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

	<?php echo form_open('User/do_register') ?>

	<h5>First Name</h5>
	<input type="text" name="fname" value="" size="50" />

	<h5>Last Name</h5>
	<input type="text" name="lname" value="" size="50" />

	<h5>Email</h5>
	<input type="Email" name="email" value="" size="50" />

	<h5>Password</h5>
	<input type="password" name="pwd" value="" size="50" />

	<h5>Retype Password</h5>
	<input type="password" name="repwd" value="" size="50" />

	<div><input type="submit" value="Submit" /></div>

	</form>

	
</div>

</body>
</html>
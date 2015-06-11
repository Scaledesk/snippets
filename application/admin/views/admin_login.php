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

	<?php echo form_open('admin_manage/admin_checklogin'); ?>

	<h5>Username</h5>
	<input type="text" name="username" value="" size="50" />

	<h5>Password</h5>
	<input type="password" name="password" value="" size="50" />

	<div><input type="submit" value="Submit" /></div>

	</form>

	
</div>

</body>
</html>
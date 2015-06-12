<head>
		<script type="text/javascript">
    	function delete_id(id){
        	if (confirm("Do you want to delete this User?"))
          		window.location.href = '<?php echo base_url();?>admin_opr/del/'+id;
        	else
          		return false;
        	} 
	</script>
</head>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$check=$this->session->userdata('admin_email');
if(!isset($check)){
redirect('admin_manage/admin_login','refresh');
}
echo 'admin dashboard';
echo '<html>';
echo "<a href='".base_url()."/admin_manage/session_destroy'>Logout</a>";
echo '<br/>';
echo "<a href='".base_url()."/admin_manage/admin_change_password'>Change Password</a>";
//var_dump($users);
 ?>
<table>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Admin<br/>Opr</th>
<?php foreach ($users as $user) {
?><tr>
<td><?php echo $user->id;?></td>
<td><?php echo $user->fname;?></td>
<td><?php echo $user->lname;?></td>
<td><?php echo $user->email;?></td>
<td><a href='<?php echo base_url();?>admin_opr/ac_de_user/<?php echo $user->id;?>/<?php echo $user->status;?>'><?php echo $user->status;?></a></td>
<td><a href="javascript:delete_id(<?php echo $user->id; ?>,<?php echo $user->id; ?>)">Delete User</a></td>
<td><a href="#">Update User</a></td>
</tr>
<?php }?>
</table>
<?php $msg=$this->session->flashdata('f');
	if (isset($msg)){?>
	<div class="<?php echo $msg['class'];?>">
	<?php echo $msg['msg'];?></div>
	<?php } ?>

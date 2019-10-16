<?php if($this->session->userdata('logged_in')): ?>

<?php echo "<h2>Log Out</h2>" ?>

<?php echo form_open('users/logout'); ?>

<p>
<?php if($this->session->userdata('username')): ?>

<?php echo "You are Logged in as " . $this->session->userdata('username'); ?>

<?php endif; ?>
</p>

<?php 
$data = array(
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Logout'
);

?>
<?php  echo form_submit($data); ?>

<?php echo  form_close(); ?>

<?php else: ?>

<p class="bg-danger">
<?php 
if($this->session->flashdata('user_registered'))
{
	echo $this->session->flashdata('user_registered');
}  
?>
</p>

<h2>Login Form</h2>

<?php $attributes = array('id'=>'login_form' , 'class' => 'form-horizontal'); ?>

<?php  if($this->session->flashdata('errors')):?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('Users/login', $attributes); ?>

<div class="form-group">
	<?php echo form_label('Username'); ?>
	<?php 
	$data =  array(
		'class' => 'form-control',
		 'name' => 'username',
		 'placeholder' => 'Enter your user name'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Password'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'password',
		 'placeholder' => 'Enter your password'
	);

	?>
	<?php echo form_password($data); ?>
	
</div>
<div class="form-group">
	<?php echo form_label('Confirm Password'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'confirmpassword',
		 'placeholder' => 'Confirm your password'
	);

	?>
	<?php echo form_password($data); ?>
	
</div>
<div class="form-group">
	<?php 
	$data =  array(
		 'class' => 'btn btn-primary',
		 'name' => 'submit',
		 'value' => 'Login'
	);

	?>
	<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
<?php endif; ?>
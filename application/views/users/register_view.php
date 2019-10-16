<h2>Registration Form</h2>

<?php $attributes = array('id'=>'register_form' , 'class' => 'form-horizontal'); ?>

 <?php echo validation_errors(); ?>
<p>

</p>
<?php echo form_open('Users/register', $attributes); ?>

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
	<?php echo form_label('First Name'); ?>
	<?php 
	$data =  array(
		'class' => 'form-control',
		 'name' => 'first_name',
		 'placeholder' => 'Enter your user first name'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Last Name'); ?>
	<?php 
	$data =  array(
		'class' => 'form-control',
		 'name' => 'last_name',
		 'placeholder' => 'Enter your last name'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Email'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'email',
		 'placeholder' => 'Enter your email'
	);

	?>
	<?php echo form_input($data); ?>

</div>
 
<div class="form-group">
	<?php 
	$data =  array(
		 'class' => 'btn btn-primary',
		 'name' => 'register',
		 'value' => 'Register'
	);

	?>
	<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
 
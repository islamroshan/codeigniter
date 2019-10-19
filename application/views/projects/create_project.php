<?php if($this->session->userdata('logged_in')): ?>
 
<h2>Create Project</h2>

<?php $attributes = array('id'=>'create_project' , 'class' => 'form-horizontal'); ?>

 <?php echo validation_errors("<p class='bg-danger'>") ?>
  

<?php echo form_open('projects/create', $attributes); ?>

<div class="form-group">
	<?php echo form_label('Project Name'); ?>
	<?php 
	$data =  array(
		'class' => 'form-control',
		 'name' => 'project_name',
		 'placeholder' => 'Enter project name'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Description'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'project_body'
		 
	);

	?>
	<?php echo form_textarea($data); ?>
	
</div>
 
<div class="form-group">
	<?php 
	$data =  array(
		 'class' => 'btn btn-primary',
		 'name' => 'submit',
		 'value' => 'Create'
	);

	?>
	<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
<?php endif; ?>
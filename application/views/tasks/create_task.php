<?php if($this->session->userdata('logged_in')): ?>
 
<h2>Create Task</h2>

<?php $attributes = array('id'=>'create_task' , 'class' => 'form-horizontal'); ?>

 <?php echo validation_errors("<p class='bg-danger'>") ?>
  

<?php echo form_open('tasks/create/'. $this->uri->segment(3).'', $attributes); ?>

<div class="form-group">
	<?php echo form_label('Task Name'); ?>
	<?php 
	$data =  array(
		'class' => 'form-control',
		 'name' => 'task_name',
		 'placeholder' => 'Enter task name'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Due Date'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'due_date',
		 'type' => 'date'
	);

	?>
	<?php echo form_input($data); ?>

</div>
<div class="form-group">
	<?php echo form_label('Description'); ?>
	<?php 
	$data =  array(
		 'class' => 'form-control',
		 'name' => 'task_body'
		 
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
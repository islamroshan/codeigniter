<p class="bg-success"> 
<?php if($this->session->flashdata('login_success')): ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_registered')): ?>
<?php echo $this->session->flashdata('user_registered'); ?>
<?php endif; ?>
</p>

<p class="bg-danger"> 
<?php if($this->session->flashdata('login_failed')): ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>
 
<?php if($this->session->flashdata('no_access')): ?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif; ?>
</p>
<?php if(isset($projects)): ?>
 

 <ul class="list-group">
 	<li class="list-group-item active">Your Projects</li>
 	<?php foreach($projects as $project): ?>
  	<li class="list-group-item"><?php echo $project->project_name; ?> <a href='<?php echo base_url();?>projects/display/<?php echo $project->id ?>'>View</a></li>

  <?php endforeach; ?>
</ul>
    

<?php endif; ?>
<?php if(isset($tasks)): ?>
 
 <ul class="list-group mt-2">
 	<li class="list-group-item active">Your Tasks</li>
 	<?php foreach($tasks as $task): ?>
  	<li class="list-group-item"><?php echo $task->task_name; ?> <a href='<?php echo base_url();?>tasks/display/<?php echo $task->id ?>'>View</a></li>

  <?php endforeach; ?>
</ul>
<?php else: ?>
<div class="jumbotron">
	<h2 class="text-center">Welcome to Codeigniter login to continue </h2>
</div>
<?php endif; ?>

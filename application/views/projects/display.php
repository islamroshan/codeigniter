  
<p class="bg-success"> <?php echo $this->session->flashdata('mark_done'); ?></p>
<p class="bg-danger"> <?php echo $this->session->flashdata('mark_not_done'); ?></p>
<div class="row">
	<div class="col-md-9">

	<ul class="list-group mt-2">
	 	<li class="list-group-item active"><b>Project Name :</b> <?php echo $project_data->project_name; ?></li>
	  	<li class="list-group-item"><b>Date Created :</b> <?php echo $project_data->date_created; ?></li>
	  	<li class="list-group-item"><b>Description</b> :<br> <p><?php echo $project_data->project_body; ?></p></li>
	</ul>

	<ul class="list-group mt-2">
		 	<li class="list-group-item list-group-item-warning"><b>Active Tasks</b></li>
		 	<?php if($completed_tasks): ?>
		 		<?php foreach($completed_tasks as $task):?>
		  	<li class="list-group-item">
				<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id ?>"> <?php echo $task->task_name; ?></a>
			</li>
			<?php endforeach; ?>
			<?php else: ?>
			<li class="list-group-item"><p>You hava no tasks pending</p></li>
	</ul>
   <?php endif; ?>

	<ul class="list-group mt-2">
		 	<li class="list-group-item  list-group-item-success "><b>Completed Tasks</b></li>
		 	<?php if($not_completed_tasks): ?>
		 		<?php foreach($not_completed_tasks as $task):?>
		  	<li class="list-group-item">
				<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id ?>"> <?php echo $task->task_name; ?></a>
			</li>
			<?php endforeach; ?>
			<?php else: ?>
			<li class="list-group-item"><p>You hava no tasks pending</p></li>
	</ul>

	<?php endif; ?>
	</div>
	<div class="col-md-3 pull-right">
		<ul class="list-group">
			<h4>Projects Action</h4>
			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo  $project_data->id ?>">Create Tasks</a></li>
	<li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo  $project_data->id ?>">Edit Project</a></li>
			<li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo  $project_data->id ?>">Delete Project</a></li>
		</ul>
	</div>

</div>

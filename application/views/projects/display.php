  
<p class="bg-success"> <?php echo $this->session->flashdata('mark_done'); ?></p>
<p class="bg-danger"> <?php echo $this->session->flashdata('mark_not_done'); ?></p>
<div class="row">
	<div class="col-md-9">
		<h1>Project Name : <?php echo $project_data->project_name; ?></h1>
		<p>Date Created : <?php echo $project_data->date_created; ?></p>
		<h1>Description :</h1>
		<p><?php echo $project_data->project_body; ?></p>

		<h3>Active Tasks</h3>
		<?php if($completed_tasks): ?>
		<ul>
			<?php foreach($completed_tasks as $task):?>
				<li>
					<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id ?>"> <?php echo $task->task_name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p>You hava no tasks pending</p>
		<?php endif; ?>

		<h3>Completed Tasks</h3>
		<?php if($not_completed_tasks): ?>
		<ul>
			<?php foreach($not_completed_tasks as $task):?>
				<li>
					<a href=" <?php echo base_url();?>tasks/display/<?php echo $task->task_id ?>"> <?php echo $task->task_name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p>You hava no tasks pending</p>
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

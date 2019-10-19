<h1>Your Project Tasks</h1>
 
<p class="bg-success"> <?php echo $this->session->flashdata('task_edited'); ?></p>
 
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Task Name</th>
			<th>Task Description</th>
			<th>Date</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>	
		<?php foreach($tasks as $task): ?>
			<tr>
				<td>
					<div class="task-name">
						<?php echo $task->task_name; ?>
					</div>
					<div class="task-actions">
						 <a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id;?>">Edit</a> / <a href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id ;?>/<?php echo $task->id ;?>">Delete</a>
					</div>
				</td>
				<td><?php echo $task->task_body; ?></td>
				<td><?php echo $task->date_created; ?></td>
				<td><a href="<?php echo base_url();?>tasks/mark_comlete/<?php echo $task->id ?>">Mark Complete</a> /-/ <a href="<?php echo base_url();?>tasks/mark_incomlete/<?php echo $task->id ?>">Mark Incomplete</a></td>
			</tr>
		<?php endforeach; ?>	
	</tbody>
</table>
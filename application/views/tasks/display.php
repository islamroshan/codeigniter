
<div class="row">
 <div class="col-md-9  ">
 <p class="bg-success"> <?php echo $this->session->flashdata('task_edited'); ?></p>

		<ul class="list-group mt-2">
			<?php foreach($tasks as $task): ?>
		 	<li class="list-group-item active"><b>Your Task :</b><?php echo $task->task_name; ?></li>
		 	
		  	<li class="list-group-item">
				<b>Project Name:</b> <?php echo $project_name; ?> 
			</li>
			<li class="list-group-item">
				<b>Created : </b><?php echo $task->date_created; ?> 
			</li>
			<li class="list-group-item">
				<b>Due on : </b> <?php echo $task->due_date; ?>
			</li>
			<li class="list-group-item">
				<h4>Decription :</h4><p><?php echo $task->task_body; ?></p>
			</li>
			 <?php endforeach; ?>
		</ul>	
  </div>
<div class="col-md-3  ">
		<ul class="list-group">
			<h4>Projects Action</h4>
			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id;?>">Edit</a></li>

			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/delete/<?php echo $task->project_id ;?>/<?php echo $task->id ;?>">Delete</a></li>
			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_comlete/<?php echo $task->id ?>">Mark Complete</a> </li>
			<li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_incomlete/<?php echo $task->id ?>">Mark Incomplete</a></li>
		</ul>
</div>

</div>

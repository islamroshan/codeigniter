<h2>Projects</h2>
<p class="bg-success"> <?php echo $this->session->flashdata('task_edited'); ?></p>
<p class="bg-success"> <?php echo $this->session->flashdata('task_deleted'); ?></p>
<a  href="<?php echo base_url();?>projects/create"><button class="btn btn-primary float-right mb-2">Create project</button></a>
<p class="bg-success"> <?php echo $this->session->flashdata('project_deleted'); ?></p>
<p class="bg-success"> <?php echo $this->session->flashdata('project_created'); ?></p>
<table class="table">
	<thead>
		<tr>
			<th>Project Name</th>
			<th>Project Body</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>	
		<?php foreach($projects as $project): ?>
			<tr>
			<?php echo "<td> <a href='" . base_url() ."projects/display/" . $project->id."'>" . $project->project_name . "</a></td>"; ?>
			<?php echo "<td>" . $project->project_body . "</td>"; ?>
			<td><a href="<?php base_url();?>delete/<?php echo $project->id; ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>	
	</tbody>
</table>

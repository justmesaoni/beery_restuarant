<h1>User List</h1>
<?php 
	if (validation_errors()) {
		echo custom_message('info', validation_errors());	
	}
	
?>

<div class=" pull-right">
	
<?php echo form_open('admin/users/view',array('class'=>'form-inline','method'=>'GET')); ?>
  <div class="form-group">
   <label for="filter">Filter By </label>
    <select name="filter" class="form-control">
     
	  <option value="id">ID</option>
	  <option value="username">Username</option>
	  <option value="email">Email</option>
	  <option value="phone">Phone</option>
	   <option value="status">Status</option>
	 
	</select>
    
  </div>
  <div class="form-group">
   <label for="data">Equal to </label>
    <input name="data" value="<?php echo set_value('data'); ?>" type="text" class="form-control" id="data" placeholder="Value to match">
    
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
<br >
</div>
<table class="table table-bordered">
 <thead>
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
	 	<th>Username</th>
	 	<th>Email</th>
	 	<th>Phone</th>
	 	<th>Group</th>
	 	<th>Registered On</th>
	 	<th title=" 1 = Active, 0 = Inactive">Status</th>
	 	<th>Action</th>
 	</tr>
 </thead>
 <tbody>
 	<?php 
 		foreach ($users as  $user) {
 			?>
 			<tr>
 				<td><?php echo $user->id ?></td>
 				<td><?php echo $user->fullname ?></td>
 				<td><?php echo $user->username ?></td>
 				<td><?php echo $user->email ?></td>
 				<td><?php echo $user->phone ?></td>
 				<td><?php echo $user->type ?></td>
 				<td><?php echo $user->registration_time; ?></td>
 				<td><?php echo $user->status; ?></td>

 				<td>
 					<?php echo anchor('admin/users/show/'.$user->id, '<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>'); ?>
 					&nbsp;
 					<?php echo anchor('admin/users/delete/'.$user->id, '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'); ?>
 				</td>
 				
 			</tr>

 			<?php
 		}
 	 ?>
 </tbody>
</table>
<?php echo $this->pagination->create_links(); ?>
 </div> <!--End of col-md-10-->
 
</div> <!-- End of container -->

</body>
</html>
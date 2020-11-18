<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>List Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/bootstrap.js' ?>">
	<script src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js' ?>"></script>
	
</head>
<body>
<div class="container">
<div class="col-lg-12">

<br><br><h1 class="text-center text-primary">Display Table</h1>


<!-- Add Button Link-->
<?php echo anchor('welcome/index','Add New',['class' => 'btn btn-primary']);  ?>
<hr>
<!-- ------------------------------ -->
<div class="">
<nav class="navbar navbar-light bg-light">

<form  action="<?php echo base_url().'welcome/search'?>" class="form-inline" id="search_id" method="post">

<center><table>
<tr>
	
	<td> <span class="text"> Search </span> <input type="text" name="query" > </td>
		
	<td><input class="form-control"  type="submit" name="submit" value="submit"></td>

</tr>
</table>
</center>
</form>
<!-- ------------------------------ -->
</nav>
</div>
<!-- -------------------------------- -->
<br><table  class="table table-striped table-hover text-center  " id="table_list">

<tr class="text-white bg-dark">

				<th>ID</th>

				<th>Username</th>

				<th>Email ID</th>

				<th>Division</th>

				<th>District</th>

				<th>Upozila</th>

				<th>Delete</th>
				
				<th>Update</th>
				
				<th>Detail</th>

			</tr>

			<?php if(count($post)): ?>
			<?php foreach($post as $column): ?>
                <tr>
				<td><?php echo $column->id ?></td>
				<td><?php echo $column->username ?></td>
				<td><?php echo $column->email ?></td>
				<td><?php echo $column->division_name ?></td>
				<td><?php echo $column->district_name ?></td>
				<td><?php echo $column->upozila_name ?></std>
		
				<td><?php echo anchor("welcome/update/$column->id",'Update',['class' => 'btn-primary btn']);  ?></td>
				<td><?php echo anchor("welcome/detail/$column->id",'Detail',['class' => 'btn-success btn']);  ?></td>
				<td><?php echo anchor("welcome/delete/$column->id",'Delete',['class' => 'btn-danger btn']);  ?></td>
				
			</tr>
			<?php endforeach; ?>

			<?php else: ?>
				<tr>
					<td>No records found!</td>
				</tr>
			<?php endif; ?>	

			
			</table>
			</div>
			</div> 

</body>

</html>
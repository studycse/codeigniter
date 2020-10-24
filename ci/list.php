<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>List Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	
</head>
<body>
<div class="container">
<div class="col-lg-12">

<br><br><h1 class="text-center text-primary">Display Table</h1>

<!-- Add Button Link-->
<?php echo anchor('register/create','Add New',['class' => 'btn btn-primary']);  ?>

<br><table  class="table table-striped table-hover text-center  ">

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
		
				<td><?php echo anchor("register/update/$column->id",'Update',['class' => 'btn-primary btn']);  ?></td>
				<td><?php echo anchor("register/detail/$column->id",'Detail',['class' => 'btn-success btn']);  ?></td>
				<td><?php echo anchor("register/delete/$column->id",'Delete',['class' => 'btn-danger btn']);  ?></td>
				
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>List Page</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>">
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
<form  action="<?php echo base_url().'welcome/search'?> " class="form-inline" method="post" role="search">
<center>
<table>
<tr>	
<td> 
	<span class="text"> Search </span> 
	<input type="text" name="query" value="" placeholder="search" class="form-control" > 
</td>
<td>
 <input type="submit" value="search" class="btn btn-primary"  />
 </td>
</tr>
</table>
</center>
</form>

</nav>
</div>

<br>
	
	<table  class="table table-striped table-hover text-center  " id="table_list">

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

				<tbody id="result">
				
				</tbody> 
								
			</table>
			<?php echo $this->pagination->create_links();  ?> 
			
			</div>
			</div>
			
			

</body>
<script type="text/javascript">

$(document).ready(function(){

	list(); //list finction call

	function list(){
		$.ajax({
			method:'post',
			url:'<?php echo base_url() ?>welcome/listEmployee',
			dataType:'json',
			success:function(data){
				
				var html='';
				var i;
				for(i=0; i<data.length; i++){
					
					html+='<tr>'+
					'<td>'+data[i].id+'</td>'+
					'<td>'+data[i].username+'</td>'+
					'<td>'+data[i].email+'</td>'+
					'<td>'+data[i].division_name+'</td>'+
					'<td>'+data[i].district_name+'</td>'+
					'<td>'+data[i].upozila_name+'</td>'+
					'<td>'+
					'<a href="<?php echo base_url('welcome/update/'); ?>'+data[i].id+'" class="btn btn-primary text-white " data="'+data[i].id+'">Update</a>'+'</td>'+
					'<td>'+
					'<a href="<?php echo base_url('welcome/detail/'); ?>'+data[i].id+'" class="btn btn-success text-white " data="'+data[i].id+'">Detail</a>'+
					'</td>'+
					'<td>'+
					'<a href="<?php echo base_url('welcome/delete/'); ?>'+data[i].id+'" class="btn btn-danger text-white" data="'+data[i].id+'">Delete</a>'+
					'</td>'+
					'</tr>';

				}
				    $('#result').html(html);
			},error:function(){
				alert('could not get data ');
			}
		});
	}


	///edit part-----------------------------
// $('#result').on('click','.item-edit',function(){

// 	var id = $(this).attr('data');
// 	alert(id);
// 	$('#registerForm').show();
// 	$('#registerForm').attr('action','<?php echo base_url()?>welcome/update');

// 	$.ajax({

// 		type:'ajax',
// 		method:'get',
// 		url:<?php echo base_url()?>'welcome/modify',
// 		data:{id:id},
// 		dataType:'json',
// 		success:function(data){

// 		}



// 	});

// });






});

</script>

</html>
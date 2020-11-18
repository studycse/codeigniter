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
<td> <span class="text"> Search </span> 
	<input type="text" name="query" value="" placeholder="search" class="form-control" > 
</td>
<td> <input type="submit" value="search" class="btn btn-primary"  /> </td>
</tr>
</table>
</center>
</form>

</nav>
</div>
<!-- <div class="col-lg-8">
	<form action="" class="navbar-form navbar-right" role="search" method="post" accept-charset="utf-8">
	<div class="form-group">
	<input type="text" name="query" value="" class="form-control" placeholder="search"  />

	<input type="submit" value="search" class="btn btn-primary"  />
	</div>
	</form>	</div> -->
<!-- -------------------------------- -->
<br>

	<table  class="table table-striped table-hover text-center " id="table_list">

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
					<!-- <tbody id="result">
				
				</tbody>  -->

				<?php if(count($recorde)): ?>
				<?php foreach($recorde as $reco): ?>
	                <tr>
					<td><?php echo $reco->id ?></td>
					<td><?php echo $reco->username ?></td>
					<td><?php echo $reco->email ?></td>
					<td><?php echo $reco->division_name ?></td>
					<td><?php echo $reco->district_name ?></td>
					<td><?php echo $reco->upozila_name ?></std>
			
					<td><?php echo anchor("welcome/update/$reco->id",'Update',['class' => 'btn-primary btn']);  ?></td>
					<td><?php echo anchor("welcome/detail/$reco->id",'Detail',['class' => 'btn-success btn']);  ?></td>
					<td><?php echo anchor("welcome/delete/$reco->id",'Delete',['class' => 'btn-danger btn']);  ?></td>
					
				</tr>
				<?php endforeach; ?>

				<?php else: ?>
					<tr>
						<td>No records found!</td>
					</tr>
				<?php endif; ?>	

				
			</table>
			<?php echo $this->pagination->create_links();  ?>
			
			</div>
			</div>
			

</body>
<script type="text/javascript">

// $(document).ready(function(){



//  function load_data(query)
//  {
//   $.ajax({
//    url:"<?php echo base_url(); ?>welcome/search",
//    method:"POST",
//    type:'html',
//    data:{query:query},
//    success:function(data){
//     $('#result').html(data);
//    }
//   })
//  }







//  $('#search_text').keyup(function(){
//   var search = $(this).val();
//   if(search != '')
//   {
//    load_data(search);
//   }

//  });

// //update button-----------

// $(document).on('click','.update',function(){

// 	 var id =$(this).attr("id");
	
// 	$.ajax({
// 		url:"<?php echo base_url();?>welcome/ajax_update",
// 		method:"POST",
// 		data:{id:id},
// 		dataType:"html",
// 		success:function(data){
			
// 			console.log(data);
// 				// $('#result').hide();
// 			   // $('#id').val(data);
// 			 //   $('#address').val(data);
// 		}

// 	});
	
// });

// // ajax search


// });

</script>
</html>
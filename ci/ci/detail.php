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

<br><br><h1 class="text-center text-primary">Detail Table</h1>
<table>
	<h5><?php echo $post->username; ?></h5>
	<h5><?php echo $post->email; ?></h5>
	<h5><?php echo $post->address; ?></h5>
	<h5><?php echo $post->mobile; ?></h5>
	<h5><?php echo $post->division_name; ?></h5>
	<h5><?php echo $post->district_name; ?></h5>
	<h5><?php echo $post->upozila_name; ?></h5>
	<h5><?php echo $post->language; ?></h5>
	<h5><?php echo $post->sscversity; ?></h5>
	<h5><?php echo $post->sscboard; ?></h5>
	<h5><?php echo $post->sscresult; ?></h5>
	<h5><?php echo $post->hscversity; ?></h5>
	<h5><?php echo $post->hscboard; ?></h5>
	<h5><?php echo $post->hscresult; ?></h5>
	<h5><?php echo $post->gdversity; ?></h5>
	<h5><?php echo $post->gdboard; ?></h5>
	<h5><?php echo $post->gdresult; ?></h5>
	<h5><?php echo $post->msversity; ?></h5>
	<h5><?php echo $post->msboard; ?></h5>
	<h5><?php echo $post->msresult; ?></h5>
	<h5><?php echo $trn->training_name; ?></h5>
	<h5><?php echo $trn->organization; ?></h5>
	<h5><?php echo $trn->details; ?></h5>
<!-- back Button Link-->
<?php echo anchor('register/list','Back',['class' => 'btn btn-primary']);  ?>
	
	
</table>






</div>
</div> 

</body>
</html>
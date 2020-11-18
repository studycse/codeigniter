<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>List Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" enctype="multipart/form-data">
	
</head>
<body>

<div class="row" style="margin-top: 20px; ">
                <div class="col-md-4 " style="border: 2px solid transparent;">
                    <div class="col-md-12 " >
                   <img src="<?php echo base_url("uploads/$post->id/".$post->image) ?>" style="width: 50%; height:100px;">
                  </div>
  </div>
</div>

<div class="container">
 <div class="col-md-8 " style="text-align: left">
 <table class="table table-hover table-striped" id="tableFristCellwith">
                       

<br><br><h1 class="text-center text-primary">Detail Table</h1>
<hr>

						 <tr>
						    <td>Name:</td>
						     <td><?php echo $post->username; ?></td>
						 </tr>

						<tr>
                            <td>EMAIL:</td>
                            <td><?php echo $post->email; ?></td>
                        </tr>

                        <tr>
                            <td>ADDRESS</td>
                            <td><?php echo $post->address; ?></td>
                        </tr>

                        <tr>
                            <td>MOBILE</td>
                            <td><?php echo $post->mobile; ?></td>
                        </tr>
                        <tr>
                            <td>Dvision:</td>
                            <td><?php echo $post->division_name; ?></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><?php echo $post->district_name; ?></td>
                        </tr>

                        <tr>
                            <td>Upozila</td>
                            <td><?php echo $post->upozila_name; ?> </td>
                        </tr>
                        <tr>
                            <td>LANGUAGE</td>
                            <td><?php echo $post->language; ?></td>
                        </tr>
                        <tr>
                            <td>SSC VERSITY</td>
                            <td><?php echo $post->sscversity; ?></td>
                        </tr>

                        <tr>
                            <td>SSC BOARD</td>
                            <td><?php echo $post->sscboard; ?></td>
                        </tr>
                        <tr>
                            <td>SSC RESULT</td>
                            <td><?php echo $post->sscresult; ?></td>
                        </tr>
                        <tr>
                            <td>HSC VERSISTY</td>
                            <td><?php echo $post->hscversity; ?></td>
                        </tr>

                        <tr>
                            <td>HSC BOARD</td>
                            <td><?php echo $post->hscboard; ?></td>
                        </tr>

                        <tr>
                            <td>HSC RESULT</td>
                            <td><?php echo $post->hscresult; ?></td>
                        </tr>



                        <tr>
                            <td>MSC VERSITY</td>
                            <td><?php echo $post->msversity; ?></td>
                        </tr>
                        <tr>
                            <td>MSC BOARD</td>
                            <td><?php echo $post->msboard; ?></td>
                        </tr>


                        <tr>
                            <td>MSC RESULT </td>
                            <td><?php echo $post->msresult; ?></td>
                        </tr>

<!-- training part -->
             <?php if(count($trn)): ?>
			<?php foreach($trn as $train): ?>

				         <tr>
                            <td>training Name</td>
                            <td><?php echo $train->training_name; ?></td>
                        </tr>
                        <tr>
                            <td>organization</td>
                            <td><?php echo $train->organization; ?></td>
                        </tr>


                        <tr>
                            <td>Details </td>
                            <td><?php echo $train->details; ?></td>
                        </tr>



			<?php endforeach; ?>

			<?php else: ?>
				<tr>
					<td>No records found!</td>
				</tr>
			<?php endif; ?>		
				

	
		
</table>

<!-- back Button Link-->
<?php echo anchor('welcome/list','Back',['class' => 'btn btn-primary']);  ?>






</div>
</div> 

</body>
</html>
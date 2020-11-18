<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/bootstrap.js' ?>">
	<script src="<?php echo base_url().'assets/js/jquery-3.5.1.min.js' ?>"></script>

</head>
<body>

<h3> Update FORM</h3>
<div class="regform">
<form action="<?php echo base_url().'welcome/modifyUpdate/$post->id'?>" method="post" name="registerForm" id="registerForm" enctype="multipart/form-data"> 

<input type="hidden" name="id" id="id" value="<?php echo $hidden_id;?>">

<table class="table1" align="center" cellpadding = "15">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td > NAME</td>
<td><input type="text" name="username" value="<?php echo set_value('username',$post->username);?>" id="username" />
</td>
</tr>

 <!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL </td>
<td><input type="text" name="email" value="<?php echo set_value('email',$post->email);?>" id="email" />	
</td>
</tr>

<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" id="address"  rows="4" cols="30"><?php echo set_value('address',$post->address);?></textarea>
</td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE</td>
<td>
<input type="text" name="mobile" value="<?php echo set_value('mobile',$post->mobile);?>" id="mobile"  />
</td>
</tr>

<!----- Division -------------------------------------------------------->
<tr>
<td>Dvision:</td>
<td><select name="division" id="division" >
<option value=<?php echo $post->id;?>> <?php echo $post->division_name;?> </option>
 <?php if(count($division)): ?>
			<?php foreach($division as $divi): ?>
			<option value="<?php echo $divi['id'];?>"><?php echo $divi['division_name'];?> </option>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td>Nothing found!</td>
				</tr>
			<?php endif; ?> 	

</select>
</td>
</tr>

<!----- District -------------------------------------------------------->
<tr>
<td>District:</td>
<td><select name="district" id="district"  >
<option value=<?php echo $post->id;?>><?php echo $post->district_name;?> </option>

</select>
</td>
</tr>

<!----- Upozila -------------------------------------------------------->
<tr>
<td>Upozila:</td>
<td><select name="upozila" id="upozila"  >
<option value=<?php echo $post->id;?>> <?php echo $post->upozila_name;?></option>

</select>
</td>
</tr>

<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>LANGUAGE </td>
 
<td class="language">
English
<input type="checkbox" name="language" id="language" >

Bangla
<input type="checkbox" name="language" id="language" >
</td>
</tr>

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br/></td>
 
<td>
<table class="table1">
 
<tr>
<td align="center"><b>Examination</b></td>
<td align="center"><b>University</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Result</b></td>
</tr>

<tr>

<td align="center">SSC</td>
<td><select name="sscversity" id="sscversity" required >
<option value=<?php echo $post->id;?>><?php echo $post->sscversity;?> </option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="sscboard" id="sscboard" required >
<option value= <?php echo $post->id;?>> <?php echo $post->sscboard;?></option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="sscresult" id="sscresult" required >
<option value=<?php echo $post->id;?>> <?php echo $post->sscresult;?></option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">HSC</td>
<td><select name="hscversity" id="hscversity" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->hscversity;?></option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="hscboard" id="hscboard" required="required" >
<option value=<?php echo $post->id;?>> <?php echo $post->hscboard;?></option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="hscresult" id="hscresult" required ="required">
<option value=<?php echo $post->id;?>> <?php echo $post->hscresult;?></option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Graduation</td>
<td><select name="gdversity" id="gdversity" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->gdversity;?></option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="gdboard" id="gdboard" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->gdboard;?></option>
<option value="Dhaka">Dhaka</option>
<option value="comilla">comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="gdresult" id="gdresult" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->gdresult;?></option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>
 
<tr>

<td align="center">Masters</td>
<td><select name="msversity" id="msversity" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->msversity;?></option>
<option value="DCC">DCC</option>
<option value="UIU">UIU</option>
<option value="MIST">MIST</option>
</select></td>

<td><select name="msboard" id="msboard" required="">
<option value=<?php echo $post->id;?>> <?php echo $post->msboard;?></option>
<option value="Dhaka">Dhaka</option>
<option value="Comilla">Comilla</option>
<option value="CTG">CTG</option>
</select></td>

<td><select name="msresult" id="msresult" required="required">
<option value=<?php echo $post->id;?>> <?php echo $post->msresult;?></option>
<option value="4.00">4.00</option>
<option value="3.00">3.00</option>
<option value="2.00">2.00</option>
</select></td>
</tr>

</table>
 
</td>
</tr>

<!----- IMAGE ---------------------------------------------------------->

<tr>
<td>PHOTO:</td>
<td><input type="file" name="image" id="image" width="23" height="23" >  </td>
</tr>

<!----- Cv ---------------------------------------------------------->
<tr>
<td>CV:</td>
<td><input type="file" name="file" id="file" > </td>
</tr>

<!----- Training ---------------------------------------------------------->
<tr>
<td>TRAINING <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table class="table1" id="traing_field">
 
<tr>
<td align="center"><b>Training Name</b></td>
<td align="center"><b>Organization</b></td>
<td align="center"><b>Details</b></td>
</tr>
 
<tr>
<td><input  type="text" name="training_name[]" id="training_name" /></td>
<td><input  type="text" name="organization[]" id="organization" /></td>
<td><input  type="text" name="details[]" id="details" /></td>
<td><input class="btn-success btn" type="button" name="add" id="add" value="Add More" /></td>
</tr>

</table>
 
</td>
</tr>
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">

<button type="submit" name="update" value="update" id="btn_update" class="btn btn-primary">update</button>
</td>
</tr>
</table>
 
</div>

<script type="text/javascript">

$(document).ready(function(){



 var html ='<tr><td><input type="text" name="training_name[]" required="" ></td><td><input  type="text" name="organization[]" required=""></td><td><input  type="text" name="details[]" required="" /></td><td><input class="btn-danger btn" type="button" name="remove" id="remove" value="remove" /></td></tr>';	

 var x=1;

 $("#add").click(function(){
	$('#traing_field').append(html);
});

 $("#traing_field").on('click','#remove', function(){
 	$(this).closest('tr').remove();

 });

 ///  division-----------------------
$("#division").on('change',function(){

var divisionId=$(this).val();
$.ajax({
	url:"<?php echo base_url();?>welcome/getDistrict",
	method:"POST",
	data:{id:divisionId},
	dataType:"html",
	success:function(data){
		$("#district").html(data);
	}

});

});

///  upozila----------------------
$("#district").on('change',function(){

var districtId=$(this).val();
$.ajax({
	url:"<?php echo base_url();?>welcome/getUpozila",
	method:"POST",
	data:{districtId:districtId},
	dataType:"html",
	success:function(data){
		$("#upozila").html(data);
	}

});

});

//form submission by ajax-------------------

$("#registerForm").submit(function(event) {

event.preventDefault();
var username =$('#username').val();
var email =$('#email').val();
var address =$('#address').val();
var mobile =$('#mobile').val();
var division =$('#division').val();
var district=$('#district').val();
var upozila=$('#upozila').val();
var language=$('#language').val();
var sscversity=$('#sscversity').val();
var sscboard =$('#sscboard').val();
var sscresult=$('#sscresult').val();
var hscversity=$('#hscversity').val();
var hscboard=$('#hscboard').val();
var hscresult=$('#hscresult').val();
var gdversity=$('#gdversity').val();
var gdboard=$('#gdboard').val();
var gdresult=$('#gdresult').val();
var msversity=$('#msversity').val();
var msboard=$('#msboard').val();
var msresult=$('#msresult').val();
var image=$('#image').val();
var file=$('#file').val();

if (username!='' && email!='' && address!='' && mobile!='' && division!='' && district!='' && upozila!='' && language!='' &&sscversity!='' && sscboard!='' && sscresult!='' && hscversity!='' && hscboard!='' && hscresult!='' &&  gdversity!='' &&  gdboard!='' && gdresult !='' &&  msversity!='' && msboard!='' && msresult!='' &&  image!='' &&  file!='' ){

 var formData = new FormData($(this)[0]);// sob data gulo k akta variable a rakbe....

$.ajax({

	url:"<?php echo base_url();?>welcome/modifyUpdate",//function theke data fetch korbo
	type:"POST",
	data:formData,
    contentType: false,
    enctype: 'multipart/form-data',
    processData: false,
	dataType:"json",
	success:function(data)
	{
	console.log(data);
	
	// alert('successfully inserted');
		
	},
	 error: function(data) {
	 	alert('error');
	 }


});

}else{

alert('all fields are required');

}


});




});


</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script>
function myFunction() {
  var x = document.getElementById("tbl");
  if (x.style.display === "none") {
    x.style.display = "block";
     x.style.display = "show";
  } else {
    x.style.display = "none";
  }
}
</script>
</head>
<body>
<div class="container" style="margin-top:20px;">
	<form action="<?php echo base_url();?>apanel/show" method="post">
<div class="row">
	<div class="col-md-4">
		<img width="120" height="120" src="<?php echo base_url();?>assets/images/logoh.jpg" alt="" />
	</div>
	<div class="col-md-8">
	<h1 style="color:blue;">Maharshi Bhrigu Patanjali Yog Sansthan </h1>
	</div>
	
</div>	
<div class="row" style="margin-top: 20px;">
	<div>
		<p> To,</p>
		<p>The Admin</p>
		<p>Maharshi Bhrigu Patanjali Yog Sansthan</p>
	</div>
	
</div>
<div class="row">
	<center><div><p><h3 style="color:blue;">Student Detail</h3></p>
<p style="color:blue;">20___20</p>
</div>
	</center>
</div>
<div class="row">
	<div class="col-md-4">Enter Student ID</div>
	<div class="col-md-4"><input type="text" name="stu_id" id="id1"></div>
	<div class="col-md-4"><input type="submit" name="" class="btn btn-success" onclick="myFunction()">  </div>
</div>
</form>
</div>
	<table style="margin-top:0px;" id="tbl" class="table table-bordered">
		<hr>
		<tr><center><strong> STUDENT DETAILS</strong></center> 
	</tr>
<?php foreach($abc as $data)
{ ?>
	<tr>
<td><center> STUDENT ID:</center></td>
<td><center><?php echo $data->stud_id;?> </center></td>
</tr>
<tr>
<td><center> STUDENT  NAME :</center></td>
<td><center><?php echo $data->name;?></center></td>

</tr>

<tr>
<td><center> MOTHER NAME  :</center></td>
<td><center><?php echo $data->mother_name;?></center></td>

</tr>

<tr>
<td> <center>FATHER NAME :</center></td>
<td><center><?php echo $data->father_name;?></center><center> </td>


</tr>
<tr>
<td><center>GENDER:</center><center></td>
<td><center><?php echo $data->gender;?></center><center> </td>


</tr>
<tr>
<td><center> DATE OF BIRTH:</center><center></td>
<td><center><?php echo $data->date_of_birth;?> </center></td>


</tr>
<tr>
<td><center>CATEGORY:</center><center></td>
<td><center><?php echo $data->category;?></center> </td>

</tr>
<tr>
<td><center> OCCUPATION :</center><center></td>
<td><center><?php echo $data->occupation;?></center> </td>


</tr>
<tr>
<td><center> MOBILE NO. :</center><center></td>
<td><center><?php echo $data->mobile;?></center><center></td>


</tr>
<tr>
<td><center> ADDRESS :</center></td>
<td><center><?php echo $data->address_1;?></center><center> </td>


</tr>
<tr>
<td><center> EXAM NAME :</center></td>
<td><center><?php echo $data->exam_name;?> </center></td>


</tr>
<tr>
<td><center> AADHAR NO. :</center></td>
<td><center><?php echo $data->adhar_no;?> </center></td>


</tr>
<!-- <tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOTHER'S NAME :</td>
<td><?php echo $abc->m_name;?></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS :</td>
<td><?php echo $abc->student_address;?></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admission Date:</td>
<td><?php echo $abc->addmi_date;?></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph. No.</td>
<td><?php echo $abc->student_contact_no;?></td>
<td></td>
</tr> -->
<?php 
}?>
<!-- <tr>
<td>(b) GUARDIAN'S NAME :
</td>
<td></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADDRESS :</td>
<td></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OCCUPATION :</td>
<td></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph No. :</td>
<td></td>
<td></td>
</tr>

<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RELATIONSHIP TO CHILD :</td>
<td></td>
<td></td>
</tr>

<tr>
<td>5: NATIONALITY :</td>
<td><?php echo $abc->nation;?></td>
<td></td>
</tr>


<tr>
<td>7 :DATE OF APPLICATION :</td>
<td><?php echo $abc->date;?><br>certify that the above information is correct</td>
<td></td>
</tr>

<tr>
<td>DATE :</td>
<td><?php echo $abc->date;?></td> -->
<!-- <tr>
<td>SIGNATURE OF PARENT/GUARDIAN :</td>
</tr>

<tr>
<td>PRINCIPLE SIGNATURE :</td>
<td></td>
<td></td>
</tr>
<tr><td></td><td><h3>* YOGA fees once paid will not be refunded in any case ....</h3></td></tr>

<tr>
<td>FORM NO. :</td>
<td><?php echo $abc->id;?></td>
<td></td>
</tr>

<tr>
<td>NAME :</td>
<td><?php echo $abc->student_name;?></td>
<td></td>
</tr>


<tr>
<td>COURSE:</td>
<td><?php echo $abc->student_course;?></td>
<td></td>
</tr>

<tr>
<td>FATHER'S NAME :</td>
<td><?php echo $abc->f_name;?></td>
<td></td>
</tr>

<tr>
<td>DATE OF ADDMISSION : :</td>
<td><?php echo $abc->addmi_date;?></td>
<td></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td>Principal Sig.</td>
	<td></td>
	<td>Gaurdian Sig.</td>
</tr> -->
</table>


</body>
</html>

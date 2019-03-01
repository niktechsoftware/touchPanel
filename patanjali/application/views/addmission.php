<!DOCTYPE html>
<html>
<head>
	<title></title>
		

<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("form1");
  if (x.style.display == "none") {
    x.style.display = "block";
    // x.style.display = "show";
   // x.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('ConfirmPassword').value) {
    document.getElementById('cpass').style.color = 'green';
    document.getElementById('cpass').innerHTML = 'matching';
  } else {
    document.getElementById('cpass').style.color = 'red';
    document.getElementById('cpass').innerHTML = 'not matching';
  }
}
</script>


</head>
<body>
	<div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
<?php $this->load->view('header'); ?>
         <?php $this->load->view('menu'); ?>
         
    	<div class="container-fluid" style="padding-top:10px">
	      <div class="row">
		 
		 <?php $this->load->view('sideban'); ?>
		  
		  
			<!-- start: Flexslider -->

			<div class="span9">

             <div style="padding:16px 20px">
			<div class="title" ><center><h2 > CENTER REGISTRATION  </h2></center></div>
             
				<!-- start: Contact Form -->
				<div id="contact-form" style="background:#f3b007;border-radius:5px;padding:16px 20px">
					
					<form method="post" action="<?php echo base_url();?>index.php/welcome/center_login/" name="resultfrm">
					<fieldset>
						  <div class="span12" style="text-align:center">
						  <div class="clearfix">
								<label for="name" ><span class="color1">Center ID  <span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:50%" id="name" name="uname" type="text" required="" >
								</div>
							</div>
							 <div class="clearfix">
								<label for="password"><span class="color1">Password<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:50%" id="password" name="passrd" type="password" required="" >
								</div>
							</div>
							
						
						  
						  </div>
			
				<div class="span12" style="text-align:center">
				<div class="actions">
				<hr/>
				<input type="submit" name="login" class="btn btn-danger btn-large" value="Log In">
								
							</div>
				</div>
							
						</fieldset>
					
					</form>
					
				</div>
			
			</div>
<center>
<button type="submit" name="submit" class="btn btn-danger btn-large" onclick="myFunction()">New Center Registration</button>
</center>
</div>

<div class="span9" id="form1" style="display:none;"> 
			<div style="padding:16px 20px">
			<div class="title" ><center><h2>  NEW CENTER REGISTRATION </h2></center></div>
             
				<!-- start: Contact Form -->
				<div id="contact-form" style="background:#c68dc0;border-radius:5px;padding:16px 20px">
					
					<form method="post" action="<?php echo base_url();?>index.php/welcome/center_register" enctype="multipart/form-data" name="register_form"  >
					 					
					<fieldset>
						  <div class="span6">
						  	<div class="clearfix">
								<label><span>Center ID:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:95%" name="centerid" Placeholder="Enter Center Name" type="text" required="">
								</div>
							</div>
						  <div class="clearfix">
								<label><span>Center Name:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:95%" name="name" Placeholder="Enter Center Name" type="text" required="">
								</div>
							</div>
							<div class="clearfix">
								<label><span>Email Id:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="2" style="width:95%" id="email" name="email" Placeholder="Enter Email Id" type="Email"  class="input-xlarge" required="">
								</div>
							</div>
							
							<div class="clearfix">
								 <label for="password">Password <span title="Required"
                                       style="color:red;">*</span></label>
								<div class="input">
									   <input type="password" style="width:95%"  class="form-control" id="pass" name="password"
                                   placeholder="Enter your password" minlength="5" title="plz use more than 5 char" required>
								</div>
							</div>
							<div class="clearfix">
								<label for="ConfirmPassword"> Confirm Password <span title="Required"
                                       style="color:red;">*</span><span id="cpass"></span></label>
								<div class="input">
									<input name="ConfirmPassword" style="width:95%" onkeyup='check();' type="password" id="ConfirmPassword" class="form-control"
                                   placeholder="Confirm Password" required>
								</div>
							</div>
						  <div class="clearfix">
								<label><span>Addresss:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="address" type="text"  Placeholder="Enter Your Address" class="input-xlarge" required="">
								</div>
							</div>
                                 
							<div class="clearfix">
								<label><span>District:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="district" type="text"  Placeholder="Enter Your District" class="input-xlarge" required="">
								</div>
							</div>
							

						  </div>
			    <div class="span6">
				<div class="clearfix">
								<label for="name"><span>Director Name:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="d_name" type="text"  Placeholder="Enter  Director Name" class="input-xlarge" required="">

								</div>

								      </div>
							<div class="clearfix">
								<label for="name"><span>PAN Nummber:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="pan" type="text"  Placeholder="Enter PAN Number" class="input-xlarge" required="">
														</div>
							                            </div>	
							<div class="clearfix">
								<label><span>LANDMARK:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%" Placeholder="Enter Landmark"  name="Landmark" type="text"  class="input-xlarge" required="">
								</div>
							</div>
							<div class="clearfix">
								<label><span>AADHAR CARD:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%" Placeholder="Enter Addhar Card"  name="adhar" type="number"  class="input-xlarge" required="">
								</div>
							</div>
                       <div class="clearfix">
						<label for="landagreement"><span>LAND AGREEMENT:<span style="color:red">*</span></span></label>
								
			     				<div class="input" >
								<select name='land_agr' class='form-control' name="l_agree" style="width:100%;height:40px;" required="" >
									  <option value="">-- Select -- </option>
									  <option value='billnumber' style='color:black' >Electricity Bill Number</option>
                                       <option value='Addressprof' style='color:black'>Address Proof</option>


								</select>								
									</div>
									</div>
									<div class="clearfix">
								<label><span>State:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="state" type="text"  Placeholder="Enter Your State" class="input-xlarge" required="">
								</div>
							</div>
							 <div class="clearfix">
								<label for="file"><span>UPLOAD FILE:</span><span style="color:red">*</span></label>
								<div class="input">
									<input tabindex="2" style="width:95% ;" Placeholder="Upload your File"  name="file" type="file"  class="input-xlarge" required="">
								</div>
							</div>
							
				               </div>
				<div class="span12">
				<div class="actions">
				<hr/>          
				<center>
					<input type="submit" name="submit" class="btn btn-danger btn-large">
								
								</center>
							</div>
				              </div>

						</fieldset>
					
					</form>
					
				</div>
			
			</div>
			</div>
			<!-- end: Hero Unit -->
			
            </div>
			</div><br>
          <?php $this->load->view('footer'); ?>
      </div>
</body>
</html>

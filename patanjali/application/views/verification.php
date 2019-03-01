<!DOCTYPE html>
<html>
<head>
	<title></title>
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
	<div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
<?php $this->load->view('header'); ?>
         <?php $this->load->view('menu'); ?>
         
         <div class="container-fluid" style="padding-top:10px">
	      <div class="row">
		 
		 <?php $this->load->view('sideban'); ?>
		  
		  
			<!-- start: Flexslider -->
			<div class="span9" >
			
			<div style="padding:16px 20px">
			<div class="title" ><h2 >STUDENT VERIFICATION </h2></div>
             
				<!-- start: Contact Form -->
				<div id="contact-form" style="background:#f3b007;border-radius:5px;padding:16px 20px">
					
					<form method="post" action="verify.php" name="resultfrm">
					<fieldset>
						  <div class="span12" style="text-align:center">
						  <div class="clearfix">
								<label for="name"><span class="color1" style="font-size: 22px;" >Enrollment No:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:50%" id="name" name="rollno" type="text" placeholder="Enter Student Enrollment Number" >
								</div>
							</div>
							
						
						  
						  </div>
			
				<div class="span12" style="text-align:center">
				<div class="actions">
				<hr/>
								<button tabindex="3" type="submit" name="submit" class="btn btn-danger btn-large">Search Now</button>
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

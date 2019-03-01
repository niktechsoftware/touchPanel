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
			<div class="span9">
			
			<div style="padding:16px 20px">
			<div class="title" ><h2>DOWNLOAD ADMIT CARD</h2></div>
             
				<!-- start: Contact Form -->
				<div id="contact-form" style="background:#c68dc0;border-radius:5px;padding:16px 20px">
					
					<form method="post" action="admitcard.php" name="register_form" onSubmit="return talentvalidate()">
					
					<fieldset >
						
						  <div class="span12" style="text-align:center" >
						  <div class="clearfix">
								<label for="name"><span style="color:#FFFFFF ;font-size: 22px;">Registration Number:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:50%;" name="rollnumber" Placeholder="Enter Registration Number" type="text" >
								</div>
							</div>
							<div class="span12" >
				           <div class="actions">
				
								<input type="submit" name="submit" class="btn btn-danger btn-large" value="Submit">
							</div>
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

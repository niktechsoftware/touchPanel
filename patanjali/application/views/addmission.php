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
			<div class="title" ><h2>ADMISSION ENQUIRY FORM</h2></div>
             
				<!-- start: Contact Form -->
				<div id="contact-form" style="background:#c68dc0;border-radius:5px;padding:16px 20px">
					
					<form method="post" action="" name="register_form" onSubmit="return talentvalidate()">
					 					
					<fieldset>
						  <div class="span6">
						  <div class="clearfix">
								<label for="name"><span>Student Name:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="1" style="width:95%" name="name" Placeholder="Enter Student Name" type="text" >
								</div>
							</div>
							<div class="clearfix">
								<label for="email"><span>Email Id:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="2" style="width:95%" name="email" Placeholder="Enter Email Id" type="text"  class="input-xlarge">
								</div>
							</div>
							
							<div class="clearfix">
								<label for="email"><span>Mobile Number:<span style="color:red">*</span></span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="mobile" type="text"  Placeholder="Enter Mobile Number" class="input-xlarge">
								</div>
							</div>
							<div class="clearfix">
								<label for="email"><span>Pincode:</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%"  name="pincode" type="text"  Placeholder="Enter Pincode" class="input-xlarge">
								</div>
							</div>
						  
						  </div>
			    <div class="span6">
				<div class="clearfix">
								<label for="name"><span>Course Type:<span style="color:red">*</span></span></label>
								<div class="input">
									<select name='ctype' class='form-control' style='width:100%;height:30px' >";
								     <option value=""> Select Course Type</option>
											<option value='Diploma' style='color:black'>Diploma</option><option value='' style='color:black'></option><option value='Certificate' style='color:black'>Certificate</option></select>								</div>
							</div>
							<div class="clearfix">
								<label for="name"><span>Select Course:<span style="color:red">*</span></span></label>
								<div class="input">
									<select name='cname' class='form-control' style='width:100%;height:30px' >";
									<option value=""> Select Course Name</option>
											<option value='NGO Management' style='color:black'>NGO Management</option><option value='Astrology' style='color:black'>Astrology</option><option value='Dance Choreography' style='color:black'>Dance Choreography</option><option value='Playback Singing' style='color:black'>Playback Singing</option><option value='Nursery Teacher Training ( NTT)' style='color:black'>Nursery Teacher Training ( NTT)</option><option value='Primary Teacher Training (PTT)' style='color:black'>Primary Teacher Training (PTT)</option><option value='Nursery Primary Teacher Training (NPTT)' style='color:black'>Nursery Primary Teacher Training (NPTT)</option><option value='Early Childhood Care & Education (ECCE)' style='color:black'>Early Childhood Care & Education (ECCE)</option><option value='Child Care Management' style='color:black'>Child Care Management</option><option value='Arts Crafts' style='color:black'>Arts Crafts</option><option value='House Keeping' style='color:black'>House Keeping</option><option value='Store and Dispatch Management' style='color:black'>Store and Dispatch Management</option><option value='Library & information science' style='color:black'>Library & information science</option><option value='Office administrator' style='color:black'>Office administrator</option><option value='Insurance Agent' style='color:black'>Insurance Agent</option><option value='Front Office Executive' style='color:black'>Front Office Executive</option><option value='Institution House Keeping' style='color:black'>Institution House Keeping</option><option value='Social Studies' style='color:black'>Social Studies</option><option value='HR Executive' style='color:black'>HR Executive</option><option value='Health & Yoga' style='color:black'>Health & Yoga</option><option value='Financial Planning & Wealth Management' style='color:black'>Financial Planning & Wealth Management</option><option value='Rural Development Management' style='color:black'>Rural Development Management</option><option value='Courier And Logistics Management' style='color:black'>Courier And Logistics Management</option><option value='Environment And Pollution Control' style='color:black'>Environment And Pollution Control</option><option value='Media Management' style='color:black'>Media Management</option><option value='Retail Trade & Management' style='color:black'>Retail Trade & Management</option><option value='Personality Development' style='color:black'>Personality Development</option><option value='Health & Care' style='color:black'>Health & Care</option><option value='Social Work' style='color:black'>Social Work</option><option value='Youth Care Worker' style='color:black'>Youth Care Worker</option><option value='Security Officer' style='color:black'>Security Officer</option><option value='Community Health Worker' style='color:black'>Community Health Worker</option><option value='Health and Safety Management' style='color:black'>Health and Safety Management</option><option value='Event Management Assistant' style='color:black'>Event Management Assistant</option><option value='Creche Management' style='color:black'>Creche Management</option><option value='Health Record Management' style='color:black'>Health Record Management</option><option value='Environmental Studies' style='color:black'>Environmental Studies</option><option value='Counselling & Guidance' style='color:black'>Counselling & Guidance</option><option value='Retail Sales Services' style='color:black'>Retail Sales Services</option><option value='Financial Market Management' style='color:black'>Financial Market Management</option><option value='Marketing and Salesmanship' style='color:black'>Marketing and Salesmanship</option><option value='Accountancy and Auditing' style='color:black'>Accountancy and Auditing</option><option value='Office Secretaryship' style='color:black'>Office Secretaryship</option><option value='English Speaking' style='color:black'>English Speaking</option><option value='Library Attendant' style='color:black'>Library Attendant</option><option value='Writing & Editing' style='color:black'>Writing & Editing</option><option value='Computerised Financial Accounting' style='color:black'>Computerised Financial Accounting</option><option value='Language Translation' style='color:black'>Language Translation</option><option value='Rural Management' style='color:black'>Rural Management</option><option value='Bar & Restaurant Management' style='color:black'>Bar & Restaurant Management</option><option value='Hospital House Keeping' style='color:black'>Hospital House Keeping</option><option value='Catering & Hospitality Assistant' style='color:black'>Catering & Hospitality Assistant</option><option value='Pre-School Management Assistant' style='color:black'>Pre-School Management Assistant</option><option value='Industrial Safety Management' style='color:black'>Industrial Safety Management</option><option value='Health Quality Management' style='color:black'>Health Quality Management</option><option value='Computer Application' style='color:black'>Computer Application</option><option value='Data Entry Operator' style='color:black'>Data Entry Operator</option><option value='DTP ( Desktop Publication )' style='color:black'>DTP ( Desktop Publication )</option><option value='Digital Marketing' style='color:black'>Digital Marketing</option><option value='SEO ( Search Engine Optimisation )' style='color:black'>SEO ( Search Engine Optimisation )</option><option value='Online Promotion Marketing' style='color:black'>Online Promotion Marketing</option><option value='Computer Teacher Training' style='color:black'>Computer Teacher Training</option><option value='Advanced Computer Teacher Training' style='color:black'>Advanced Computer Teacher Training</option><option value='Computerised Financial Accounting' style='color:black'>Computerised Financial Accounting</option><option value='Web Development' style='color:black'>Web Development</option><option value='Web Designing' style='color:black'>Web Designing</option><option value='Multimedia & Animation' style='color:black'>Multimedia & Animation</option><option value='Computer Accounting Management' style='color:black'>Computer Accounting Management</option><option value='Typing Master' style='color:black'>Typing Master</option><option value='Tally' style='color:black'>Tally</option><option value='Computer Hardware & Networking' style='color:black'>Computer Hardware & Networking</option><option value='Computer Science' style='color:black'>Computer Science</option><option value='Office Automation & Internet' style='color:black'>Office Automation & Internet</option><option value='Office Machine Operator' style='color:black'>Office Machine Operator</option><option value='Hair & Skin Care Specialist' style='color:black'>Hair & Skin Care Specialist</option><option value='Photography' style='color:black'>Photography</option><option value='Gem & Jewellery' style='color:black'>Gem & Jewellery</option><option value='Mehandi Designer' style='color:black'>Mehandi Designer</option><option value='Computer Teacher Training' style='color:black'>Computer Teacher Training</option><option value='Painting Technology' style='color:black'>Painting Technology</option><option value='Spa & Wellness Management' style='color:black'>Spa & Wellness Management</option><option value='Tailoring & Garment Technology' style='color:black'>Tailoring & Garment Technology</option><option value='Toy Making Technology' style='color:black'>Toy Making Technology</option><option value='Water Falls Making' style='color:black'>Water Falls Making</option><option value='Wooden work technology' style='color:black'>Wooden work technology</option><option value='Candle Making' style='color:black'>Candle Making</option><option value='Leather Goods Maker' style='color:black'>Leather Goods Maker</option><option value='Tailoring & Embroidery' style='color:black'>Tailoring & Embroidery</option><option value='Hosiery Course' style='color:black'>Hosiery Course</option><option value='Needle Work' style='color:black'>Needle Work</option><option value='Silk Reeling & Spinning' style='color:black'>Silk Reeling & Spinning</option><option value='Bee Keeping Course' style='color:black'>Bee Keeping Course</option><option value='Milk Products Manufacturing' style='color:black'>Milk Products Manufacturing</option><option value='Bakery Manufacturing' style='color:black'>Bakery Manufacturing</option><option value='Fruits & Vegetable Processing' style='color:black'>Fruits & Vegetable Processing</option><option value='Palm Product Technology' style='color:black'>Palm Product Technology</option><option value='Fibre Technology' style='color:black'>Fibre Technology</option><option value='Leather Processing/Tanning' style='color:black'>Leather Processing/Tanning</option><option value='Detergent Cake Making' style='color:black'>Detergent Cake Making</option><option value='Plastic Technology' style='color:black'>Plastic Technology</option><option value='Welding & Fabrication' style='color:black'>Welding & Fabrication</option><option value='Diesel Engine/Pump servicing' style='color:black'>Diesel Engine/Pump servicing</option><option value='Motor Winding' style='color:black'>Motor Winding</option><option value='Diamond Cutting' style='color:black'>Diamond Cutting</option><option value='TV Technician' style='color:black'>TV Technician</option><option value='Refrigerator Technician' style='color:black'>Refrigerator Technician</option><option value='Handmade Paper Worker' style='color:black'>Handmade Paper Worker</option><option value='Footwear & Leather Goods Worker' style='color:black'>Footwear & Leather Goods Worker</option><option value='Motor Pumps Mechanic' style='color:black'>Motor Pumps Mechanic</option><option value='Mobile Repairing' style='color:black'>Mobile Repairing</option><option value='Car Driving' style='color:black'>Car Driving</option><option value='Music & Instruments' style='color:black'>Music & Instruments</option><option value='Palm Product Technology' style='color:black'>Palm Product Technology</option><option value='AC Service and Repair' style='color:black'>AC Service and Repair</option><option value='Leather Processing/Tanning' style='color:black'>Leather Processing/Tanning</option><option value='Hotel Reception & Book Keeping' style='color:black'>Hotel Reception & Book Keeping</option><option value='Retail Brand Assistant' style='color:black'>Retail Brand Assistant</option><option value='Auto Body Repair Technician' style='color:black'>Auto Body Repair Technician</option><option value='Nursing Care Assistant' style='color:black'>Nursing Care Assistant</option><option value='Emergency Medical Technician' style='color:black'>Emergency Medical Technician</option><option value='Poultry Production' style='color:black'>Poultry Production</option><option value='Print Media' style='color:black'>Print Media</option><option value='Corporate Training & Development' style='color:black'>Corporate Training & Development</option></select>								</div>
							</div>
							
							<div class="clearfix">
								<label for="email"><span>City:</span></label>
								<div class="input">
									<input tabindex="2" style="width:95%" Placeholder="Enter City"  name="city" type="text"  class="input-xlarge">
								</div>
							</div>
							<div class="clearfix">
							<label for="email"><span>State:<span style="color:red">*</span></span></label>
								
								<div class="input">
									<select name='state' class='form-control' style='width:100%;height:30px' >";
									  <option value=""> Select state</option>
									<option value='Andaman & Nicobar' style='color:black'>Andaman & Nicobar</option><option value='Andhra Pradesh' style='color:black'>Andhra Pradesh</option><option value='Arunachal Pradesh' style='color:black'>Arunachal Pradesh</option><option value='Assam' style='color:black'>Assam</option><option value='Bihar' style='color:black'>Bihar</option><option value='Chandigarh' style='color:black'>Chandigarh</option><option value='Chhattisgarh' style='color:black'>Chhattisgarh</option><option value='Dadra &Nagar Haveli' style='color:black'>Dadra &Nagar Haveli</option><option value='Daman & Diu' style='color:black'>Daman & Diu</option><option value='Delhi NCR' style='color:black'>Delhi NCR</option><option value='Goa' style='color:black'>Goa</option><option value='Gujarat' style='color:black'>Gujarat</option><option value='Haryana' style='color:black'>Haryana</option><option value='Himachal Pradesh' style='color:black'>Himachal Pradesh</option><option value='Jammu & Kashmir' style='color:black'>Jammu & Kashmir</option><option value='Jharkhand' style='color:black'>Jharkhand</option><option value='Karnataka' style='color:black'>Karnataka</option><option value='Kerala' style='color:black'>Kerala</option><option value='Lakshadweep' style='color:black'>Lakshadweep</option><option value='Madhya Pradesh' style='color:black'>Madhya Pradesh</option><option value='Maharashtra' style='color:black'>Maharashtra</option><option value='Manipur' style='color:black'>Manipur</option><option value='Meghalaya' style='color:black'>Meghalaya</option><option value='Mizoram' style='color:black'>Mizoram</option><option value='Nagaland' style='color:black'>Nagaland</option><option value='Orissa' style='color:black'>Orissa</option><option value='Pondicherry' style='color:black'>Pondicherry</option><option value='Punjab' style='color:black'>Punjab</option><option value='Rajasthan' style='color:black'>Rajasthan</option><option value='Sikkim' style='color:black'>Sikkim</option><option value='Tamil Nadu' style='color:black'>Tamil Nadu</option><option value='Tripura' style='color:black'>Tripura</option><option value='Uttar Pradesh' style='color:black'>Uttar Pradesh</option><option value='Uttarakhand' style='color:black'>Uttarakhand</option><option value='West Bengal' style='color:black'>West Bengal</option></select>								</div>
							</div>
				
				</div>
				<div class="span12">
				<div class="actions">
				<hr/>
								<button tabindex="3" type="submit" name="submit" class="btn btn-danger btn-large">Submit</button>
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

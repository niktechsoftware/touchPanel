<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
<?php $this->load->view('header'); ?>
         
            
    <?php foreach($adc as $abc)
    {	?>
<table class=" table table-bordered" >
  <tr class="head_tr">
  <th colspan="2"> <span style="font-size: 15px;">1. Personal Detail</span> </th>
    </tr>
    <tr>
    <th class="text-left txt"> Student ID</th>
    <td><?php echo $abc->stud_id;?></td>
  </tr>
  <tr>
    <th class="text-left txt"> Student Name</th>
    <td><?php echo $abc->name;?></td>
  </tr>
  
   <tr>
    <th class="text-left txt">Student Father Name</th>
   <td><?php echo $abc->father_name;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Student Mother Name</th>
   <td><?php echo $abc->mother_name;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Gender</th>
   <td><?php echo $abc->gender;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Date Of Birth</th>
   <td><?php echo $abc->date_of_birth;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Category</th>
   <td><?php echo $abc->category;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Occupation</th>
    <td><?php echo $abc->occupation;?></td>
  </tr>
   <tr>
    <th class="text-left txt">Desability</th>
    <td><?php echo $abc->desability;?></td>
  </tr>
   <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 2. Contact Detail</span></th>
    </tr>
   <tr>
    <th class="text-left txt">Phone No</th>
   <td><?php echo $abc->phone_no;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Mobile</th>
    <td><?php echo $abc->mobile;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 3. Address Detail</span></th>
    </tr>
  <tr>
    <th class="text-left txt">Address line 1</th>
    <td><?php echo $abc->address_1;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Address line 2</th>
   <td><?php echo $abc->address_2;?></td>
  </tr>
  <tr>
    <th class="text-left txt">City Name</th>
   <td><?php echo $abc->city_name;?></td>
  </tr>
  <tr>
    <th class="text-left txt">State Name</th>
   <td><?php echo $abc->state_name;?></td>
  </tr>
  <tr>
    <th class="text-left txt">District Name</th>
    <td><?php echo $abc->district_name;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 4. Educational / Qualification Detail</span></th>
    </tr>
  <tr>
    <th class="text-left txt">Highest Educational Qualification</th>
    <td><?php echo $abc->h_qualification;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Year Of Passing</th>
   <td><?php echo $abc->year_of_passing;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 5. Examination  Detail</span></th>
    </tr>
  <tr>
    <th class="text-left txt">Select State Of Accredited Institute</th>
   <td><?php echo $abc->accredited_state;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Select Center Name  Of Accredited Institute </th>
   <td><?php echo $abc->accredited_center;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Applied For Examination</th>
   <td><?php echo $abc->exam_name;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Examination Location</th>
   <td><?php echo $abc->exam_location;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 6. Identification Details</span></th>
    </tr>
  <tr>

  <tr>
    <th class="text-left txt">Adhaar Card Number</th>
    <td><?php echo $abc->adhar_no;?></td>
  </tr>
  <tr>
    <th class="text-left txt"> Photo</th>
   <td><?php echo $abc->image;?></td>
  </tr>
  <tr>
    <th class="text-left txt">Left Thumb Impression</th>
   <td><?php echo $abc->thumb;?></td>
  </tr>
 

</table>
<?php }?>

<?php $this->load->view('footer'); ?>
         
</body>
</html>
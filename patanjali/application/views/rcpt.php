<!DOCTYPE html>
<html>
<head>
  <title></title>
 <!--datatable export pdf button lib -->


<!--pdf generator-->
<script type="text/javascript">
    function myFunction() {
  window.print();
}
</script>
<!-- end pdf generator-->


</head>
<body>

  <div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
<?php $this->load->view('header'); ?>
         
            
    <?php foreach($adc as $abc)
    { ?>
<table class=" table table-bordered" id="tblrcpt">
  <tr class="head_tr">
  <th colspan="2"> <span style="font-size: 15px;">1. Personal Detail</span> </th>
    </tr>
    <tr>
    <td class="text-left txt"> Student ID</td>
    <td><?php echo $abc->stud_id;?></td>
  </tr>
  <tr>
    <td class="text-left txt"> Student Name</td>
    <td><?php echo $abc->name;?></td>
  </tr>
  
   <tr>
    <td class="text-left txt">Student Father Name</td>
   <td><?php echo $abc->father_name;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Student Mother Name</td>
   <td><?php echo $abc->mother_name;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Gender</td>
   <td><?php echo $abc->gender;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Date Of Birth</td>
   <td><?php echo $abc->date_of_birth;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Category</td>
   <td><?php echo $abc->category;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Occupation</td>
    <td><?php echo $abc->occupation;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Desability</td>
    <td><?php echo $abc->desability;?></td>
  </tr>
   <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 2. Contact Detail</span></th>
    </tr>
   <tr>
    <td class="text-left txt">Phone No</td>
   <td><?php echo $abc->phone_no;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Mobile</td>
    <td><?php echo $abc->mobile;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 3. Address Detail</span></th>
    </tr>
  <tr>
    <td class="text-left txt">Address line 1</td>
    <td><?php echo $abc->address_1;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Address line 2</td>
   <td><?php echo $abc->address_2;?></td>
  </tr>
  <tr>
    <td class="text-left txt">City Name</td>
   <td><?php echo $abc->city_name;?></td>
  </tr>
  <tr>
    <td class="text-left txt">State Name</td>
   <td><?php echo $abc->state_name;?></td>
  </tr>
  <tr>
    <td class="text-left txt">District Name</td>
    <td><?php echo $abc->district_name;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 4. Educational / Qualification Detail</span></th>
    </tr>
  <tr>
    <td class="text-left txt">Highest Educational Qualification</td>
    <td><?php echo $abc->h_qualification;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Year Of Passing</td>
   <td><?php echo $abc->year_of_passing;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 5. Examination  Detail</span></th>
    </tr>
  <tr>
    <td class="text-left txt">Select State Of Accredited Institute</td>
   <td><?php echo $abc->accredited_state;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Select Center Name  Of Accredited Institute </td>
   <td><?php echo $abc->accredited_center;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Applied For Examination</td>
   <td><?php echo $abc->exam_name;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Examination Location</td>
   <td><?php echo $abc->exam_location;?></td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"><span style="font-size: 15px;"> 6. Identification Details</span></th>
    </tr>
  <tr>

  <tr >
    <td class="txt">Adhaar Card Number</td>
    <td><?php echo $abc->adhar_no;?></td>
  </tr>
  <tr>
    <td class="text-left txt"> Photo</td>
   <td><img src="<?php echo base_url();?>assets/studimg/img/<?php  echo $abc->image;?>" style="max-height: 100px; max-width: 100px;"></td>
  </tr>
  <tr>
    <td class="text-left txt">Left Thumb Impression</td>
   <td><img src="<?php echo base_url();?>assets/studimg/thumb/<?php echo $abc->thumb;?>" style="max-height: 100px; max-width: 100px;"></td>
  </tr>
 <tr><td colspan="2"><button onclick="myFunction()">Print this page</button></td></tr>

</table>
<?php }?>

<?php $this->load->view('footer'); ?>
         
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style type="text/css">
  .txt{
        font-size: 17px;
  }
  .head_tr{
    background-color: #335AFF;
    color: white;
     font-size: 20px;
  }
</style>
<script type="text/javascript">
function test() 
{
  alert("Your Ragistration is submitted..");
}
</script>
</head>
<body>
	<div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
	<?php $this->load->view('header'); ?>
         <?php $this->load->view('menu'); ?>
                             <h3 style="color: blue; text-align: center;text-decoration:underline; ">Examination Application Form: CCC Plus(CCCP)</h3> 

<form action="<?php echo base_url();?>index.php/welcome/emp_form" method="post" >
  





<table class=" table table-bordered ">
  <tr class="head_tr">
  <th colspan="2"> 1. Personal Detail</th>
    </tr>
  <tr>
    <th class="text-left txt">Enter your name</th>
    <td>
       <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required=""></td>
  </tr>
  <tr>
    <th class="text-left txt">Care Of</th>
    <td>
        <input type="radio" name="optradio" value="Father">&nbsp;&nbsp;Father&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="optradio" value="Mother">&nbsp;&nbsp;Mother

      </td>
  </tr>
   <tr>
    <th class="text-left txt">Enter Your Father Name</th>
    <td>
       <input type="text" class="form-control" placeholder="Enter Your Name Father Name" name="fathername" required="">
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Enter Your Mother Name</th>
    <td>
      <input type="text" class="form-control" placeholder="Enter Your Name Mother Name" name="mothername" required="">
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Gender</th>
    <td>
       <input type="radio" name="optradio1" value="Male">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="optradio1" value="Female" >&nbsp;&nbsp;Female
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Date Of Birth</th>
    <td>
       <input type="Date" class="form-control" placeholder="Enter Your Date Of Birth" name="dateofbirth" required="">
       
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Category</th>
    <td>
        <select id="inputState" class="form-control" name="Category" required="">
        <option>Choose</option>
        <option value="GENERAL">GENERAL</option>
        <option value="OBC">OBC</option>
        <option value="ST">ST</option>
        <option value="SC">SC</option>
      </select>
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Occupation</th>
    <td>
        <select id="inputState" class="form-control" name="Occupation" required="">
        <option>Choose</option>
        <option value="Govt.">Govt.</option>
        <option value="Private">Private</option>
        <option value="Business">Business</option>
         <option value="other">other</option>
      </select>
      </td>
  </tr>
   <tr>
    <th class="text-left txt">Desability</th>
    <td>
        <input type="radio" name="optradio2" value="Yes">&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="radio" name="optradio2" value="No" >&nbsp;&nbsp;No

      </td>
  </tr>
   <tr class="head_tr">
  <th colspan="2"> 2. Contact Detail</th>
    </tr>
   <tr>
    <th class="text-left txt">Phone No</th>
    <td>
       <input type="text" class="form-control" placeholder="Enter Your Phone No" name="PhoneNo" >
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Mobile</th>
    <td>
       <input type="Number" class="form-control" id="inputEmail4" placeholder="Enter Your Mob. No." name="mobile" required="">
      </td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"> 3. Address Detail</th>
    </tr>
  <tr>
    <th class="text-left txt">Address line 1</th>
    <td>
        <input type="text" class="form-control" placeholder="Enter Your Address" name="Address1" required="">
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Address line 2</th>
    <td>
         <input type="text" class="form-control" placeholder="Enter Your Address" name="Address2" required="">
      </td>
  </tr>
  <tr>
    <th class="text-left txt">City Name</th>
    <td>
       <select id="inputState" class="form-control" name="CityName" required="">
        <option>Select</option>
        <option value="UP">Up</option>
        <option value="Manipur">Manipur</option>
        <option value="Mp">Mp</option>
         <option value="Delhi">Delhi</option>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">State Name</th>
    <td>
       <select id="inputState" class="form-control" name="StateName" required="">
        <option>Select</option>
        <option value="UP">Up</option>
        <option value="Manipur">Manipur</option>
        <option value="Mp">Mp</option>
         <option value="Delhi">Delhi</option>
      </select>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">District Name</th>
    <td>
        <select id="inputState" class="form-control" name="DistrictName" required="">
        <option >Select</option>
        <option value="kanpur">kanpur</option>
        <option value="Agra">Agra</option>
        <option value="Alighrah">Aligharh</option>
         <option value="Allahabad">Allahabad</option>
         <option value="Basti">Basti</option>
         <option value="Gonda">Gonda</option>
      </select>
      </td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"> 4. Educational / Qualification Detail</th>
    </tr>
  <tr>
    <th class="text-left txt">Highest Educational Qualification</th>
    <td>
        <select id="inputState" class="form-control" name="hQualification" required="">
        <option>Select</option>
        <option value="Btech">B.tech</option>
        <option value="Diploma">Diploma</option>
        <option value="Bsc">Bsc.</option>
         <option value="Ba">Ba.</option>
         <option value="iti">ITI</option>
      </select>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Year Of Passing</th>
    <td>
         <input type="Number" class="form-control" placeholder="Year Of Passing" name="PassingYear" required="">

      </td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"> 5. Examination  Detail</th>
    </tr>
  <tr>
    <th class="text-left txt">Select State Of Accredited Institute</th>
    <td>
        <select id="inputState" class="form-control" name=" AccreditedState" required="">
        <option>Select</option>
        <option value="Up">Up</option>
        <option value="Manipur">Manipur</option>
        <option value="Gujrat">Gujrat.</option>
         <option value="Delhi">Delhi</option>
      </select>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Select Center Name  Of Accredited Institute </th>
    <td>
        <select id="inputState" class="form-control" name="Accreditedcenter" required="">
        <option>Select</option>
        <option value="ramlala">Ramlala</option>
        <option value="Unzip">Unzip</option>
        <option value="Ion"> Ion</option>
         <option value="Bss">Bss</option>
      </select>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Applied For Examination</th>
    <td>
         <select id="inputState" class="form-control" name="AppliedExamination" required="">
        <option>Select</option>
        <option value="CCC">CCC< /option>
        <option value="railway">RAILWAY</option>
        <option value="Ssc">SSC</option>
         <option value="Rbi">RBI</option>
      </select>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Examination Location</th>
    <td>
       <select id="inputState" class="form-control" name="ExaminationLocation" required="">
        <option>Select</option>
        <option value="Up">UP</option>
        <option value="Agra">AGRA</option>
        <option value="Basti">BASTI</option>
         <option value="Gonda">GONDA</option>
      </select>
      </td>
  </tr>
  <tr class="head_tr">
  <th colspan="2"> 6. Identification Details</th>
    </tr>
  <tr>

  <tr>
    <th class="text-left txt">Adhaar Card Number</th>
    <td>
       <input type="Number" class="form-control" placeholder="Enter Your Adhaar Card Number" name="adharno" required="">
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Upload Photo</th>
    <td>
       Select images: <input type="file" name="img" multiple>
      </td>
  </tr>
  <tr>
    <th class="text-left txt">Upload Left Thumb Impression</th>
    <td>
       Choose File: <input type="file" name="thumbimg" multiple>
      </td>
  </tr>
 

</table>
<center>
    <button class="btn btn-success" onclick="test()">Submit </button>
   <a class="btn btn-primary" href="<?php echo base_url();?>index.php/welcome/apply">Back</a>
 
  </center>
</form>

<?php $this->load->view('footer'); ?>


</div>
</body>
</html>


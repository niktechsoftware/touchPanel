<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #CC0000;
  color:white;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>
  <div id="wrapper" style="border-radius:10px;border:2px solid blue">
<?php $this->load->view('header');?>
<div class="row">
  <div class="col-md-12">
   <center>
<h2>Center Details</h2>

</center>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo base_url();?>index.php/welcome/logout" class="btn btn-danger btn-right" style="float: right; padding-bottom: 15px'">Log Out</a>

  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'rstd')">Register Student</button>
          <button class="tablinks" onclick="openCity(event, 'editprofile')"> Center Profile</button>
          
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        <div id="rstd" class="tabcontent">
          <h3> <center>Register Student </center></h3>
            <table class="table table-bordered">
               <thead>
                  <tr>
                    <td><strong> S.No.</strong></td>&nbsp;&nbsp;&nbsp;&nbsp;
                     <td><strong>Student ID</strong></td>&nbsp;&nbsp;&nbsp;&nbsp;
                     <td><strong>Student Name</strong></td>
                  </tr>
                </thead>

                        <?php
                         $c_id=$this->session->userdata('id');
                        // $this->db->select('name');
                        //  $this->db->from('registration_table');
                        // $cd =$this->db->where('accredited_center',$usernm1)->row();
                        // $cd=$this->db->query("select name from registration_table where accredited_center=")
                         
                        $cd = "SELECT * FROM registration_table WHERE accredited_center = ?";
                        $res= $this->db->query($cd, array($c_id))->result();
                        // $cd = $this->db->get('registration_table')->result();
                        ?>
                        <?php $i = 1;?> 
                          <?php foreach($res as $cdb): ?>
                 <tbody> 
                    <tr>
                       <td><?php echo $i; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;
                       <td><?php echo $cdb->stud_id; ?></td> &nbsp;&nbsp;&nbsp;&nbsp;
                       <td><?php echo $cdb->name; ?></td>&nbsp;&nbsp;&nbsp;&nbsp;
                    </tr>
                    <?php $i++ ; ?>
                    <?php endforeach;?>
                  </tbody>
   
            </table>
          </div>
          <div id="editprofile" class="tabcontent">
  <h3><center>Edit Center Profile</center></h3>
<?php 
$cde = "SELECT * FROM center WHERE c_id = ?";
 $cdb= $this->db->query($cde, array($c_id))->result();

?>
 <?php foreach($cdb as $abc): ?>
<table class=" table table-bordered" id="tblrcpt">
  <tr class="head_tr">
  <th colspan="2"> <span style="font-size: 15px;">Center Detail</span> </th>
    </tr>
    <tr>
    <td > Center ID</td>
    <td><?php echo $abc->c_id;?></td>
  </tr>
  <tr>
   <td > Center Name</td>
    <td><?php echo $abc->center_name;?></td>
  </tr>
  
   <tr>
    <td >Email</td>
   <td><?php echo $abc->email;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Password</td>
   <td><?php echo $abc->password;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Pan No.</td>
   <td><?php echo $abc->pan;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Landmark</td>
   <td><?php echo $abc->landmark;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Address Proof</td>
   <td><?php echo $abc->land_agree;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Adhar Card</td>
   <td><?php echo $abc->adhar;?></td>
  </tr>
   <tr>
    <td class="text-left txt">Address</td>
    <td><?php echo $abc->address;?></td>
  </tr>
   <tr>
    <td class="text-left txt">State</td>
    <td><?php echo $abc->state;?></td>
  </tr>
  
    
   <tr>
    <td class="text-left txt">District</td>
   <td><?php echo $abc->district;?></td>
  </tr>
  <tr>
    <td class="text-left txt">Photo</td>
   <td><img src="<?php echo base_url();?>assets/centerimg/<?php echo $abc->upload_file;?>" style="max-height: 100px; max-width: 100px;"></td>
  </tr> 
  
</table>
<?php endforeach;?>
<center>
<button type="submit" name="submit" class="btn btn-danger btn-large" onclick="myFunction()">Update Center Detail</button>
</center>


  <div class="span9" id="form1" style="display:none;"> 
      <div style="padding:16px 20px">
      <div class="title" ><center><h2>  UPDATE CENTER DETAIL</h2></center></div>
             
        <!-- start: Contact Form -->
        <div id="contact-form" style="background:#c68dc0;border-radius:5px;padding:16px 20px">
          
          <form method="post" action="<?php echo base_url();?>index.php/welcome/center_update" enctype="multipart/form-data" name="register_form"  >
                    
          <fieldset>
              <div class="span6">
                <!-- <div class="clearfix">
                <label><span>Center ID:<span style="color:red">*</span></span></label>
                <div class="input">
                  <input tabindex="1" style="width:95%" name="centerid" Placeholder="Enter Center Name" type="text" required="">
                </div>
              </div> -->
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
              <!-- <div class="clearfix">
                <label for="name"><span>PAN Nummber:<span style="color:red">*</span></span></label>
                <div class="input">
                  <input tabindex="2" style="width:95%"  name="pan" type="text"  Placeholder="Enter PAN Number" class="input-xlarge" required="">
                            </div>
                                          </div>   -->
              <div class="clearfix">
                <label><span>LANDMARK:</span><span style="color:red">*</span></label>
                <div class="input">
                  <input tabindex="2" style="width:95%" Placeholder="Enter Landmark"  name="Landmark" type="text"  class="input-xlarge" required="">
                </div>
              </div>
              <!-- <div class="clearfix">
                <label><span>AADHAR CARD:</span><span style="color:red">*</span></label>
                <div class="input">
                  <input tabindex="2" style="width:95%" Placeholder="Enter Addhar Card"  name="adhar" type="number"  class="input-xlarge" required="">
                </div>
              </div> -->
                       <div class="clearfix">
            <label for="landagreement"><span>LAND AGREEMENT:<span style="color:red">*</span></span></label>
                
                  <div class="input" >
                <select name='land_agr' class='form-control' name="l_agree" style="width:95%;height:30px;" required="" >
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
                  <input tabindex="2" style="width:95% ;" Placeholder="Upload your File"  name="filed" type="file"  class="input-xlarge" required="">
                </div>
              </div>
              
                       </div>
        <div class="span12">
        <div class="actions">
        <hr/>          
        <center>
          <input type="submit" name="submit" class="btn btn-danger btn-large" value="Update" >
                
                </center>
              </div>
                      </div>

            </fieldset>
          
          </form>
          
        </div>
      
      </div>
      </div>
   

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



</script>

   </div>
    </div>
  </div>  <hr>
<?php $this->load->view('footer');?>
</div>
  
</body>
</html>

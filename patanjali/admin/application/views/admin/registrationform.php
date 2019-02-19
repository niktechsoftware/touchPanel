 <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <h2><center>REGISTER STUDENT DETAIL</center></h2>
                                           <?php $i = 1;?>
                                            <?php $res = $this->db->get("registration_table")->result();?>

                                            <thead><tr>
                                                <th>SNO</th>
                                              <th>Name</th>
                                              
                                              <th>FATHER NAME</th>
                                              <th>MOTHER NAME</th>
                                              <th>DATE-OF-BIRTH</th>
                                              <th>GENDER</th>
                                              <th>MOBILE</th>
                                              <th>ADDRESS</th>
                                              <th>ADHAR NO.</th>
                                              
                                              <th>STATUS VALUE(Active=1,Inactive=0) </th>
                                              <th>STATUS</th>
                                              <th>DELETE</th>
                                             </tr></thead>

                                            <?php foreach($res as $row)
                                            {
                                            ?>
                                            <tr><td>
                                            <?php echo $i; ?></td>
                                          <td><?php echo $row->name;?></td>
                                          <td><?php echo $row->father_name;?></td>
                                          <td><?php echo $row->mother_name;?></td>
                                          <td><?php echo $row->date_of_birth;?></td>
                                          <td><?php echo $row->gender;?></td>
                                          <td><?php echo $row->mobile;?></td>
                                          <td><?php echo $row->address_1;?></td>
                                         <td><?php echo $row->adhar_no;?></td>
                                         <td class="text-center"><?php echo $row->status;?></td>
                                         <?php if($row->status)
                                         { ?>
                                           <td ><span style="color:green;">Active Student</span></td>

                                           <?php  } 
                                         else   
                                          {   ?>
                                         <td style="color:red;"><a href="<?php echo base_url();?>index.php/apanel/addformDetail/<?php echo $row->id;?>"><span style="color:red;">Inactive Student</span></a></td>
                                    <?php   }?>
                                         <td><a href="<?php echo base_url();?>apanel/deleteformDetail/<?php echo $row->id;?>">Delete</a></td>
                                       </tr>
                                       <?php $i++;}?>    
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
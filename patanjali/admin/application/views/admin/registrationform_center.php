 <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <h2><center>REGISTER CENTER DETAIL</center></h2>
                                           <?php $i = 1;?>
                                            <?php $res = $this->db->get("center")->result();?>

                                            <thead><tr>
                                                <th>SNO</th>
                                             <th>CENTER ID</th>
                                              <th> CENTER NAME</th>
                                              <th>DIRECTOR NAME</th>
                                              <th>EMAIL</th>
                                              <th>ADDRESS</th>
                                              
                                              <th>PAN</th>
                                              <th>AADHAR NO.</th>
                                              <th>STATE</th>
                                              <th>DISTRICT</th>
                                              
                                              <th>STATUS VALUE(Active=1,Inactive=0) </th>
                                              <th>STATUS</th>
                                              <th>DELETE</th>
                                             </tr></thead>

                                            <?php foreach($res as $row)
                                            {
                                            ?>
                                            <tr><td>
                                            <?php echo $i; ?></td>
                                          <td><?php echo $row->c_id;?></td>
                                          <td><?php echo $row->center_name;?></td>
                                          <td><?php echo $row->director_name;?></td>
                                          <td><?php echo $row->email;?></td>
                                          <td><?php echo $row->address;?></td>
                                          <td><?php echo $row->pan;?></td>
                                          <td><?php echo $row->adhar;?></td>
                                         <td><?php echo $row->state;?></td>
                                          <td><?php echo $row->district;?></td>
                                         <td class="text-center"><?php echo $row->status;?></td>
                                         <?php if($row->status)
                                         { ?>
                                           <td ><span style="color:green;">Active Student</span></td>

                                           <?php  } 
                                         else   
                                          {   ?>
                                         <td style="color:red;"><a href="<?php echo base_url();?>index.php/apanel/addformDetail_center/<?php echo $row->c_id;?>"><span style="color:red;">Inactive Student</span></a></td>
                                    <?php   }?>
                                         <td><a href="<?php echo base_url();?>apanel/deleteformDetail_center/<?php echo $row->c_id;?>">Delete</a></td>
                                       </tr>
                                       <?php $i++;}?>    
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
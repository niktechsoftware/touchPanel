			<div class="page-sidebar sidebar horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                      
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-globe"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Website</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/noticeBoard">Notice Board</a></li>
                                <li><a href="<?php echo base_url();?>apanel/contact"> Enquiry Contact</a></li>
                                  <li><a href="<?php echo base_url();?>apanel/printRegister">Registration Submit Student Detail</a></li>
                                 <li><a href="<?php echo base_url();?>apanel/printRegister_center">Registration Submit Center Detail</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#"><span class="fa fa-mobile"></span><p>&nbsp;&nbsp;&nbsp;SMS TAB</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                 
                               
                            </ul>
                        </li>
                         <li><a href="<?php echo base_url();?>apanel/certifi_creation"><span class="menu-icon icon-credit-card"></span><p>&nbsp;&nbsp;&nbsp;Certification creation</p></a>
                        </li>
                        <!-- <li class="droplink">
                        	<a href="#">
                        		<span class="menu-icon icon-credit-card"></span>
                        		<p>Student Detail According Course</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                         <li><a href="<?php echo base_url();?>apanel/ADCA">Advance Diploma In Computer Application (ADCA)</a></li>
                                <li><a href="<?php echo base_url();?>apanel/CCA">Certificate In Computer Application (CCA)</a></li>
                                <li><a href="<?php echo base_url();?>apanel/CCC">Course on Computer concept (CCC)</a></li>
                              <li><a href="<?php echo base_url();?>apanel/YTT">Yoga Teachers Training (YTT)</a></l>
	                       	
                            </ul>
                        </li> -->
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-briefcase"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Register Student Active/Iactive</p>
                        		<span class="arrow"></span>
                        	</a>
                          <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/Active">Active</a></li>
                                <li><a href="<?php echo base_url();?>apanel/Inactive">Inactive</a></l>
                            </ul>
                        </li>

                        <li class="droplink">
                            <a href="#">
                                <span class="fa fa-briefcase"></span>
                                <p>&nbsp;&nbsp;&nbsp;Register Center Active/Iactive</p>
                                <span class="arrow"></span>
                            </a>
                          <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/Active_center">Active</a></li>
                                <li><a href="<?php echo base_url();?>apanel/Inactive_center">Inactive</a></l>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            
            <div class="page-inner">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb container">
                        <li class="active"><?php echo $smallTitle; ?></li>
                    </ol>
                </div>
                <div class="page-title">
                    <div class="container">
                        <h3><?php echo $bigTitle; ?></h3>
                    </div>
                </div>
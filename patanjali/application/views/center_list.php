<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 -->

</head>
<body>
	<div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
<?php $this->load->view('header'); ?>
         <?php $this->load->view('menu'); ?>
         <div class="container-fluid" style="padding-top:10px">		
        
        <div class="row"><div class="span12">		
        <h3 style="color:white;background:#21186E;text-align:center;padding:4px;margin-bottom:20px">Our Centre List</h3>		
        </div>                                                    
         <div class="span12">						  
          <div class="table-responsive" style="overflow-x:auto">                                      
          
          
          
          <div>
           <table class="table table-striped table-bordered table-hover table-responsive" id="tbl">
              <thead>

                 
                <tr style="text-align:center">
                    <th>S. No.</th>
                    <th>Director Name</th>
					<th>Organization Name</th>
					<th>Zone/Area</th>
					<th>Center Code</th>
                    <th>State</th>
                     <th>Status</th>
                   
					
                </tr>
              </thead>
              <?php 
             $res= $this->db->get('center')->result();

              ?>
               
			  <tbody>
			  	<?php $i = 1;?> 
			  	<?php foreach($res as $dt){ ?>
			  		
			  <tr>
			  <td><?php echo $i;?></td>
					<td><?php echo $dt->director_name;?></td>
					<td><?php echo $dt->center_name;?></td>
					<td><?php echo $dt->district;?></td>
					<td><?php echo $dt->c_id;?></td>
					
					<td><?php echo $dt->state;?></td>
					<td><?php echo $dt->status;?></td>
					
					
				</tr>	
				<?php $i++ ;?>
			<?php }?>
                																																	
                <strong></strong>																																			  	  
			  </tbody>
              
          </table>    
             </div>
             <div align="center"><font color="#CC3300">For New Center Min. 15KM Distance from Existing Center is Mandatory</font> </div>       
             </div>                    
                    </div>  
                    <br>   <br>                                               
          <div> <div align="center"><a href="<?php echo base_url();?>index.php/welcome/Apply_Center"" class="btn btn-success btn-large" >Apply Center</a></div><br>
            <div align="center"><a href="#" class="btn btn-success btn-large" >Click For Courses List</a></div>
			<br>
            <div align="center"><a href="#" class="btn btn-success btn-large" >Our Center Benefits</a></div>
			<br>
            <div align="center"><a href="#" class="btn btn-success btn-large" >Payment Option</a></div>
			<br>
		</div>
	</div>	  	
			</div>		
        
           <?php $this->load->view('footer'); ?>
      </div>
</body>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">-->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
 
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KEYPAD PROJECT</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  body{background-color: #d6ccce;}
  .main_page{margin-top: 208px;background-color: #7f7f6c; width: 50%;padding: 20px;}
  .main_image{height: 82px;width: 100%;}
  .main_button{color: #646262;width: 100%; background-color: #d6d1d2;height: 45px; font-size: 20px;}
</style>
</head>
<body>

<div id="container">
	<center> 
	 <div class="main_page">
		<div><img src="<?php echo base_url();?>assets/images/1.gif" class="main_image"></div>
          <div class="row" style="margin-top: 10px;"> 
          	<div class="col-md-6">
               <a href="<?php echo base_url(); ?>index.php/welcome/exam_result" class="btn main_button" role="button">Exam Reasults</a>
            </div>
          	<div class="col-md-6">
          		<!--<a href="<?php echo base_url(); ?>index.php/welcome/faulty_copies" ><button type="button" class="btn" style="color: #646262;width: 100%; height: 45px; font-size: 20px;">Faulty Copies</button></a>-->
              
               <a href="<?php echo base_url(); ?>index.php/welcome/faulty_copies" class="btn main_button" role="button" >Faulty Copies</a>
            </div>
          </div>
     </div>
    </center>
 
	</div>

</body>
</html>
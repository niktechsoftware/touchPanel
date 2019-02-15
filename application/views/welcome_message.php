<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        
$(document).ready(function(){
  
  $("#thover").click(function(){
    $(this).fadeOut();
    $("#tpopup").fadeOut();
  });
  
  
  $("#tclose").click(function(){
    $("#thover").fadeOut();
    $("#tpopup").fadeOut();
  });
  
});



    $(document).ready(function() {  

var id = '#dialog';
    
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
    
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500); 
$('#mask').fadeTo("slow",0.9);  
    
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
    
//transition effect
$(id).fadeIn(2000);     
    
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
    
});


function myFunction() 
{
  alert( "Maharashi Bhrigu  Yog Sansthan , Bharatvarsh was established under the aegis of Maharashi Bhrigu  Yog Sansthan Trust to conduct Early Childhood Care, Skills & Vocational based programmes Education & Training. Our aim to start RUCSVS is by giving them better life and making self-reliant by fostering financial inadequacy and beautification of children living in the remote area and by promoting women's education with education and employment oriented educationMaharashi Bhrigu  Yog Sansthan , Bharatvarsh was established under the aegis of Maharashi Bhrigu  Yog Sansthan Trust to conduct Early Childhood Care, Skills & Vocational based programmes Education & Training. Our aim to start RUCSVS is by giving them better life and making self-reliant by fostering financial inadequacy and beautification of children living in the remote area and by promoting women's education with education and employment oriented education");
}
    
    </script>
    
    <style type="text/css">



        #mask {

  position: absolute;

  left: 0;

  top: 0;

  z-index: 9000;

  background-color: #000;

  display: none;

}

 

#boxes .window {
  position: absolute;

  left: 0;

  top: 0;

  width: 440px;

  height: 200px;

  display: none;

  z-index: 9999;

  padding: 20px;

  border-radius: 15px;

  text-align: center;

}

 

#boxes #dialog {

  width: 750px;

  height: 300px;

  padding: 10px;

  background-color: #ffffff;

  font-family: 'Segoe UI Light', sans-serif;

  font-size: 15pt;

}

 

#popupfoot {

  font-size: 16pt;

  position: absolute;

  bottom: 0px;

  width: 250px;

  left: 250px;

}
</style>


   <!-- start: Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <meta charset="utf-8">
    <title>Maharshi Bhrigu Patanjali Yog Sansthan Bharatvarsh</title> 
    <meta name="description" content="Rural Urban Council of Skills & Vocational Studies have been run under the Rural Urban Skill Development & Educational Trust, Registered by NCT of Delhi, Trust Act. Early Childhoo & Vocational Training & Education Institute in Delhi.">
    <meta name="keywords" content="Rural Urban Council of Skills & Vocational Studies | RUCSVS | NTT Delhi | PTT Delhi | NPTT Delhi | Vocational Courses Delhi | Early Childhood Courses Delhi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/rucsvsicon.png" />
     <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets//style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/source/jsCalendar.css">

        <!-- jsCalendar -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/source/jsCalendar.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124030743-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124030743-1');




    function popup() {
              // body...
        
                        
             //  var theurl="http://localhost/CodeIgniter/";
             //   var width="400";
             //   var height="400";
             //   var  top="100";
             //  var left="100";

             // var setting="toolbar=no,menubar=no,scrollbar=no,resizable=yes,width="+width+",height="+height+",top="+top+",left="+left;
             // var popup=open(theurl,"box",setting);

    }
    window.onload=popup;
</script>
</head>
<body onload="myFunction()">






     <div class="container-fluid">       

    <div id="wrapper" style="border-radius:10px;border:2px solid blue">
                          

                         <?php $this->load->view('header'); ?>
                         <?php  $this->load->view('menu');   ?>
                         <?php  $this->load->view('slider'); ?>
                            <?php  $this->load->view('footer'); ?>
             

    
     </div>  
 </div>
    <!-- end: Wrapper  -->


    <!-- start: Copyright -->
    
    <!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
 
<script src="<?php echo base_url();?>assets/js/jquery-1.8.2.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/flexslider.js"></script>
<script src="<?php echo base_url();?>assets/js/carousel.js"></script>
<script def src="<?php echo base_url();?>assets/js/custom.js"></script>


<div id="boxes">
  <div id="dialog" class="window">
    Your Content Goes Here
    <div id="popupfoot"> <a href="#" class="close agree">I agree</a> | <a class="agree"style="color:red;" href="#">I do not agree</a> </div>
  </div>
  <div id="mask"></div>
</div>
    
<!-- end: Java Script -->

</body>
</html>

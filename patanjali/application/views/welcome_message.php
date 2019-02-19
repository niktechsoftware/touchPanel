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


// function myFunction() 
// {
//   alert( "Maharashi Bhrigu  Yog Sansthan , Bharatvarsh was established under the aegis of Maharashi Bhrigu  Yog Sansthan Trust to conduct Early Childhood Care, Skills & Vocational based programmes Education & Training. Our aim to start RUCSVS is by giving them better life and making self-reliant by fostering financial inadequacy and beautification of children living in the remote area and by promoting women's education with education and employment oriented educationMaharashi Bhrigu  Yog Sansthan , Bharatvarsh was established under the aegis of Maharashi Bhrigu  Yog Sansthan Trust to conduct Early Childhood Care, Skills & Vocational based programmes Education & Training. Our aim to start RUCSVS is by giving them better life and making self-reliant by fostering financial inadequacy and beautification of children living in the remote area and by promoting women's education with education and employment oriented education");
// }
    
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

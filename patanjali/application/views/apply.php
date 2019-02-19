<!DOCTYPE html>
<html>
<head>
	<title></title>
		
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
function openWin() {
  window.open("<?php echo base_url();?>index.php/welcome/apply1");
}

</script>

</head>
<body>
	<div id="wrapper" style="border-radius:10px;border:2px solid blue">
    
	<?php $this->load->view('header'); ?>
         <?php $this->load->view('menu'); ?>
                              

<div class="container" style="margin-top: 10px;">
	<center>
<form>
	<h3 style="font-size: 15px; font-family: kruti Dev 010; text-align: justify;">Declaration/ घोषणा
</h3><p>
		I, hereby declare that, I agree to abide by the rules and regulations of REGISTRATION and also to the decision of the Examination authority, regarding my eligibility for filling the exam form of CCCP. I declare that the particulars filled in the exam form are true to the best of my knowledge & belief. I have noted that the Examination Authority has the right to withhold my examination application or result, in addition to any other action as may be deemed fit in the event of any of the statement(s) made by me in the exam form/above being found incorrect. </p>
		<p>
		(मैं एतद्धारा घोषणा करता/करती हूँ कि मुझे CCCP में परीक्षा आवेदन हेतु मेरी योग्यता के संबंध में रा.इ.सू.प्रौ.सं. के नियम एवं विनियम तथा परीक्षा प्राधिकारी का निर्णय मान्य है। मैं घोषणा करता/ करती हूँ कि परीक्षा फार्म में मेरे द्वारा भरी गई जानकारी मेरे ज्ञान और विश्वास के अनुसार सही हैं. मुझे सूचित है कि परीक्षा प्राधिकारी / रा.इ.सू.प्रौ.सं को मेरा परीक्षा आवेदन और परिणाम रोकने अथवा रद्द करने का अधिकार है। इसके अतिरिक्त मेरे द्वारा परीक्षा आवेदन फार्म में भरी जानकारी / उपरोक्त निर्दिष्ट कथन सही न पाए जाने पर मेरे ऊपर किसी भी प्रकार की कार्रवाई करने का अधिकार रा.इ.सू.प्रौ.सं को होगा।) 
	</p>
  <input type="button" class="btn btn-success" value=" I M Agree" onclick="openWin()">
   <input type="button" class="btn btn-primary" value=" Log In" onclick="openWin1()" >
</form>
</center>
</div>
<?php $this->load->view('footer'); ?>

</div>

</body>
</html>

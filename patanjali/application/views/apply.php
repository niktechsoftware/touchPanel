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
                              


<form>
  <input type="button" value=" I M Agree" onclick="openWin()">
</form>

<?php $this->load->view('footer'); ?>

</div>

</body>
</html>

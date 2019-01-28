<!DOCTYPE html>

<html>
    <head>
        <title>Exam Result</title>
        <meta charset="UTF-8">
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/easy-numpad.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>
        body{background-color: #d6ccce;}
        .panel_btn{width:15%;    height: 50px; font-size: 32px;}
        .input-container {
                background-color: #c1c4d2;
                position: relative;
                -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
                -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
                box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
                padding: 220px;
            }
        .input-container > input {
                padding: 10px;
                outline: none !important;
                box-shadow: none !important;
                text-align: center;
                height: 82px;
                width: 100%;
                font-size: 65px;
            }
        span.tap {
                font-size: 22px;
            }

        </style>
    </head>
    <body>
        <div class="page-container" >
            <h1 class="text-center">Type Student ID</h1>
			
			<form method="post">
            <div class="input-container easy-get">
                <input type="text" class="easy-put" name="studid" placeholder="Touch Here...." readonly="true"/>
            </div>
			
			<input type="submit" name="submit" class="btn btn-info panel_btn" value="Ok" >
             <a href="<?php echo base_url(); ?>" class="btn btn-success panel_btn" role="button" >Back</a>
			</form>
			
			
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/easy-numpad.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>

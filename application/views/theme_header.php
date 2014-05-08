<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords"
	content="thaihubhosting, hosting, host, high perfomance">
<meta name="description"
	content="เว็บโฮสติ้งคุณภาพสูง ที่ได้รับการออกแบบติดตั้งและผู้แลจากผู้เชี่ยวชาญตลอด 24 ชั่วโมง">
<meta name="author" content="CBNUKE">
<!--<link rel="shortcut icon" href="ico/favicon.png">-->

<title><?php echo $title;?></title>

<!-- Bootstrap core CSS -->
    <?php echo css('bootstrap.css');?>
<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- Custom styles for this template -->
    <?php echo css('carousel.css');?>
    <?php echo css('theme.css');?>
 
 	<?php echo js('jquery.js');?>
 	<?php echo js('bootstrap.js');?>
 	<?php echo js('holder.js');?>    
  </head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<?php echo anchor('home','THAIHUBHOSTING',array('class'=>'navbar-brand'));?>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li
						<?php if($this->router->class=='home'){echo 'class="active"';}?>><?php echo anchor('home','<span class="glyphicon glyphicon-home"></span> หน้าหลัก');?></li>
					<li
						<?php if($this->router->class=='hosting'){echo 'class="active"';}?>><?php echo anchor('hosting','<span class="glyphicon glyphicon-hdd"></span> โฮสติ้งแพ็คเกจ');?></li>
					<li
						<?php if($this->router->class=='features'){echo 'class="active"';}?>><?php echo anchor('features','<span class="glyphicon glyphicon-heart"></span> คุณสมบัติของโฮสติ้ง');?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo anchor('http://customer.thaihubhosting.com/clientarea.php','<span class="glyphicon glyphicon-user"></span> ส่วนจัดการลูกค้า')?></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- container -->
	<div class="container marketing">
		<?php
		
		if (isset ( $debug )) {
			print '<pre>';
			print_r ( $debug );
			print '</pre>';
		}
		?>
		<?php if(isset($alert))echo $alert;?>
	</div>
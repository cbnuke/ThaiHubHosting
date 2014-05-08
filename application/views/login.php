<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>เข้าระบบ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<?php
echo css ( 'bootstrap.css' );
echo css ( 'bootstrap-responsive.css' );
?>
<style type="text/css">
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-repeat: repeat;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-repeat: repeat;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-image: -webkit-radial-gradient(circle, #165387, #142849);
	background-image: -moz-radial-gradient(circle, #165387, #142849);
	background-image: -o-radial-gradient(circle, #165387, #142849);
	background-color: #142849;
	background-image: -webkit-gradient(radial, center center, 0, center center, 460, from(#165387
		), to(#142849) );
}

.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
}

.form-signin .form-signin-heading,.form-signin .checkbox {
	margin-bottom: 10px;
}

.form-signin input[type="text"],.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="../assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="../assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="../assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="../assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>
	<div class="container">
		<?php echo $form;?>
		<h2 class="form-signin-heading">เข้าระบบ</h2>
		<div
			class="control-group <?php if(form_error('username'))echo 'error'; ?>"
			style="padding: 0px; margin: 0px;">
			<div class="input-prepend">
				<span class="add-on" style="padding: 7px 14px;"><i class="icon-user"></i>
				</span>
				<?php echo $input['username'];?>
			</div>
		</div>
		<div
			class="control-group <?php if(form_error('password'))echo 'error'; ?>"
			style="padding: 0px; margin: 0px;">
			<div class="input-prepend">
				<span class="add-on" style="padding: 7px 14px;"><i class="icon-lock"></i>
				</span>
				<?php echo $input['password'];?>
				placeholder="Password">
			</div>
		</div>
		<button class="btn btn-large btn-block btn-primary" type="submit">เข้าระบบ</button>
		<p></p>
		<?php if(isset($message))echo $message;?>
		<?php echo form_close();?>
	</div>
	<!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php
	echo js ( 'jquery.js' );
	echo js ( 'bootstrap.js' );
	?>
</body>
</html>

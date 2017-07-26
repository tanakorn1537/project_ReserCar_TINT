<!DOCTYPE html>
<html>
<head>
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<title>ระบบจองรถตู้ สทน. </title>
</head>
<body>
	<table align="center" width="70%" border="1">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">ระบบจองรถยนต์ส่วนกลาง<br>
			สถาบันเทคโนโลยีนิวเคลียร์แห่งชาติ (องค์การมหาชน) </span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>กรุณาเข้าสู่ระบบ</h2>
			</div>
			<form action="Ck_Log.php" method="post">
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button type="submit">Sign In</button>
			</form>
		</div>
	</div>
<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
		<meta charset="UTF-8"/>
		<title>اتصل بنا</title>
		<link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700,900" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/css-loader.css"/>
		<link rel="stylesheet" href="css/contact.css"/>
	</head>
	<body>
		<div class="wrapper">
			<div class="validate"></div>
			<h1 class="contact-title">اتصل بنا</h1>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="contact">
				<div class="contact-head"><span class="fa fa-envelope-o"></span>&nbsp; قم بارسال رسالة و سوف نعود لك بالرد في خلال 24 ساعة</div>
				<label id="name">
					<h4>الاسم *</h4>
					<input type="text" name="name" placeholder="اكتب اسمك بالكامل" autofocus/>
				</label>
				<label id="phone">
					<h4>رقم الهاتف *</h4>
					<input type="text" name="phone" placeholder="ادخل رقم هاتفك ( الجوال )"/>
				</label>
				<label id="email">
					<h4>البريد الالكترونى *</h4>
					<input type="email" name="email" placeholder="ادخل بريد الكترونى صالح"/>
				</label>
				<label id="message">
					<h4>الرسالة *</h4>
					<textarea name="message" placeholder="اكتب رسالتك"></textarea>
				</label>
				<button type="submit" name="send" id="send">ارسال الرسالة <span class="fa fa-send"></span></button>
			</form>
		</div>
		
		<!-- loader -->
		<div class="loader loader-default is-active" half></div>
		
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/contact.js"></script>
	</body>
</html>
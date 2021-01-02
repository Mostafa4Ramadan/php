<?php
	if($_POST["name"] == null)
	{
		echo "<p class='wrong'><strong>خطأ : </strong> من فضلك قم بتعبئة جميع الحقول</p>";
	}
	else if($_POST["phone"] == null)
	{
		echo "<p class='wrong'><strong>خطأ : </strong> من فضلك قم بتعبئة جميع الحقول</p>";
	}
	else if($_POST["email"] == null)
	{
		echo "<p class='wrong'><strong>خطأ : </strong> من فضلك قم بتعبئة جميع الحقول</p>";
	}
	else if($_POST["message"] == null)
	{
		echo "<p class='wrong'><strong>خطأ : </strong> من فضلك قم بتعبئة جميع الحقول</p>";
	}
	else if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) === false)
	{
		echo "<p class='wrong'><strong>خطأ : </strong> لقد ادخلت بريد الكترونى غير صالح</p>";
	}
	else if(!is_numeric($_POST['phone']))
	{
		echo "<p class='wrong'><strong>خطأ : </strong> الهاتف يجب ان يكون رقم</p>";
	}
	else
	{
		$name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$phone   = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$message = htmlspecialchars($_POST['message']);
		
		echo "<p class='success'><strong>تم الارسال بنجاح : </strong> سوف نقوم بالرد عليكم خلال 24 ساعة</p>";
		echo "
			<script type='text/javascript'>
				$(function(){
					$('input, textarea').val('');
				});
			</script>
		";
		
		$header   = 'from: '.$email. '\r\n' . ' phone: '.$phone.'\r\n';
		$my_email = "me.tech4blog@gmail.com"; // قم بتغير هذا البريد بالبريد الاكترونى الذى تريد استقبال الرسائل عليه
		
		mail($my_email,$name,$message,$header);
	}
?>
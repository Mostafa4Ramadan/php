$(document).ready(function(){
	$("#send").on('click',function(e){
		e.preventDefault();
		
		var n = $("#name input").val(),
			p = $("#phone input").val(),
			e = $("#email input").val(),
			m = $("#message textarea").val();
		
		$.ajax({
			url: 'https://raw.githack.com/Mostafa4Ramadan/php/main/contact/mail.php',
			method: 'POST',
			data: {name:n, phone:p, email:e, message:m},
			beforeSend: function()
			{
				$(".loader.is-active").fadeIn();
			},
			success: function(data)
			{
				setTimeout(function(){
					$(".loader.is-active").fadeOut(300);
					$(".validate").html(data);
					$("body").animate({
						scrollTop:"0",
					});
				},3000);
			},
		});
	});
});

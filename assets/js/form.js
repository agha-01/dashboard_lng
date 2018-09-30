$(function(){
	$("#name_error").hide();
	$("#last_error").hide();
	$("#email_error").hide();
	$("#pass_error").hide();
	$("#repass_error").hide();

	var name_error=false;
	var last_error=false;
	var email_error=false;
	var pass_error=false;
	var repass_error=false;

	$("#name").focusout(function(){
		check_name();
	});
	$("#last").focusout(function(){
		check_last();
	});
	$("#email").focusout(function(){
		check_email();
	});
	$("#pass").focusout(function(){
		check_pass();
	});
	$("#repass").focusout(function(){
		check_repass();
	});

	function check_name(){
		var name_length=$("#name").val().length;
		if (name_length<3 || name_length<25) {
			$("#name_error").html("Name 3 ve 25 arasi ola biler");
			$("#name_error").show();
			name_error=true;
		}
		else{
			$("#name_error").hide();
		}
	}
	function check_last(){
		var last_length=$("#lastname").val().length;
		if (last_length<5 || last_length>25) {
			$("#last_error").html("Surname 5 ve 25 arasi ola biler");
			$("#last_error").show();
			last_error=true;
		}
		else{
			("#last_error").hide();
		}
	}
	function check_email(){
			var pattern=new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
			if (pattern.test($("#email").val())) {
				$("#email_error").hide();
			}
			else{
				$("#email_error").html("Email dogru girin");
				$("#email_error").show();
				email_error=true;
			}
			
		}
	function check_pass(){
			var pass_length = $("#pass").val().length;
			if (pass_length < 8 ) {
				$("#pass_error").html("parol en az 8 simvol ola biler");
				$("#pass_error").show();
				pass_error=true;
			}else{
				$("#pass_error").hide();
			}
		}
		function check_repass(){
			var pass = $("#pass").val();
			var repass_length = $("#repass").val();
			if (pass!=repass_length) {
				$("#repass_error").html("parollar eyni deyil");
				$("#repass_error").show();
				repass_error=true;
			}else{
				$("#repass_error").hide();
			}
		}

	$("#form_register").submit(function(){
		name_error=false;
		last_error=false;
		email_error=false;
		pass_error=false;
		repass_error=false;

		check_name();
		check_last();
		check_email();
		check_pass();
		check_repass();
		if (name_error==false && last_error==false && email_error==false && pass_error==false && repass_error==false) {
				return true;
			}
			else{
				return false;
			}


	});
});
	$("#username").keyup(function () {
		var val = $("#username").val().toLowerCase().replace(/ /g,'');
		$(".inscription #login").val(val);
	});

	$("#membre_inscription").submit(function() {
		
		var err = false;
		
		var mail_check = /^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/.test($("#mail").val());
		if(!mail_check) {
			$("#mail_error").show();
			err = true;
		}
		else {
			$("#mail_error").hide();
		}

		if($(".inscription #pass").val() != $("#pass2").val()) {
			$("#pass_error").show();
			err = true;
		}
		else {
			$("#pass_error").hide();
		}

		
		return !err;
	});

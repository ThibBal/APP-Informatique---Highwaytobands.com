<script>

		
	$("#login").keyup(function () {
		var val = $("#login").val().toLowerCase().replace(/ /g,'');
		$("#name").val(val);
	});

	$("#inscription").submit(function() {
		
		var err = false;
		
		var mail_check = /^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/.test($("#mail").val());
		if(!mail_check) {
			$("#mail_error").show();
			err = true;
		}
		else {
			$("#mail_error").hide();
		}

		if($("#pass").val() != $("#pass2").val()) {
			$("#pass_error").show();
			err = true;
		}
		else {
			$("#pass_error").hide();
		}

		
		return !err;
	});

</script>
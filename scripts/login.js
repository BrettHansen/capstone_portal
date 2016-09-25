$(function() {
	$("#open_register_form").click(function() {
		$("#login").hide();
		$("#register").show();
	});

	$("#open_login_form").click(function() {
		$("#register").hide();
		$("#login").show();
	});
});
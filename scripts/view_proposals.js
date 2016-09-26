$(".long_description").hide();

$(".short_description_expand").click(function(e) {
	var short = $(e.target).parent().parent().parent();
	var long = short.next();

	short.hide();
	long.show();
});

$(".short_description_hide").click(function(e) {
	var long = $(e.target).parent();
	var short = long.prev();

	short.show();
	long.hide();
});

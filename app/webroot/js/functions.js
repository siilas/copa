$(document).ready(function() {
	
	$("#search").autocomplete({
		source: function(request, response) {
			$.ajax({
				url: "http://gd.geobytes.com/AutoCompleteCity",
				dataType: "jsonp",
				data: {
					q: request.term
				},
				success: function(data) {
					response(data);
				}
			});
		},
		select: function(event, ui) {
			alert(this.value);
		},
		minLength: 3,
		open: function() {
			$(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function() {
			$(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
	});
	
});
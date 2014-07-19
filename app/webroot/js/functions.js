var contexto = document.URL;

$(document).ready(function() {
	
	$("#search").autocomplete({
		source: function(request, response) {
			$.ajax({
				type: "POST",
				url: contexto + "usuario/buscarComAjax",
				dataType: "json",
				data: {
					nomeUsuario: request.term
				},
				success: function(data) {
					response(data);
				}
			});
		},
		select: function(event, ui) {
			abrirPagina("usuario/view/" + ui.item.id);
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

function abrirPagina(url) {
	window.location = contexto + url;
}
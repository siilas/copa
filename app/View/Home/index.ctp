<?php
/**
 * Página inicial da aplicação
 *
 */
?>
 
<div class="index">
	<div class="index-context">
			 	
	</div>
	 
	<div class="sidebar">
	 	<ul class="sidebar-list">
			<li class="widget widget-sidebar">
			 	<form method="post" name="search-form" class="search-form">
			 		<fieldset>
			 			<input id="search" name="search" placeholder="Busca por usuários..." type="text" />
			 		</fieldset>
			 	</form>
		 	</li>
		 	
		 	<li class="widget widget-sidebar">
		 		<div>
					<div id="fb-root"></div>
					
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-like-box" 
							data-href="https://www.facebook.com/FacebookDevelopers" 
							data-colorscheme="light" 
							data-show-faces="true" 
							data-header="true" 
							data-stream="false" 
							data-show-border="true">
					</div>
				</div>
		 	</li>
		</ul>
	</div>
 </div>
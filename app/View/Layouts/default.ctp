<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'FIFA World Cup - Figurinhas');
?>

<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
	
			echo $this->Html->css('jquery-ui');
			echo $this->Html->css('jquery-ui.structure');
			echo $this->Html->css('jquery-ui.theme');
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-theme');
			echo $this->Html->css('styles');
			
			echo $this->Html->script('jquery-1.11.1.min');
			echo $this->Html->script('jquery-ui');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('functions');	
			
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div class="container body-content">
			<div class="logo">
				<?php echo $this->Html->image('logo.png'); ?>
				
				<div class="div-right">
					<h1>
						FIFA World Cup 
						<div class="logo-spot">Figurinhas</div>
					</h1>
				</div>
			</div>
			<div class="jumbotron">				
				<div class="index">
					<div class="index-context">
					
						<?php echo $this->Session->flash(); ?>
	
						<?php echo $this->fetch('content'); ?>			
					 	
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
			</div>
			<div id="footer"></div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>
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
	
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('bootstrap-theme');
			echo $this->Html->css('styles');
			
			echo $this->Html->script('jquery-1.11.1.min');
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
				<h1>FIFA World Cup <div>Figurinhas</div></h1>
			</div>
			<div class="jumbotron">
	
				<?php echo $this->Session->flash(); ?>
	
				<?php /*echo $this->fetch('content');*/ ?>
			
			</div>
			<div id="footer"></div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>
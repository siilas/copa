<?php

	/**
	 *
	 * Página utilizada quando
	 * a URL é inválida
	 *
	 */

?>

<div class="jumbotron center">
	<div>
		<?php echo $this->Html->image('404.png', array("class" => "not-found")); ?>
	</div>
	<h1>
		Página não encontrada
	</h1>
	<p>
		Verifique se o endereço digitado está correto.
	</p>
</div>
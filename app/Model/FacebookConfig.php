<?php

class FacebookConfig extends AppController {

	public $name = "FacebookConfigs";
	
	public function buscarConfiguracoes() {
		$configuracoes = $this->find("first");
	}
}
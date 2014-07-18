<?php

class UsuarioController extends AppController {
	
	public function buscarComAjax() {
		$this->layout = "ajax";
		$nomeUsuario = $this->request->data("nomeUsuario");
		$this->set("nomeUsuario", $nomeUsuario);
	}
}
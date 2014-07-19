<?php

class UsuarioController extends AppController {
	
	public function buscarComAjax() {
		$this->layout = "ajax";
		$nomeUsuario = $this->request->data("nomeUsuario");
		$usuarios = $this->Usuario->buscarUsuariosAutoComplete($nomeUsuario);
		$this->set("usuarios", $usuarios);
	}
	
	public function view($id) {
		$usuario = $this->Usuario->buscarPorId($id);
		$this->set("usuario", $usuario);
	}
}
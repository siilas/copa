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
		if ($usuario == null) {
			$this->redirect("/");
		}
		$this->set("usuario", $usuario);
	}
	
	public function login() {
		$user = $this->request->data("user");
		$password = $this->request->data("password");
		$usuario = $this->Usuario->verificarUsuario($user, $password);
		if ($usuario != null) {
			$this->Session->write("userLogged", array(
				"user" => $usuario["email"],
				"password" => $usuario["password"]
			));
		} else {
			$this->set("msgError", "Usuário e/ou senha inválidos");
		}
	}
	
	public function logout() {
		$this->Session->delete("userLogged");
		$this->redirect("/");
	}
}
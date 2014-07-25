<?php

class Usuario extends AppModel {
	
	public $name = "Usuarios";
		
	public function buscarUsuariosAutoComplete($nome) {
		$usuarios = $this->find("all", array(
			"conditions" => array("Usuario.nome ILIKE" => "%".$nome."%"),
			"fields" => array("Usuario.id", "Usuario.nome")
		));
		$arrayUsuarios = array();
		foreach ($usuarios as $key => $usuario) {
			$arrayUsuarios[$key]["id"] = $usuario["Usuario"]["id"];
			$arrayUsuarios[$key]["value"] = $usuario["Usuario"]["nome"];
		}
		return $arrayUsuarios;
	}
	
	public function buscarPorId($id) {
		if (is_int($id)) {
			return $this->find("first", array(
				"conditions" => array("Usuario.id" => $id)
			));
		}
	}
	
	public function verificarUsuario($user, $password) {
		$password = $this->encryptPassword($password); 
		return $this->find("first", array(
			"conditions" => array(
				"Usuario.email" => $user,
				"Usuario.password" => $password
			)
		));
	}
	
	public function beforeSave($options = array()) {
		$encryptedPassword = $this->encryptPassword($this->data["Usuario"]["password"]);
		$this->data["Usuario"]["password"] = $encryptedPassword;
	}
	
	private function encryptPassword($password) {
		return crypt($password);
	}
}
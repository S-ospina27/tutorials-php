<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Database\Class\Tutorials\Users;

class UsersController {

	private UsersModel $usersModel;
	public function __construct() {
		$this->usersModel = new UsersModel();
	}

	public function create() {
		$responseCreate = $this->usersModel->createDB(
			Users::formFields()
		);

		if ($responseCreate === "database-error") {
			return response->error("Ocurrio un error al registrar al usuario");
		}

		return response->success("Usuario registrado correctamente");
	}


	public function update() {
		$responseUpdate = $this->usersModel->updateDB(
			Users::formFields()
		);

		if ($responseUpdate === "database-error") {
			return response->error("Ocurrio un error al actualizar al usuario");
		}

		return response->success("Usuario actualizado correctamente");

	}

}
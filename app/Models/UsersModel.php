<?php

namespace App\Models;

use Database\Class\Tutorials\Users;
use LionSQL\Drivers\MySQL as DB;

class UsersModel {

	public function __construct() {
		
	}

	public function createDB(Users $users) {
		DB::call("create_users",[
			$users->getUsersName(),
			$users->getUsersEmail(),
			$users->getIdroles()
		])->execute();

	}

	public function readDB() {

	}

	public function updateDB() {

	}

	public function deleteDB() {

	}

}
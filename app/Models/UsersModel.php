<?php

namespace App\Models;

use Database\Class\Tutorials\Users;
use LionSQL\Drivers\MySQL as DB;

class UsersModel {

	public function __construct() {
		
	}

	public function createDB(Users $users) {
		return DB::call("create_users",[
			$users->getUsersName(),
			$users->getUsersEmail(),
			$users->getIdroles(),
			$users->getUsersPassword()
		])->execute();

	}

	public function readDB($id) {
		 return DB::table('users')
            ->select(
                DB::column('users_name'),
                DB::column('users_email'),
                DB::column('users_password')
            )
            ->where(DB::equalTo("idusers"), $id)
            ->get();
	}

	public function updateDB(Users $users) {
		return DB::call("update_users",[
			$users->getUsersName(),
			$users->getUsersEmail(),
			$users->getUsersPassword(),
			$users->getIdusers()
		])->execute();
	}

}
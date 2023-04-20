<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\LoginModel;

class LoginController {

    private LoginModel $loginModel;

    public function __construct() {
        $this->loginModel = new LoginModel();
    }

    public function auth() {
     $responseAuth = $this->loginModel->authDB();
     if ($responseAuth->cont === 0) {
        return  response->error("su cuenta no se encuentra registrada");
    }

    return response->success("ingreso de sesion exitoso",$responseAuth);
}

}
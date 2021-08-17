<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $errorMsg = '';
        if($request->get('error') === 1) {
            $errorMsg = 'Usuário não existe';
        } else if($request->get('error') === 2) {
            $errorMsg = 'É necessário estar logado';
        }
        return view('login.index', ['error' => $errorMsg]);
    }
    public function login(Request $request) {
        $rules = [
            'email' => 'email',
            'password' => 'required'
        ];
        $feedback = [
            'email' => 'E-mail inválido',
            'password.required' => 'Campo obrigatório'
        ];
        $request->validate($rules, $feedback);
        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user = $user->where('email', $email)->where('password', md5($password))->get()->first();
        if(isset($user->name)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            return redirect()->route('users.index');
        } else {
            return redirect()->route('login.index', ['error' => 1]);
        }
    }
    public function logout() {
        session_destroy();
        return redirect()->route('login.index');
    }
}

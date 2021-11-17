<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->info('Opss informe e-mail e senha para efetuar o login')->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message->info('Opps usuário e senha não conferem')->render();
            Auth::logout();
            return response()->json($json);
        }

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            // if ($user->user_status == 0) {
            //     $json['message'] = $this->message->error('Opps parece que seu usuário está bloqueado para acessar esse painel')->render();
            //     Auth::logout();
            //     return response()->json($json);
            // }

            // if ($user->user_level != 90 && $user->company->company_block == 1) {
            //     $json['message'] = $this->message->error('Desculpe, sua empresa está bloqueada para acessar esse painel entre em contato com o financeiro')->render();
            //     Auth::logout();
            //     return response()->json($json);
            // }


            $json['message'] = $this->message->success('Login efetuado com Sucesso')->render();
            $json['redirect'] = route('admin.dash');
            return response()->json($json);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}

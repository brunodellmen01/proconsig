<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Support\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
    protected $user;
    protected $message;


    public function __construct()
    {
        $this->message = new Message();
    }


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
        echo 'bateu aqui';
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function edit(Request $request)
    {
        if (Auth::user()->id  != $request->id) {
            //dieMessage('Desculpe você não tem permissão ou não está logado para alterar esse perfil', route('admin.dash'));
        } else {
            $user = User::where('id', $request->id)->first();
            return view('admin.profile.edit', [
                'user' => $user
            ]);
        }
    }

    public function update(Request $request)
    {

        $user = User::find($request->id);

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        if (!$user->save()) {
            $json['message'] = $this->message->info('Opss ocorreu um erro ao atualizar, por favor verifique todos os campos')->render();
            return response()->json($json);
        }

        $json['message'] = $this->message->success('Perfil atualizado com sucesso')->render();
        $json['redirect'] = route('admin.dash');
        return response()->json($json);
    }
}

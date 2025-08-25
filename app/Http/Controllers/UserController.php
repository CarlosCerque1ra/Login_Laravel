<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function cadastro(){
        return view('user.cadastro');
    }
    public function login(){
        return view('user.login');
    }
    public function home(){
        return view('user.home');
    }
    public function edit(Request $request)
    {
        $email = $request->query('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('user.verificacao')->withErrors(['email' => 'Usuário não encontrado.']);
        }

        return view('user.edit', compact('user'));
    }
    public function verificacao(){
        return view('user.verificacao');
    }

    public function store(Request $request){
        // Validação básica
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|string|min:6',
        ]);

        // Criação do usuário
        User::create([
            'name' => $request->input('nome'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('senha')),
        ]);

        // Redireciona para alguma página, ex: login
        return redirect()->route('user.login')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function logar(Request $request){
        // Validação básica
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|string',
        ]);

        // Tenta encontrar o usuário pelo email
        $user = User::where('email', $request->input('email'))->first();

        // Verifica se o usuário existe e a senha está correta
        if ($user && Hash::check($request->input('senha'), $user->password)) {
            // Autentica o usuário (você pode usar sessões ou qualquer outro método)
            // Aqui, apenas um exemplo simples de redirecionamento
            return redirect()->route('user.home')->with('success', 'Login realizado com sucesso!');
        } else {
            return back()->withErrors(['email' => 'Credenciais inválidas.'])->withInput();
        }
    }

    public function verificar(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if ($user) {
            // Redireciona para a página de edição passando o e-mail na query string
            return redirect()->route('user.edit', ['email' => $request->input('email')]);
        } else {
            // Retorna para a tela de verificação com erro
            return back()->withErrors(['email' => 'E-mail não encontrado.'])->withInput();
        }
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('user.login')->with('success', 'Senha alterada com sucesso!');
    }
}

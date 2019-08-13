<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Usuario;
session_start();

class HomeController extends Controller {

	public function acessar(Request $req) {
		if($req->has('email')) {
			$email = $req->input('email');
			$senha = md5($req->input('senha'));

			$usuario = Usuario::where([
			    ['email', $email],
			    ['senha', $senha],
			])->get();

			if(count($usuario) > 0) {
				$_SESSION['login'] = $usuario['0']['id'];

				return redirect('/');
			}

		}
		return redirect('/login');
	}

	public function home() {
		if(isset($_SESSION['login']) && !empty($_SESSION['login'])) {
			$usuario = Usuario::where('id', $_SESSION['login'])->get();
			$usuario = Usuario::where('permissao', $usuario['0']['permissao'])->get();
			if(count($usuario) == 1) {
				$usuario = Usuario::all();

				$array = array('usuario'=>$usuario);

				return view('admin', $array);
			} else {
				$usuario = Usuario::where('id', $_SESSION['login'])->get();

				$array = array('usuario'=>$usuario);

				return view('perfil', $array);
			}
		} else {
			return redirect('/login');
		}
		
	}

	public function add(Request $req) {
		if($req->has('email')) {
			$nome = $req->input('nome');
			$email = $req->input('email');
			$senha = $req->input('senha');

			$usuario = new Usuario;
			$usuario->nome = $nome;
			$usuario->email = $email;
			$usuario->senha = md5($senha);
			$usuario->save();
		}
		return redirect('/login');
	}

	public function desativar($id) {
		if($id == $_SESSION['login'] || $_SESSION['login'] == 1) {
			$usuario = Usuario::find($id);
			$usuario->status = 'desativado';
			$usuario->save();
		}		

		return redirect('/');
	}

	public function excluir($id) {
		if($id == $_SESSION['login'] || $_SESSION['login'] == 1) {
			$usuario = Usuario::find($id)->delete();
		}		

		return redirect('/');
	}

	public function editar($id) {
		if($id == $_SESSION['login'] || $_SESSION['login'] == 1) {
			$usuario = Usuario::find($id);

			$array = array('usuario'=>$usuario);

			return view('editar', $array);
		} else {
			return redirect('/');
		}
		
	}

	public function alterar(Request $req) {
		if($req->has('email')) {
			$nome = $req->input('nome');
			$email = $req->input('email');
			$id = $req->input('id');

			$usuario = Usuario::find($id);
			$usuario->nome = $nome;
			$usuario->email = $email;
			$usuario->save();
		}
		return redirect('/');
	}

	public function senha($id) {
		if($id == $_SESSION['login'] || $_SESSION['login'] == 1) {
			$usuario = Usuario::find($id);

			$array = array('usuario'=>$usuario);

			return view('editar-senha', $array);
		} else {
			return redirect('/');
		}

	}

	public function alterarSenha(Request $req) {
		if($req->has('senha')) {
			$senha = $req->input('senha');
			$id = $req->input('id');

			$usuario = Usuario::find($id);
			$usuario->senha = md5($senha);
			$usuario->save();
		}
		return redirect('/');
	}

	public function sair() {
		$_SESSION['login'] = '';
		return redirect('/login');
	}

}
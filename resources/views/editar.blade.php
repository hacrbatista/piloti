<h1>Editando Usuário</h1>

<form method="POST">
	{{ csrf_field() }}
	Nome: <br>
	<input type="text" name="nome" value="{{ $usuario->nome }}"> <br><br>
	Senha: <br>
	<input type="email" name="email" value="{{ $usuario->email }}"> <br><br>
	<input type="hidden" name="id" value="{{ $usuario->id }}">
	<input type="submit" value="Editar"><br><br>
	<a href="senha/{{ $usuario->id }}">Alterar Senha</a>
</form>
<a href="../home">Voltar</a>
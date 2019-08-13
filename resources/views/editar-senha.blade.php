<h1>Editando Senha Usuário</h1>

<form method="POST">
	{{ csrf_field() }}
	Nova Senha: <br>
	<input type="password" name="senha"> <br><br>
	<input type="hidden" name="id" value="{{ $usuario->id }}">
	<input type="submit" value="Editar Senha"><br><br>
</form>
<a href="../../home">Voltar</a>
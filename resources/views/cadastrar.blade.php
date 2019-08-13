<h1>Cadastrando Usuário</h1>

<form method="POST">
	{{ csrf_field() }}
	<input type="text" name="nome" placeholder="Nome:"> <br><br>
	<input type="email" name="email" placeholder="E-mail:"> <br><br>
	<input type="password" name="senha" placeholder="Senha:"> <br><br>
	<input type="submit" value="Cadastrar">
</form>
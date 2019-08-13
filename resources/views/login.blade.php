<?php
session_start();
?>
<h1>Login de Usuário</h1>

<form method="POST">
	{{ csrf_field() }}
	<input type="email" name="email" placeholder="E-mail:"> <br><br>
	<input type="password" name="senha" placeholder="Senha:"> <br><br>
	<input type="submit" value="Entrar"><br><br>
	<a href="cadastrar">Cadastrar Conta</a>
</form>
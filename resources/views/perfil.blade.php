<?php

if(!isset($_SESSION['login']) && empty($_SESSION['login'])) {
	header("Location: login");
	exit;
}
$id = $_SESSION['login'];
?>
<h1>Usuário</h1>
<a href="sair">Sair</a><br><br>

<table border="1">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	@foreach($usuario as $item)
	<tr>
		<td>{{ $item->nome }}</td>
		<td>{{ $item->email }}</td>
		<td><a href="editar/{{ $item->id }}">Editar</a></td>
	</tr>
	@endforeach

</table>
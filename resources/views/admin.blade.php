<?php

if(!isset($_SESSION['login']) && empty($_SESSION['login'])) {
	header("Location: login");
	exit;
}
$id = $_SESSION['login'];
?>
<h1>Admin</h1>
<a href="sair">Sair</a><br><br>

<table border="1">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	@foreach($usuario as $item)
		@if($item->permissao == 1)
		<tr>
			<td>{{ $item->nome }}</td>
			<td>{{ $item->email }}</td>
			<td><a href="editar/{{ $item->id }}">Editar</a></td>
		</tr>
		@endif
	@endforeach

</table>

<h2>Usuários Ativos</h2>

<table border="1">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	@foreach($usuario as $item)
		@if($item->permissao == 0 AND $item->status == 'ativo')
		<tr>
			<td>{{ $item->nome }}</td>
			<td>{{ $item->email }}</td>
			<td><a href="editar/{{ $item->id }}">Editar</a> <a href="desativar/{{ $item->id }}">Desativar</a></td>
		</tr>
		@endif
	@endforeach

</table>

<h2>Usuários Inativos</h2>

<table border="1">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	@foreach($usuario as $item)
		@if($item->status == 'desativado')
		<tr>
			<td>{{ $item->nome }}</td>
			<td>{{ $item->email }}</td>
			<td><a href="editar/{{ $item->id }}">Editar</a> <a href="excluir/{{ $item->id }}">Excluir</a></td>
		</tr>
		@endif
	@endforeach

</table>
@extends ('layouts.app')

@section ('content')
<div class="form-contatto">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Tutti gli utenti</h1> <h2 class="secondo-titolo"><a href="{{ route ('users.create')}}" class="btn btn-primary">Aggiungi nuovo utente</a></h2>
				<table class="table">
					<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Cognome</th>
						<th>Età</th>
						<th>Sesso</th>
						<th>Visualizza</th>
						<th>Aggiorna</th>
						<th>Elimina</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->lastname}}</td>
						<td>{{$user->age}}</td>
						<td>{{$user->gender}}</td>
						<td><a href="{{route('users.show', $user->id)}}" class="btn btn-primary">Mostra</a></td>
						<td>
							<a href="{{route('users.edit', $user->id)}}" class="btn btn-success">Modifica</a>
						</td>
						<td>
						<form action="{{ route('users.destroy', $user->id)}}" method="post">
						@csrf
						@method('DELETE')
						<input class="btn btn-danger" type="submit" value="Elimina">
						</form>
					</td>
					</tr>
					@endforeach
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

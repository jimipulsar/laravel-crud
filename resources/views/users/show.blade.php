@extends ('layouts.app')

@section ('content')
<div class="form-contatto">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Utente: {{ $user->name}} {{ $user->lastname}} </h1>
				<table class="table">
					<thead>
					<tr>
						<th>ID: {{$user->id}}</th>
						<th>Nome: {{$user->name}}</th>
						<th>Cognome: {{$user->lastname}}</th>
						<th>Età: {{$user->age}}</th>
						<th>Sesso: {{$user->gender}}</th>
					</tr>
				</thead>
				</table>
				<td><a href="{{route('users.index', $user->id)}}" class="btn btn-primary">Torna indietro</a></td>
				<td>
			</div>
		</div>
	</div>
</div>
@endsection

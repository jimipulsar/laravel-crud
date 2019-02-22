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
			</div>
		</div>
	</div>
</div>
@endsection

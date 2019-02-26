@extends('layouts.app')
@section('content')
<div class="form">
	@csrf
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="main-title">Aggiorna l'utente {{$user->name}}</h2>
				<form class="form-contatto" action="{{ route('users.update', $user->id)}}" method="post">
					@method('PUT')
					@csrf
			<div class="form-group">
			  <label for="name">Nome</label>
			  <input type="text" name="name" class="form-control" placeholder="Inserisci il tuo nome" value="{{$user->name}}">
			</div>
			<div class="form-group">
				<label for="lastname">Cognome</label>
				<input type="text" name="lastname" class="form-control" placeholder="Inserisci il tuo cognome" value="{{$user->lastname}}">
			</div>
			<div class="form-group">
				<label for="age">Età</label>
				<input type="text" name="age" class="form-control" placeholder="Inserisci la tua età" value="{{$user->age}}">
			</div>
			<div class="form-group">
				<label for="gender">Sesso</label>
			  <select class="form-control" name="gender">
					<option value="">-</option>
					<option value="m"{{ ('m' == $user->gender) ? ' selected' : null }}>M</option>
					<option value="f" {{ ('f' == $user->gender) ? ' selected' : null}}>F</option>
			  </select>
			</div>
			<div class="form-group">
				<input type="submit" value="Salva nuovo utente" class="form-control">
			</div>
		</div>
	</div>
</div>
</form>
@endsection

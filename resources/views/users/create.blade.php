@extends('layouts.app')
@section('content')
<form class="form-contatto" action="{{route('users.store')}}" method="POST">
	@csrf
	<div class="form-group">
	  <label for="name">Nome</label>
	  <input type="text" name="name" class="form-control" placeholder="Inserisci il tuo nome" required>
	</div>
	<div class="form-group">
		<label for="lastname">Cognome</label>
		<input type="text" name="lastname" class="form-control" placeholder="Inserisci il tuo cognome" required>
	</div>
	<div class="form-group">
		<label for="age">Età</label>
		<input type="text" name="age" class="form-control" placeholder="Inserisci la tua età" required>
	</div>
	<div class="form-group">
		<label for="gender">Sesso</label>
	  <select class="form-control" name="gender" required>
	    <option value="">-</option>
			<option value="m">M</option>
			<option value="f">F</option>
	  </select>
	</div>
	<div class="form-group">
		<input type="submit" value="Salva nuovo utente" class="form-control">
	</div>
</form>
@endsection

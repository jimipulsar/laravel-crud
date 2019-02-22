<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<title>UTENTI</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Boolean Crud</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('users.index')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index')}}">Utenti</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')
	</body>
</html>
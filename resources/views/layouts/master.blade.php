<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="{{ asset('argon/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />

	<title>@yield('title')</title>
</head>
<body>
	@include('partials.navbar')
	<main id="app" class="py-4">
		@yield('content')
	</main>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
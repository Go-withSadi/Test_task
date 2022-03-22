<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'ST Laravel') }}</title>

	<!-- Scripts -->
	
	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<!-- Styles -->
	{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/select2/select2.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css')}}" rel="stylesheet">
	
	<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/select2/select2.min.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	
</head>
<body>
	<div id="app">
		<div class="main">
			@yield('content')
		</div>
	</div>		
</body>
</html>
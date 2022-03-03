<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="generator" content="Hugo 0.84.0">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', '人事部担当者マイページ') }}</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
 
<main>
	<div class="container col-md-auto">
	    <div class="row">
		<div class="col-md-auto display-4"> List of Excellent Young-man</div>
		<div class="col p-3 bg-white">
			<a href="/logout"
					       onclick="event.preventDefault();
						     document.getElementById('logout-form').submit();">ログアウト</a>

			    <form id="logout-form" action="/logout" method="POST" style="display: none;">
				@csrf
			    </form>


		</div>
	    </div> <!--col-row-->
      @if (Session::has('message'))
				<div class="bg-light text-success">
					{{ Session::get('message') }}
				</div>
			@endif
      @yield('mediator')
    </div>

  </body>
</html>

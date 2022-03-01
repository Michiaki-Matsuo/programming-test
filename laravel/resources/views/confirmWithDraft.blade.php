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
		<div class="container">
      <div class="col-md-6">
        <p class="py-3 font-weight-bold">送信前確認用メール本文</p>
      </div>
	  	<div class="col-md-8 border border-5 border-dark">
				@foreach($messages AS $message)
          {{ $message }} <br>
        @endforeach
      </div>
    </div>
    <form method="POST" >
				@csrf
        <input type='hidden' name='name' value="{{ $data['name'] }}">
        <input type='hidden' name='department' value="{{ $data['department'] }}">
        <input type='hidden' name='email' value="{{ $data['email'] }}">
        <input type='hidden' name='password' value="{{ $data['password'] }}">
	
        <button class="btn btn-sm btn-primary" type="submit" formaction="/commitMediator">
				登録を確定してメールを送信する。
				</button>
        <button class="btn btn-sm btn-primary" type="submit" formaction="/editMediator">
				戻って修正する。
				</button>
			</div>
		</form>
	</main>
</body>

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
		<div class="row">
			<div class="col-md-4 border border-5 border-dark">
				<div class="offset-md-3 display-5">確認用メール文書</div>
				<p>いつも優秀な人材を紹介してくれてありがとうございます。</p>
				<p>これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。</p>
				<p>List of Excellent Young-man は、みなさんから人事部に紹介してもいいと</p>
				<p>思った人たちを登録いただくシステムです。</p>
				<p>もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。</p>
				
				<p>	個別のログインパスワード</p>
				 <p>URL</p>
			</div>
		</div>
	</main>
</body>

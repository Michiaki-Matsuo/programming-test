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
	  	<div class="col-md-8 border border-5 border-dark my-0 py-0">
        <p style="margin: 0px; padding: 0px;">{{ $data['department'] . ' ' . $data['name'] . ' 様'}}</p>
        <p style="margin: 0px; padding: 0px;">{{'送付アドレス：' . $data['email']}}</p>
        <p style="margin: 0px; padding: 20px 0px 0px 20px;">いつも優秀な人材を紹介してくれてありがとうございます。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">これからも、我が社に入ってくれそうな人材をぜひともご紹介ください。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">List of Excellent Young-man は、みなさんから人事部に紹介してもいいと思った人たちを登録いただくシステムです。</p>
        <p style="margin: 0px; padding: 0px 0px 0px 20px;">もし人事部から連絡してもよい優秀な方がいらっしゃいましたら、ぜひご登録をお願いします。</p>
        <p style="margin: 0px; padding: 20px 0px 0px 20px;">List of Excellent Young-manには下記からアクセス下さい。</p>
        <a style="margin: 0px; padding: 20px 0px 0px 40px;" href="{{ route('mediatorMyPage') }}"> {{ route('mediatorMyPage') }}</a>
        <p style="margin: 0px; padding: 10px 0px 20px 20px;">{{ $data['name'] . ' 様の個別パスワードは、「' . $data['password'] . '」となっております。'}}</p>
      </div>
      <form class="my-5" method="POST" >
			  @csrf
          <input type='hidden' name='name' value="{{ $data['name'] }}">
          <input type='hidden' name='department' value="{{ $data['department'] }}">
          <input type='hidden' name='email' value="{{ $data['email'] }}">
          <input type='hidden' name='password' value="{{ $data['password'] }}">
	
          <button class="btn btn-bg btn-primary" type="submit" formaction="/commitMediator">
				  登録を確定してメールを送信する。
				  </button>
          <button class="btn btn-bg btn-primary" type="submit" formaction="/editMediator">
				  戻って修正する。
				  </button>
  		</form>
    </div>
	</main>
</body>

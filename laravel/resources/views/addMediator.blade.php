@extends('layouts.mypage')
@section('mediator')
	<div class="row">
	<div class="col-md-4 border border-5 border-dark">
		<div class="offset-md-3 display-5">紹介情報提供者</div>
		<form method="POST" >
				@csrf
			御名前
			<input type="text" required value="{{$data['name']}}" class="form-control border border-2 border-secondary" name="name">
			部署名
			<input type="text" required value="{{$data['department']}}" class="form-control border border-2 border-secondary" name="department">
			メールアドレス
			<input type="email" required  value="{{$data['email']}}" class="form-control border border-2 border-secondary" name="email" placeholder="name@example.com">
			<div class="btn-group ml-auto" style="margin: 10px 10px 10px 0px">
				<button class="btn btn-sm btn-primary" type="submit" formaction="/confirmWithDraft">
				下書きメールの確認へ進む
				</button>
				<a href="/myPage">上記を破棄してマイページへ戻る</a>
			</div>
		</form>
@endsection
